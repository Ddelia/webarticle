<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

     public function create()
     {
         return view('article.create');
     }

     public function store(Request $request)
     {
        $validatedData = $request->validate([
            'title' => 'required|unique:articles|max:150',
            'description' => 'required',
            'author_name' => 'required|max:40'
        ]);

        if($validatedData)
        {
            Article::create([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'author' => $request->author_name
            ]);

            session()->flash('article_created', 'The article has been saved.');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors($validatedData)
            ->withInput();
     }

     public function show()
     {
         $articles = Article::all();

         return view('article.show')->with('articles', $articles);
     }

     public function edit($id)
    {
        $article = Article::findOrFail($id);

        if (auth()->user()->id !== $article->user_id)
        {
            abort(404);
        }

        return view('article.edit')->with('article', $article);
    }

    public function update($id, Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'author_name' => 'required|max:40'
        ]);

        if($validatedData)
        {
            Article::find($id)->update([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'author' => $request->author_name
            ]);

            session()->flash('article_updated', 'The article has been updated.');
            return redirect()->route('show.articles');
        }

        return redirect()->back()
            ->withErrors($validatedData)
            ->withInput();
    }

    public function remove($id)
    {
        $article = Article::findOrFail($id);

        if (auth()->user()->id !== $article->user_id)
        {
            abort(404);
        }

        $article->delete();

        return redirect()->back();
    }
}
