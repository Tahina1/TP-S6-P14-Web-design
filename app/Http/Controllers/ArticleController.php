<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    //
    public function index(Request $request){
        /*if ($request->session()->has('admin')) {
            // ...
            return "Admin connected";
        }*/
        return view('article.card', ["articles"=>Article::all()]);
    }

    //CHECK SESSION BACKOFFICE HERE
    public function createForm(){
        if (session('admin')) {
            return view('article.create');
        }
        return redirect('loginForm');


    }

    public function detail($id){
        $article = Article::findOrFail($id);
        return view('article.detail', ['article'=>$article]);
    }

    //CHECK SESSION BACKOFFICE HERE
    public function save(Request $request){
        if ($request->session()->has('admin')) {
            // ...


            $file = $request->file('image');
            //$base64 = base64_encode(file_get_contents($file));


            if ($file) {
                $base64 = base64_encode(file_get_contents($file->getRealPath()));
            } else {
                $base64 = null;
            }


            $article = new Article;
            $article->titre = $request->input('titre');
            $article->synopsis = $request->input('resume');
            $article->contenu = $request->input('contenu');
            $article->picture = $base64;

            $article->save();


            return redirect('/');
        }

        return redirect('create-article');
    }

    public function editForm($id){
        $article = Article::findOrFail($id);
        return view('article.edit', ['article'=>$article]);

    }

    //CHECK SESSION BACKOFFICE HERE
    public function update(Request $request){
        if ($request->session()->has('admin')) {
            // ...
            $file = $request->file('image');
            if ($file) {
                $base64 = base64_encode(file_get_contents($file->getRealPath()));
            } else {
                $base64 = null;
            }
            $article = Article::findOrFail($request->input('id'));
            $article->titre = $request->input('titre');
            $article->synopsis = $request->input('resume');
            $article->contenu = $request->input('contenu');
            $article->picture = $base64;

            $article->save();
            return redirect('/');
        }

        return redirect('/loginForm');

    }

    //CHECK SESSION BACKOFFICE HERE
    public function delete(){

    }
}
