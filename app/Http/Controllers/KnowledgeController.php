<?php

namespace App\Http\Controllers;

use App\CabinetArticle;
use App\Platform;
use App\Category;
use App\Post;
use App\Faq;
use App\Video;
use \DB;
use App\Clients;
use Illuminate\Http\Request;

class KnowledgeController extends Controller {
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('pages.knowledge-base.detail', ['post' => $post]);
    }
    
    public function search(Request $request) {
        $search = $request->input('search');
        $faqs = DB::table('faqs')->where('question', 'LIKE', "%{$search}%")->get();
        $posts = DB::table('posts')->where('title', 'LIKE', "%{$search}%")->get();
        $videos = DB::table('videos')->where('title', 'LIKE', "%{$search}%")->get();
        
        return view('pages.knowledge-base.search', ['faqs' => $faqs, 'posts' => $posts, 'videos' => $videos]);
    }

    public function chapter() {
        $posts = Post::all()->sortByDesc('id');
        $faqs = Faq::all();
        $videos = Video::all();
        $categories = Category::all();
        $platforms = Platform::all();
        
        if (url()->current() == url('/knowledge-base/priemka')) {
            return view('pages.knowledge-base.priemka', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        } 
        else
        if (url()->current() == url('/knowledge-base/revisia')) {
            return view('pages.knowledge-base.revisia', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/otshety')) {
            return view('pages.knowledge-base.otshety', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/sysloyal')) {
            return view('pages.knowledge-base.sysloyal', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/podpiska')) {
            return view('pages.knowledge-base.podpiska', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/nomenklatura')) {
            return view('pages.knowledge-base.nomenklatura', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/finance')) {
            return view('pages.knowledge-base.finance', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/product')) {
            return view('pages.knowledge-base.product', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/sales')) {
            return view('pages.knowledge-base.sales', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/directory')) {
            return view('pages.knowledge-base.directory', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/cassa')) {
            return view('pages.knowledge-base.cassa', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        else
        if (url()->current() == url('/knowledge-base/androidcassa')) {
            return view('pages.knowledge-base.androidcassa', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
        if (url()->current() == url('/knowledge-base/cabinet')) {
            return view('pages.knowledge-base.cabinet', ['posts' => $posts, 'faqs' => $faqs, 'videos' => $videos]);
        }
    }

    public function index() {
        $posts = Post::all()->sortByDesc('id');
        $categories = Category::all();
        $faqs = Faq::all();
        $arr2 = [];
        foreach ($categories as $category) {
            $arr = $posts->filter(function ($item, $key) use ($category) {
                return $item->category_id == $category-> id;
            });
            if (count($arr)) {
                $category['data'] = $arr;
                array_push($arr2, $category);
            }
        }
        return view('pages.knowledge-base.index', ['posts' => $posts, 'data' => $arr2, 'faqs' => $faqs]);
    }

}