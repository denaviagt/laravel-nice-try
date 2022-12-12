<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="{{ url('images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ url('images/logo2.png') }}" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">

            <div class="user-area dropdown float-right d-flex">

                @if (session('mhs_npm'))
                    <div class="my-auto mr-2">
                        <h5>{{ session('mhs_nama') }}</h5>
                        <p class="m-0 p-0">{{ session('mhs_npm') }}</p>
                    </div>
                @endif
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    @if (session('mhs_npm'))
                        <img class="user-avatar rounded-circle" src="{{ session('mhs_foto') }}" alt="User Avatar">
                    @else
                        <img class="user-avatar rounded-circle" src="{{ url('images/admin.jpg') }}" alt="User Avatar">
                    @endif

                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"
                        onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i
                            class="fa fa-power -off"></i>Logout
                    </a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- /#header -->
