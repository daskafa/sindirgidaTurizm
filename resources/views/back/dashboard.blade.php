@include('back.layouts.header')
    <div class="dashboard-main-wrapper">
@include('back.layouts.top-header')
    <div class="nav-left-sidebar sidebar-dark">
@include('back.layouts.menu')
    </div>
{{-- content --}}
    <div class="dashboard-wrapper">
      <div class="container-fluid dashboard-content">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Resim</th>
              <th scope="col">Başlık</th>
              <th scope="col">İçerik</th>
              <th scope="col">Oluşturma Tarihi</th>
              <th scope="col">İşlemler</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($article as $articles)
            <tr>
              <th scope="row"> <img src="{{$articles->image}}" style="width:auto;height:10em;border-radius:7px;"> </th>
              <td>{{$articles->title}}</td>
              <td>{{Str::limit($articles->content, 50, '...')}}</td>
              <td>{{$articles->created_at}}</td>
              <td><a href="{{route('deletePost', $articles->id)}}"><i class="mdi mdi-delete"></i>Sil</a></td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
{{-- content --}}
    </div>
@include('back.layouts.footer')
