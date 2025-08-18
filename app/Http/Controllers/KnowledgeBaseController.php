<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KnowledgeBase;
use App\Category;

class KnowledgeBaseController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructions = KnowledgeBase::all();
        return view('pages.knowledge-base-new.index', ['post' => $instructions]);
    }

    public function indexReact()
    {

        // Retrieve all posts with their associated category names
            $instructions = KnowledgeBase::select('knowledge_base.id', 'knowledge_base.title', 'knowledge_base.description', 'knowledge_base.category_id', 'categories.name as category_name')
            ->join('categories', 'knowledge_base.category_id', '=', 'categories.id')
            ->whereIn('knowledge_base.id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('knowledge_base')
                    ->groupBy('category_id');
            })
            ->get();

        return response()->json($instructions);
    
    }

    public function categoryIndex()
    {
        return view('pages.knowledge-base-new.category');
    }

    public function categoryReact($category_id)
    {
        // Check if category_id is 17, include category_id 19 as well
        if ($category_id == 17) {
            $instructions = KnowledgeBase::select(
                'knowledge_base.id', 
                'knowledge_base.title',
                'knowledge_base.title_second', 
                'knowledge_base.link', 
                'knowledge_base.description', 
                'knowledge_base.category_id', 
                'knowledge_base.status', 
                'knowledge_base.is_soon', 
                'categories.name as category_name'
            )
            ->join('categories', 'knowledge_base.category_id', '=', 'categories.id')
            ->where('knowledge_base.status', 'published')
            ->whereIn('knowledge_base.category_id', [17, 19]) // Include both category 17 and 19
            ->get();
        } else {
            // Default case for a single category
            $instructions = KnowledgeBase::select(
                'knowledge_base.id', 
                'knowledge_base.title',
                'knowledge_base.title_second', 
                'knowledge_base.link', 
                'knowledge_base.description', 
                'knowledge_base.category_id', 
                'knowledge_base.status', 
                'knowledge_base.is_soon', 
                'categories.name as category_name'
            )
            ->join('categories', 'knowledge_base.category_id', '=', 'categories.id')
            ->where('knowledge_base.category_id', $category_id) // Single category case
            ->get();
        }

        return response()->json($instructions);
    }


    public function popular()
    {
        // Retrieve the most liked published posts with non-empty description and web_content
        $instructions = KnowledgeBase::select(
            'knowledge_base.id', 
            'knowledge_base.title', 
            'knowledge_base.link', 
            'knowledge_base.description', 
            'knowledge_base.web_content', // Assuming web_content is a field in the table
            'knowledge_base.category_id', 
            'categories.name as category_name'
        )
        ->join('categories', 'knowledge_base.category_id', '=', 'categories.id')
        ->where('knowledge_base.status', 'published') // Only published instructions
        ->whereNotNull('knowledge_base.description') // Ensure description is not null
        ->where('knowledge_base.description', '<>', '') // Ensure description is not empty
        ->whereNotNull('knowledge_base.web_content') // Ensure web_content is not null
        ->where('knowledge_base.web_content', '<>', '') // Ensure web_content is not empty
        ->whereIn('knowledge_base.id', function ($query) {
            $query->selectRaw('MAX(id)')
                ->from('knowledge_base')
                ->where('status', 'published') // Subquery only considers published instructions
                ->orderBy('like_count', 'desc') // Order by most liked
                ->groupBy('category_id');
        })
        ->limit(4) // Limit to 4 most liked posts
        ->get();

        return response()->json($instructions);
    }

    public function likeCount($id, Request $request)
    {
        // Retrieve the post by ID
        $post = KnowledgeBase::find($id);

        // If the post is not found, return a 404 error
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        // Set the default version to 'web' if not provided in the request
        $version = $request->input('version', 'web'); // Default to 'web'

        // Validate the version input (must be 'web', 'ios', or 'android')
        if (!in_array($version, ['web', 'ios', 'android'])) {
            return response()->json(['message' => 'Invalid version'], 400);
        }

        // Determine if the action is a like or dislike
        $action = $request->input('action'); // 'like' or 'dislike'
        if (!in_array($action, ['like', 'dislike'])) {
            return response()->json(['message' => 'Invalid action'], 400);
        }

        // Increment the correct version's like or dislike count
        switch ($version) {
            case 'ios':
                if ($action === 'like') {
                    $post->like_count_ios += 1;
                } else {
                    $post->dislike_count_ios = ($post->dislike_count_ios ?? 0) + 1;
                }
                break;

            case 'android':
                if ($action === 'like') {
                    $post->like_count_android += 1;
                } else {
                    $post->dislike_count_android = ($post->dislike_count_android ?? 0) + 1;
                }
                break;

            default: // Web version (default case)
                if ($action === 'like') {
                    $post->like_count += 1;
                } else {
                    $post->dislike_count += 1;
                }
                break;
        }

        // Save the updated post
        $post->save();

        // Return the updated counts in the response
        return response()->json([
            'message' => 'Counts updated successfully',
            'web' => [
                'like_count' => $post->like_count,
                'dislike_count' => $post->dislike_count,
            ],
            'ios' => [
                'like_count_ios' => $post->like_count_ios,
                'dislike_count_ios' => $post->dislike_count_ios ?? 0,
            ],
            'android' => [
                'like_count_android' => $post->like_count_android,
                'dislike_count_android' => $post->dislike_count_android ?? 0,
            ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $instruction = KnowledgeBase::findOrFail($id);
        return view('pages.knowledge-base-new.detail', ['post' => $instruction]);
    }

    public function version($link, $version = 'web')
    {  
        $instruction = KnowledgeBase::where('link', $link)->firstOrFail();
        
        $version = $version ?: 'web';
        return view('pages.knowledge-base-new.detail', ['post' => $instruction, 'version' => $version]);
    }

    public function versionReact($link, $version = 'web')
    {  
        $instruction = KnowledgeBase::where('link', $link)->firstOrFail();
        $version = $version ?: 'web';
        
        return response()->json($instruction);
    }

    public function getMainCategory()
    {
       
        return view('pages.knowledge-base-new.index');
    }

    public function getMainCategoryReact()
    {
        $categories = Category::get();
        return response()->json($categories);
    }

    /**
     * Search
     * 
     */

    public function search(Request $request)
{
    // Get the search query from the request
    $search = $request->input('search');
    
    // Transliterate the search query to Cyrillic
    $transliteratedSearch = $this->transliterateToCyrillic($search);
    
    // Handle keyboard mismatch (e.g., "jnxtns" -> "отчеты")
    $keyboardFixedSearch = $this->fixKeyboardLayout($search);
    
    // Perform the query on the knowledge_base table, searching for original, transliterated, and keyboard-fixed terms
    $results = KnowledgeBase::select(
        'knowledge_base.id', 
        'knowledge_base.title',
        'knowledge_base.title_second', 
        'knowledge_base.link',
        'knowledge_base.category_id', 
        'categories.name as category_name', 
        'knowledge_base.description'
    )
    ->join('categories', 'knowledge_base.category_id', '=', 'categories.id')
    ->where(function ($query) use ($search, $transliteratedSearch, $keyboardFixedSearch) {
        $query->where('knowledge_base.title', 'LIKE', "%{$search}%")
              ->orWhere('knowledge_base.description', 'LIKE', "%{$search}%")
              ->orWhere('knowledge_base.web_content', 'LIKE', "%{$search}%")
              ->orWhere('knowledge_base.ios_content', 'LIKE', "%{$search}%")
              ->orWhere('knowledge_base.android_content', 'LIKE', "%{$search}%")
              ->orWhere('knowledge_base.faq_web', 'LIKE', "%{$search}%")
              ->orWhere('knowledge_base.faq_ios', 'LIKE', "%{$search}%")
              ->orWhere('knowledge_base.faq_android', 'LIKE', "%{$search}%")
              ->orWhere('categories.name', 'LIKE', "%{$search}%"); // Search in category name as well
    })
    ->orWhere(function ($query) use ($transliteratedSearch) {
        $query->where('knowledge_base.title', 'LIKE', "%{$transliteratedSearch}%")
              ->orWhere('knowledge_base.description', 'LIKE', "%{$transliteratedSearch}%")
              ->orWhere('knowledge_base.web_content', 'LIKE', "%{$transliteratedSearch}%")
              ->orWhere('knowledge_base.ios_content', 'LIKE', "%{$transliteratedSearch}%")
              ->orWhere('knowledge_base.android_content', 'LIKE', "%{$transliteratedSearch}%")
              ->orWhere('knowledge_base.faq_web', 'LIKE', "%{$transliteratedSearch}%")
              ->orWhere('knowledge_base.faq_ios', 'LIKE', "%{$transliteratedSearch}%")
              ->orWhere('knowledge_base.faq_android', 'LIKE', "%{$transliteratedSearch}%")
              ->orWhere('categories.name', 'LIKE', "%{$transliteratedSearch}%"); // Search in transliterated category name
    })
    ->orWhere(function ($query) use ($keyboardFixedSearch) {
        $query->where('knowledge_base.title', 'LIKE', "%{$keyboardFixedSearch}%")
              ->orWhere('knowledge_base.description', 'LIKE', "%{$keyboardFixedSearch}%")
              ->orWhere('knowledge_base.web_content', 'LIKE', "%{$keyboardFixedSearch}%")
              ->orWhere('knowledge_base.ios_content', 'LIKE', "%{$keyboardFixedSearch}%")
              ->orWhere('knowledge_base.android_content', 'LIKE', "%{$keyboardFixedSearch}%")
              ->orWhere('knowledge_base.faq_web', 'LIKE', "%{$keyboardFixedSearch}%")
              ->orWhere('knowledge_base.faq_ios', 'LIKE', "%{$keyboardFixedSearch}%")
              ->orWhere('knowledge_base.faq_android', 'LIKE', "%{$keyboardFixedSearch}%")
              ->orWhere('categories.name', 'LIKE', "%{$keyboardFixedSearch}%"); // Search in keyboard-fixed category name
    })
    ->where('knowledge_base.status', 'published')  // Only published instructions
    ->get();

    // Return the results
    return response()->json([
        'message' => 'Search results',
        'data' => $results,
    ]);
}
     
     /**
      * Transliterate English characters to Cyrillic
      */
     private function transliterateToCyrillic($text)
     {
         $transliterationMap = [
             'a' => 'а', 'b' => 'б', 'v' => 'в', 'g' => 'г', 'd' => 'д', 'e' => 'е', 
             'yo' => 'ё', 'zh' => 'ж', 'z' => 'з', 'i' => 'и', 'y' => 'й', 'k' => 'к',
             'l' => 'л', 'm' => 'м', 'n' => 'н', 'o' => 'о', 'p' => 'п', 'r' => 'р', 
             's' => 'с', 't' => 'т', 'u' => 'у', 'f' => 'ф', 'h' => 'х', 'c' => 'ц', 
             'ch' => 'ч', 'sh' => 'ш', 'shch' => 'щ', 'yu' => 'ю', 'ya' => 'я'
         ];
     
         $text = strtolower($text);
         foreach ($transliterationMap as $latin => $cyrillic) {
             $text = str_replace($latin, $cyrillic, $text);
         }
     
         return $text;
     }
     
     /**
      * Fix mismatched keyboard layouts (e.g., English letters typed as Russian)
      */
     private function fixKeyboardLayout($text)
     {
         $keyboardMap = [
             'q' => 'й', 'w' => 'ц', 'e' => 'у', 'r' => 'к', 't' => 'е', 'y' => 'н', 'u' => 'г',
             'i' => 'ш', 'o' => 'щ', 'p' => 'з', '[' => 'х', ']' => 'ъ', 'a' => 'ф', 's' => 'ы',
             'd' => 'в', 'f' => 'а', 'g' => 'п', 'h' => 'р', 'j' => 'о', 'k' => 'л', 'l' => 'д',
             ';' => 'ж', '\'' => 'э', 'z' => 'я', 'x' => 'ч', 'c' => 'с', 'v' => 'м', 'b' => 'и',
             'n' => 'т', 'm' => 'ь', ',' => 'б', '.' => 'ю'
         ];
     
         $text = strtolower($text);
         foreach ($keyboardMap as $english => $russian) {
             $text = str_replace($english, $russian, $text);
         }
     
         return $text;
     }

}
