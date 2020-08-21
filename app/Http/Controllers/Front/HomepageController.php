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
}
