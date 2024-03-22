<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    
    public function index()
    {
        $articles = Article::orderBy("created_at","desc")->paginate(10);
        return view("articles.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
      
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'title' => 'required|max:255',
            'content' => 'required',
            'author'=>'required'
        ]);

        $article = Article::create($validatedData);
        if(isset($article)){
            session()->flash('success','Add Articl success');
            return redirect()->route('articles.show', $article);
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
        return view('articles.edit', compact('article'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'id'=>'required',
            'title' => 'required|max:255',
            'content' => 'required',
            'author' =>'required'
        ]);

        $article->update($validatedData);
        if(isset($article)){
        session()->flash('update success','Update Article success !');
        return redirect()->route('articles.show', $article);
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
