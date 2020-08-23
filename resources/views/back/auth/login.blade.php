@include('back.layouts.header')

<div class="splash-container">
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{route('adminLoginPost')}}" method="POST">
              @csrf
                <div class="form-group">
                    <input name="username" class="form-control form-control-lg" type="text" placeholder="Kullanıcı Adınız" autocomplete="off">
                </div>
                <div class="form-group">
                    <input name="password" class="form-control form-control-lg" type="password" placeholder="Şifreniz">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>



@include('back.layouts.footer')
