<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                    Menu
                </li>
                <li class="nav-item ">
                    <a class="nav-link @if(Request::segment(1) == 'dashboard' && !Request::segment(2)) active @else '' @endif" href="{{route('dashboard')}}"><i class="mdi mdi-format-list-bulleted-type"></i>Haberleri Listele<span class="badge badge-success">6</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link @if(Request::segment(2) == 'create') active @else '' @endif" href="{{route('create')}}" ><i class="mdi mdi-pencil-box"></i>Haber Oluştur<span class="badge badge-success">6</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
