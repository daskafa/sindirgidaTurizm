@include('front.layouts.header')
@include('front.layouts.nav')


<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto offset-md-4">
    <h3 style="margin-top:1em;">{{$article->title}}</h3>
    <p>{{$article->content}}</p>
    <img class="homepageimg" src="{{'/' . $article->image}}">
    </div>
  </div>
</div>


    @include('front.layouts.footer')
