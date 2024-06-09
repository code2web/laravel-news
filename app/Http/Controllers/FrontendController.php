<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class FrontendController extends Controller
{
    public function home(){
        $articles = Article::orderBy('created_at', 'DESC')->take(12)->get();
        $recentPosts = Article::orderBy('created_at', 'DESC')->take(12)->get();
        // $recentPosts = Article::orderBy('id', 'DESC')->take(12)->get();

        // $nationals = Article::orderBy('created_at', 'DESC')->take(3)->get();
        return view('home', compact(['articles','recentPosts']));
        // dd($categories)
    }    

    public function category(){
        
        return view('category');
    }

    public function article($id){
        $article = Article::with('category', 'district')->where('id', $id)->first();
        
        return view('article', compact('article'));
    }

    public function video(){

        return view('video');
    }

    public function photo(){
        
        return view('photo');
    }
}
// where(['id' => '[0-9]+', 'name' => '[a-z]+']);