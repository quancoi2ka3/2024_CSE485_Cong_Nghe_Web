<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy("created_at","desc")->paginate(10);
        return view("articles.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
        return view("articles.create",compact("article"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Article $article)
    {
        $validateData=$request->validate([
            "id"=>"required",
            "title"=> "required",
            "content"=> "required",
            "author"=> "required"
        ]);
        $article=Article::create($validateData);
        if($article){
        session()->flash('success', 'Thêm thành công!');
        return redirect()->route("articles.show",$article);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view("articles.show",compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view("articles.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $valiDateData= $request->validate([
            'id'=>'required',
            'title'=> 'required',
            'content'=> 'required',
            'author'=> 'required'
        ]);
        $article->update($valiDateData);
        if($article){
            session()->flash('edit success', 'Cập nhật thành công!');
            return redirect()->route("articles.show",$article->id);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
      $article->delete();
      return redirect()->route('articles.index');     
    }
}
