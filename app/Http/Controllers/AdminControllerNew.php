<?php

namespace App\Http\Controllers;
use App\Category;
use App\Platform;
use App\Post;
use App\KnowledgeBase;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Helpers\ContentHelper;

class AdminControllerNew extends Controller
{
    public function index(){
        $posts = KnowledgeBase::all()->sortByDesc('id');
      
        return view('pages.admin.knowledge-base-new.admin', ['posts' => $posts]);
    }

    public function show($id) {
        $post = KnowledgeBase::findOrFail($id);
        
        return view('pages.admin.knowledge-base-new.detail', ['post' => $post]);
    }

    public function create() {
        $categories = Category::all();
        return view('pages.admin.knowledge-base-new.create', ['categories' => $categories]);
    }

    public function edit($id) {
        $post = KnowledgeBase::findOrFail($id);
      
        $categories = Category::all();
        $platforms = Platform::all();
        return view('pages.admin.knowledge-base-new.edit', ['post' => $post, 'categories' => $categories, 'platforms' => $platforms]);
    }

    public function remove($id) {
        KnowledgeBase::findOrFail($id)->delete();
        return redirect()->route('knowledge-panel-new');
    }

    public function store(Request $request) {
        
        $validated = $request->validate([
            'title' => 'required',
            'title_second' => 'required',
            'category_id' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);

        $knowledge = KnowledgeBase::find($request->id);

        if (empty($knowledge)) {
            $knowledge = new KnowledgeBase();
        }
        
        $knowledge->title = $request->input('title');
        $knowledge->title_second = $request->input('title_second');

        $knowledge->category_id = $request->input('category_id');
        $knowledge->link = $request->input('link');
        $knowledge->description = $request->input('description') ?? null;
        $knowledge->read_time = $request->input('read_time') ?? null;
        $knowledge->video_url = $request->input('video_url') ?? null;

        
        $knowledge->status = $request->input('status');
        $knowledge->is_public = $request->input('is_public');

        $knowledge->is_soon = $request->has('is_soon') ? true : false;
        
         // Check if 'content' is not empty before processing
        if (!empty($request->web_content)) {
            $knowledge->web_content = ContentHelper::processContent($request->web_content);
        }

        if (!empty($request->ios_content)) {
            $knowledge->ios_content = ContentHelper::processContent($request->ios_content);
        }

        if (!empty($request->android_content)) {
            $knowledge->android_content = ContentHelper::processContent($request->android_content);
        }


        // Check if 'faq_сontent' is not empty before processing
        if (!empty($request->faq_web)) {
            $knowledge->faq_web = ContentHelper::processContent($request->faq_web);
        }
        if (!empty($request->faq_ios)) {
            $knowledge->faq_ios = ContentHelper::processContent($request->faq_ios);
        }
        if (!empty($request->faq_android)) {
            $knowledge->faq_android = ContentHelper::processContent($request->faq_android);
        }
      
        $knowledge->save();

        return redirect()->route('knowledge-panel-new');
    }


    /* Category */

    public function indexCategory(){
        $categories = Category::all();
       
        return view('pages.admin.knowledge-base-new.categories', ['categories' => $categories]);
    }

    public function createCategory() {
        return view('pages.admin.knowledge-base-new.category-create');
    }

    public function storeCategory(Request $request) {

        // Check if we are updating an existing category (i.e., $request->id is set)
        $categoryId = $request->id;

        // Validate the request input with a unique rule that ignores the current category ID
        $validated = $request->validate([
            'name' => 'required|unique:categories,name,' . $categoryId,
        ], [
            'name.unique' => 'Название категории уже выбрано.',
        ]);

        // Find the category by its ID, or create a new instance if not found
        $category = Category::find($categoryId);

    
        if (empty($category)) {
            $category = new Category();
        }
        
        $category->name = $request->input('name');

        $category->save();

        return redirect()->route('knowledge-categories');
    }


    public function editCategory($id) {
        $category = Category::findOrFail($id);
        
        return view('pages.admin.knowledge-base-new.category-edit', ['category' => $category]);
    }

}
