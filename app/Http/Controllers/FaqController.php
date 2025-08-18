<?php

namespace App\Http\Controllers;
use App\Category;
use App\Platform;
use App\Faq;
use Illuminate\Http\Request;
use Auth;
use Validator;

class FaqController extends Controller
{
    public function index(){
        $faqs = Faq::all()->sortByDesc('id');
        return view('pages.faq_admin.faq_admin', ['faqs' => $faqs]);
    }

    public function show($id){
        $faq = Faq::findOrFail($id);
        return view('pages.faq_admin.faq_detail', ['faq' => $faq]);
    }

    public function create() {
        $categories = Category::all();
        $platforms = Platform::all();
        return view('pages.faq_admin.faq_create', ['categories' => $categories, 'platforms' => $platforms]);
    }

    public function edit($id) {
        $faq = Faq::findOrFail($id);
        $categories = Category::all();
        $platforms = Platform::all();
        return view('pages.faq_admin.faq_edit', ['faq' => $faq, 'categories' => $categories, 'platforms' => $platforms]);
    }

    public function remove($id) {
        Faq::findOrFail($id)->delete();
        return redirect()->route('faq-panel');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'category_id' => 'required',
            'platform_id' => 'required',
        ]);

        $faq = Faq::find($request->id);
        if (empty($faq)) {
            $faq = new Faq();
        }
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->category_id = $request->input('category_id');
        $faq->platform_id = $request->input('platform_id');
        $faq->save();
        return redirect()->route('faq-panel');
    }

}
