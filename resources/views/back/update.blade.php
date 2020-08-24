@include('back.layouts.header')
    <div class="dashboard-main-wrapper">
@include('back.layouts.top-header')
    <div class="nav-left-sidebar sidebar-dark">
@include('back.layouts.menu')
    </div>
{{-- content --}}
    <div class="dashboard-wrapper">
      <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Haber Güncelle</h5>
                    <div class="card-body">
                      @if ($errors->any())
                        <div class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                          @endforeach
                        </div>
                       @endif
                        <form action="{{route('updatePost', $article->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group">
                                <label class="col-form-label">Başlık</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>İçerik</label>
                                <textarea class="form-control" name="content" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Fotoğrafı</label>

                              <input type='file' name="image" accept='image/*' onchange='openFile(event)'><br>
                              <img id='output'>

                            </div>
                            <button type="submit" class="btn btn-primary">Oluştur</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
{{-- content --}}
    </div>

    <script>

      var openFile = function(event) {
        var input = event.target;

        var reader = new FileReader();
        reader.onload = function(){
          var dataURL = reader.result;
          document.getElementById('output').setAttribute('width', 'auto');
          document.getElementById('output').setAttribute('height', '350em');
          var output = document.getElementById('output');
          output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
      };


    </script>

@include('back.layouts.footer')
