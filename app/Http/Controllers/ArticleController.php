<?php

namespace App\Http\Controllers;


use App\Articles;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index(){
        //dd($id);
        $articles=Articles::latest()->get();
        return view('articles.index',['articles'=> $articles]);
    }
    public function show(Articles $article){
        //dd($id);
        //$article=Articles::findorfail($id);
        return view('articles.show',['article'=> $article]);
    }
    public function create(){
        return view('articles.create');
        //return ('<h1>Hello Welcome to Create<h1>');
    }
    public function store(){
        Articles::create($this->validatearticle());
        return redirect('/articles');
        //on validating, submitting the empty form will be redirected to the same page
           /* Articles::create(request()->validate(
            [
                'title' => 'required',
                'excerpt' => 'required',  
                'body' => 'required'          //its an array and 
            ]
        ));*/
        //return $validatedattribute;
        /*$article=new Articles();
        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');
        $article->save();
        return redirect('/articles');
        //die('hello');*/
        //Articles::create($validatedattribute);
        /*[
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'body' => request('body')
        ]*/
            
    }
    public function edit(Articles $article){
        
        //$article=Articles::findorfail($id);
        //return("<h1>Hello World</h1>");
        return view('articles.edit',['article' => $article]);//similar to ['article'=>'$article']
    }
    public function update(Articles $article){
        $article->update($this->validatearticle());
       /* $article->update(request()->validate(
            [
                'title' => 'required',
                'excerpt' => 'required',
                'body' => 'required'
            ]));*/
        /*request()->validate(
            [
                'title' => 'required',
                'excerpt' => 'required',
                'body' => 'required'
            ]);
         //$article=Articles::find($id); //findorfail
         $article->title=request('title');
         $article->excerpt=request('excerpt');
         $article->body=request('body');
         $article->save();*/
         
         //return redirect('/articles/' . $article->id);

         //return redirect(route('articles.show',$article));

         return redirect($article->path());
    }
    protected function validatearticle()
    {
        return request()->validate(
            [
                'title' => 'required',
                'excerpt' => 'required',
                'body' => 'required'
            ]
        );
    }
}
