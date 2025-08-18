<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Article;
use App\ArticleCategories;
use App\ArticleSubCategories;
use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Answer::where('franz', 0)->orderBy('id')->get();
        $categories = ArticleSubCategories::where('franz', 0)->orderBy('id')->get();
        $arr2 = [];

        foreach ($articles as $article) {
            $arr = $categories->filter(function ($item, $key) use ($article) {
                return $article->category_id == $item-> id;
            });
            if (count($arr)) {
                $article['category'] = $arr;
            } else {
                $article['category'] = [];
            }
            array_push($arr2, $article);
        }

        return view('pages.admin.bot-integration.article', ['articles' => $articles, 'data' => $arr2]);
    }

    public function indexFranz()
    {
        $articles = Answer::where('franz', 1)->orderBy('id')->get();
        $categories = ArticleSubCategories::where('franz', 1)->orderBy('id')->get();
        $arr2 = [];

        foreach ($articles as $article) {
            $arr = $categories->filter(function ($item, $key) use ($article) {
                return $article->category_id == $item-> id;
            });
            if (count($arr)) {
                $article['category'] = $arr;
            }
            array_push($arr2, $article);

        }

        return view('pages.admin.bot-integration.article', ['articles' => $articles, 'data' => $arr2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ArticleCategories::where('franz', 0)->get();
        $subcategories = ArticleSubCategories::where('franz', 0)->get();
        return view('pages.admin.bot-integration.article_create', ['categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function createFranz()
    {
        $categories = ArticleCategories::where('franz', 1)->get();
        $subcategories = ArticleSubCategories::where('franz', 1)->get();
        return view('pages.admin.bot-integration.article_create', ['categories' => $categories, 'subcategories' => $subcategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
        ]);

        $article = Article::find($request->id);

        if (empty($article)) {
            $article = new Article();
        }

        if ($request->hasFile('file')) {
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png|size:3000' // Only allow .jpg, .bmp and .png file types.
            ]);
            $article->img_path = time().'.'.$request->file('file')->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $request->file('file')->move($destinationPath, $article->img_path);
        }

        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->category_id = $request->input('subcategory_id');
        if ($request->input('franz')) {
            $article->franz = $request->input('franz');
        }
        $detail=$request->summernoteInput;
        $dom = new \DOMDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'));
        libxml_use_internal_errors(false);
        $images = $dom->getelementsbytagname('img');
        $bs64='base64';

        foreach($images as $k => $img){
            $data = $img->getattribute('src');
            if (strpos($data,$bs64) == true) {
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= '/img/knowledge-img/'.time().$k.'.png';
                $path = public_path() . $image_name;

                file_put_contents($path, $data);

                $img->removeattribute('src');
                $img->setattribute('src', $image_name);
            } else {
                $image_name=$data;
                $img->setAttribute('src', $image_name);
            }
        }

        $detail = utf8_decode($dom->savehtml());
        $article->content = $detail;
        $article->save();
        if ($request->input('franz')) {
            return redirect()->route('article-franz-integration');
        }
        return redirect()->route('article-integration');
    }

    public function store_v2(Request $request)
    {
        $answer = Answer::find($request->id);

        if (empty($answer)) {
            $answer = new Answer();
        }

        $answer->title = $request->input('title');
        $answer->category_id = $request->input('subcategory_id');
        $answer->link = $request->input('link');
        if ($request->input('franz')) {
            $answer->franz = $request->input('franz');
        }
        $answer->save();
        if ($request->input('franz')) {
            return redirect()->route('article-franz-integration');
        }
        return redirect()->route('article-integration');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Answer::findOrFail($id);
        return view('pages.admin.bot-integration.article_detail', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Answer::findOrFail($id);
        $categories = ArticleCategories::where('franz', 0)->get();
        $subcategories = ArticleSubCategories::where('franz', 0)->get();
        return view('pages.admin.bot-integration.article_edit', ['article' => $article, 'categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function editFranz($id)
    {
        $article = Answer::findOrFail($id);
        $categories = ArticleCategories::where('franz', 1)->get();
        $subcategories = ArticleSubCategories::where('franz', 1)->get();
        return view('pages.admin.bot-integration.article_edit', ['article' => $article, 'categories' => $categories, 'subcategories' => $subcategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function remove($id) {
        Answer::findOrFail($id)->delete();
        return redirect()->route('article-integration');
    }

    public function removeFranz($id) {
        Answer::findOrFail($id)->delete();
        return redirect()->route('article-franz-integration');
    }

    public function indexCategory()
    {
        $categories = ArticleCategories::where('franz', 0)->get();
        return view('pages.admin.bot-integration.categories-list', ['categories' => $categories]);
    }

    public function indexSubCategory()
    {
        $categories = ArticleSubCategories::where('franz', 0)->get();
        return view('pages.admin.bot-integration.subcategories-list', ['categories' => $categories]);
    }

    public function indexFranzCategory()
    {
        $categories = ArticleCategories::where('franz', 1)->get();
        return view('pages.admin.bot-integration.categories-list', ['categories' => $categories]);
    }

    public function indexFranzSubCategory()
    {
        $categories = ArticleSubCategories::where('franz', 1)->get();
        return view('pages.admin.bot-integration.subcategories-list', ['categories' => $categories]);
    }

    public function createCategory()
    {
        return view('pages.admin.bot-integration.article_create_category');
    }

    public function createSubCategory()
    {
        $categories = ArticleCategories::where('franz', 0)->get();
        return view('pages.admin.bot-integration.article_create_category', ['categories' => $categories]);
    }

    public function createFranzSubCategory()
    {
        $categories = ArticleCategories::where('franz', 1)->get();
        return view('pages.admin.bot-integration.article_create_category', ['categories' => $categories]);
    }

    public function storeCategory(Request $request)
    {
        if ($request->input('franz')) {
            if ($request->input('category_id')) {
                $category = ArticleSubCategories::find($request->input('id'));
                if (empty($category)) {
                    $category = new ArticleSubCategories();
                }
                $category->category_id = $request->input('category_id');
                $category->name = $request->input('name');
                $category->franz = $request->input('franz');
                $category->save();
            } else {
                $category = ArticleCategories::find($request->input('id'));
                if (empty($category)) {
                    $category = new ArticleCategories();
                }
                $category->name = $request->input('name');
                $category->franz = $request->input('franz');
                $category->save();
            }
            return redirect()->route('article-franz-integration');
        } else {
            if ($request->input('category_id')) {
                $category = ArticleSubCategories::find($request->input('id'));
                if (empty($category)) {
                    $category = new ArticleSubCategories();
                }
                $category->category_id = $request->input('category_id');
                $category->name = $request->input('name');
                $category->save();
            } else {
                $category = ArticleCategories::find($request->input('id'));
                if (empty($category)) {
                    $category = new ArticleCategories();
                }
                $category->name = $request->input('name');
                $category->save();
            }
            return redirect()->route('article-integration');
        }
    }

    public function removeCategory($id) {
        ArticleCategories::findOrFail($id)->delete();
        return redirect()->route('categories-list');
    }

    public function removeSubCategory($id) {
        ArticleSubCategories::findOrFail($id)->delete();
        return redirect()->route('subcategories-list');
    }

    public function removeFranzCategory($id) {
        ArticleCategories::findOrFail($id)->delete();
        return redirect()->route('categories-franz-list');
    }

    public function removeFranzSubCategory($id) {
        ArticleSubCategories::findOrFail($id)->delete();
        return redirect()->route('subcategories-franz-list');
    }


    public function editCategory($id) {
        $category = ArticleCategories::findOrFail($id);
        return view('pages.admin.bot-integration.article_edit_category', ['category' => $category]);
    }

    public function editSubCategory($id) {
        $categories = ArticleCategories::all();
        $category = ArticleSubCategories::findOrFail($id);
        return view('pages.admin.bot-integration.article_edit_category', ['category' => $category, 'categories' => $categories]);
    }

    public function editFranzCategory($id) {
        $category = ArticleCategories::findOrFail($id);
        return view('pages.admin.bot-integration.article_edit_category', ['category' => $category]);
    }

    public function editFranzSubCategory($id) {
        $categories = ArticleCategories::all();
        $category = ArticleSubCategories::findOrFail($id);
        return view('pages.admin.bot-integration.article_edit_category', ['category' => $category, 'categories' => $categories]);
    }


}
