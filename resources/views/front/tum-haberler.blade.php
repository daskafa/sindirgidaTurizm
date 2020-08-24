@include('front.layouts.header')
@include('front.layouts.nav')


<div class="container">
@foreach ($article as $articles)
  <div class="row">
    <div class="card mb-3" style="max-width: 70%; margin: 0 auto;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img style="width:100%; height:216px; object-fit:cover; padding: 10px; border-radius:20px;" src="{{$articles->image}}" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{$articles->title}}</h5>
            <p class="card-text"></p><p>{{$articles->content}}</p>
            <p class="card-text"><small class="text-muted"> <a style="color:#fff; background-color: #ed1c24; border-radius: 5px; padding: 10px;" href="{{route('single', $articles->slug)}}">Devamı için tıklayınız.</a> </small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>



    @include('front.layouts.footer')
