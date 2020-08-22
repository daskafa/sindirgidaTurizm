<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
      return view('front.anasayfa');
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
}
