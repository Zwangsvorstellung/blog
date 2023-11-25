<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Category;

class ArticleController extends Controller
{
    public function home(){

        $articles = Article::orderBy('id', 'DESC')->get();
        return view('articles', [
            'articles' => $articles
        ]);
    }

    public function show($id){
        
        $id = intval($id);
        
        $article = Article::findOrFail($id);
        $comments = $article->comments;
        $category = $article->category;

        return view('articleDetails', [
            'article' => $article,
            'comments' => $comments,
            'category' => $category,
        ]);
    }

    public function create(){
        $categories = Categories::all();
        
        return view('articleEdit', [
            'category' => $categories,
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'details' => 'required',
            'category' => 'required',
        ]);

        Article::create([
            'name' => $request->name,
            'title' => $request->title,
            'abstract' => $request->abstract,
            'details' => $request->details,
            'category' => $request->category,
        ]);

        return redirect('/')->with('status', 'Article bien posté ! ');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        
        return view('articleEdit', [
            'article' => $article,
            'category' => $categories,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'details' => 'required',
            'category' => 'required',
        ]);
                
        $article = Article::Find($request->num_id);

        $article->name = $request->name;
        $article->title = $request->title;
        $article->abstract = $request->abstract;
        $article->details = $request->details;
        $article->idCategory = $request->category;

        $article->save();

        return redirect('/article/'.$article->id)->with('status', 'Article bien édité ! ');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
         
        return redirect('/')->with('status', 'Article bien supprimé ! ');
    }

    public function addCommentArticle(Request $request){

        $request->validate([
            'text' => 'required',
            'ticket' => 'required',
        ]);


        ArticleComment::create([
            'userId' => session()->get('id'),
            'valueComment' => $request->text,
            'articleId' => $request->ticket,
        ]);

        return redirect('/article/'.$request->ticket)->with('status', 'Commentaire bien posté ! ');
    }
}
