<?php

namespace App\Http\Controllers;
use App\Category;
use App\Platform;
use App\Post;
use Illuminate\Http\Request;
use Auth;
use Validator;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::all()->sortByDesc('id');
        return view('pages.admin.admin', ['posts' => $posts]);
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('pages.admin.detail', ['post' => $post]);
    }

    public function create() {
        $categories = Category::all();
        $platforms = Platform::all();
        return view('pages.admin.create', ['categories' => $categories, 'platforms' => $platforms]);
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $platforms = Platform::all();
        return view('pages.admin.edit', ['post' => $post, 'categories' => $categories, 'platforms' => $platforms]);
    }

    public function remove($id) {
        Post::findOrFail($id)->delete();
        return redirect()->route('knowledge-panel');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'platform_id' => 'required',
        ]);

        $post = Post::find($request->id);
        if (empty($post)) {
            $post = new Post();
        }
        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->platform_id = $request->input('platform_id');
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
        $post->content = $detail;
        $post->save();
        return redirect()->route('knowledge-panel');
    }

}
