<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index(){
      $article = Article::orderBy('created_at', 'DESC')->get();
      return view('back.dashboard', compact('article'));
    }
}
