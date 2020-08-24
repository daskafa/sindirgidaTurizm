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
                    <h5 class="card-header">Haber Oluştur</h5>
                    <div class="card-body">
                      @if ($errors->any())
                        <div class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                          @endforeach
                        </div>
                      @endif
                        <form action="{{route('createPost')}}" method="POST" enctype="multipart/form-data">
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
                              <input type="file" name="image" class="form-control">
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
@include('back.layouts.footer')
