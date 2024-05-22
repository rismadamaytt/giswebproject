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
        $article = Article::orderBy('created_at', 'DESC')->get();
        return view('article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension(); // Mengambil ekstensi file gambar

            // Menyimpan file gambar dengan nama yang unik
            $imageName = time() . '.' . $extension;
            $image->storeAs('public/images', $imageName);

            // Simpan data artikel ke dalam database
            Article::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $imageName,
            ]);
        }
        Article::create($request->all());
        return redirect()->route('article')->with('success', 'Article successfully added');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect()->route('article')->with('success', 'Article successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('article')->with('success', 'Article successfully deleted ');
    }
}

