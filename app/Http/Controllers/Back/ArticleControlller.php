<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ArticleControlller extends Controller
{
    public function create(){
      return view('back.create');
    }



    public function createPost(Request $request){

      $request->validate([
        'title' => 'unique:articles|required',
        'content' => 'unique:articles|required',
        'slug' => 'unique:articles|required'
      ]);

      $article = new Article;
      $article->title = $request->title;
      $article->content = $request->content;
      $article->slug = Str::slug($request->title);

      if ($request->hasFile('image')) {
        $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $imageName);
        $article->image = 'uploads/' . $imageName;
      }
      $article->save();
      return redirect()->route('dashboard');
    }

    public function update($id){
      $article = Article::find($id);
      return view('back.update', compact('article'));
    }

    public function updatePost(Request $request, $id){

      $request->validate([
        'title' => 'unique:articles|required',
        'content' => 'unique:articles|required',
        'slug' => 'unique:articles|required'
      ]);

      $article = Article::find($id);
      $article->title = $request->title;
      $article->content = $request->content;
      $article->slug = Str::slug($request->title);
      if ($request->hasFile('image')) {
        $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $imageName);
        $article->image = 'uploads/' . $imageName;
      }
      File::delete(public_path('uploads') . $article->image);
      $article->save();
      return redirect()->route('dashboard');
    }



    public function deletePost(Request $request, $id){
      $article = Article::find($id);

      if (File::exists($article->image)) {
        File::delete(public_path($article->image));
      }
      $article->delete();
      return redirect()->back();
    }




}//
