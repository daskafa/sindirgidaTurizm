<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// SEOMeta
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// SEOMeta
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

      // SEOMeta
      SEOMeta::setTitle($article->title);
      SEOMeta::setDescription($article->content);
      SEOMeta::addMeta('article:published_time', $article->created_at, 'property');
      SEOMeta::addMeta('article:section', $article->title, 'property');
      SEOMeta::addKeyword(['Sındırgı', 'Leylek', 'Doğalşehir']);

      OpenGraph::setDescription($article->content);
      OpenGraph::setTitle($article->title);
      OpenGraph::setUrl('http://sindirgidaturizm.com');
      OpenGraph::addProperty('type', 'article');
      OpenGraph::addProperty('locale', 'tr-TR');
      OpenGraph::addProperty('locale:alternate', ['tr-TR', 'tr-TR']);

      OpenGraph::addImage($article->image);
      // OpenGraph::addImage($article->image->list('url'));
      // OpenGraph::addImage(['url' => 'http://image.url.com/cover.jpg', 'size' => 300]);
      // OpenGraph::addImage('http://image.url.com/cover.jpg', ['height' => 300, 'width' => 300]);

      JsonLd::setTitle($article->title);
      JsonLd::setDescription($article->content);
      JsonLd::setType('Article');
      JsonLd::addImage($article->image);



      return view('front.single', compact('article'));
    }















}//
