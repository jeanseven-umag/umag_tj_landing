<?php

namespace App\Http\Controllers;
use App\Category;
use App\Platform;
use App\Video;
use Illuminate\Http\Request;
use Auth;
use Validator;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::all()->sortByDesc('id');
        return view('pages.video_admin.video_admin', ['videos' => $videos]);
    }

    public function show($id){
        $video = Video::findOrFail($id);
        return view('pages.video_admin.video_detail', ['video' => $video]);
    }

    public function create() {
        $categories = Category::all();
        $platforms = Platform::all();
        return view('pages.video_admin.video_create', ['categories' => $categories, 'platforms' => $platforms]);
    }

    public function edit($id) {
        $video = Video::findOrFail($id);
        $categories = Category::all();
        $platforms = Platform::all();
        return view('pages.video_admin.video_edit', ['video' => $video, 'categories' => $categories, 'platforms' => $platforms]);
    }

    public function remove($id) {
        Video::findOrFail($id)->delete();
        return redirect()->route('video-panel');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'category_id' => 'required',
            'platform_id' => 'required',
        ]);

        $video = Video::find($request->id);
        if (empty($video)) {
            $video = new Video();
        }
        $video->title = $request->input('title');
        $video->url = $request->input('url');
        $video->category_id = $request->input('category_id');
        $video->platform_id = $request->input('platform_id');
        $video->save();
        return redirect()->route('video-panel');
    }

}
