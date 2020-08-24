<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models
use App\Models\Article;


class HomepageController extends Controller
{
    public function index(){
      $article = Article::orderBy('created_at', 'DESC')->limit(5)->get();
      return view('front.anasayfa', compact('article'));
    }

    public function gezilecekYerler(){
      return view('front.turistik-ilgi-noktalari');
    }
    public function gezilecekYerler2(){
      return view('front.turistik-ilgi-noktalari-2');
    }
    public function tarihimiz(){
      return view('front.tarihimiz');
    }
    public function iletisim(){
      return view('front.iletisim');
    }
    public function konaklamaTesisleri(){
      return view('front.konaklama-tesisleri');
    }
    public function yapmadanDonmeyin(){
      return view('front.yapmadan-donmeyin');
    }
    public function yapmadanDonmeyin2(){
      return view('front.yapmadan-donmeyin-2');
    }
    public function ulasim(){
      return view('front.sindirgiya-ulasim');
    }
    public function sindirgidaNeYenir(){
      return view('front.sindirgidaneyenir');
    }
    public function yagcibedirHalisi(){
      return view('front.yagcibedir-halisi');
    }
    public function festival(){
      return view('front.festival');
    }
    public function tumhaberler(){
      $article = Article::orderBy('created_at', 'DESC')->get();
      return view('front.tum-haberler', compact('article'));
    }
    public function single($slug){
      $article = Article::where('slug', $slug)->first();
      return view('front.single', compact('article'));
    }
}
