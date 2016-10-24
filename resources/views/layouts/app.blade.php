<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mulegh') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <style media="screen">
        .table > thead > tr > th {
            vertical-align: top;
        }

        .table-title {
            display: inline-block;
            vertical-align: middle;
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .middle {
            vertical-align: middle;
        }

        .fa-btn {
            margin-right: 1px;
        }

        .breadcrumb {
            background: #ffffff;
            border: solid 1px #d3e0e9;
        }

        .border-top {
            border-top: solid 1px #d3e0e9;
            margin-bottom: 20px;
        }

        a:hover {
            text-decoration: none;
        }

        textarea {
            min-width: 100%;
            max-width: 100%;
            min-height: 70px;
        }
    </style>

    @yield('style')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Mulegh') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        {{-- &nbsp; --}}
                        @if (Auth::check())
                            <li class="{{ substr(explode('/', Request::fullUrl())[3], 0, 9) == 'sale' ? 'active' : '' }}">
                                <a href="{{ url('/sale') }}">Sale</a>
                            </li>
                            <li class="{{ substr(explode('/', Request::fullUrl())[3], 0, 8) == 'customer' ? 'active' : '' }}">
                                <a href="{{ url('/customer') }}">Customer</a>
                            </li>
                            <li class="{{ substr(explode('/', Request::fullUrl())[3], 0, 7) == 'variant' ? 'active' : '' }}">
                                <a href="{{ url('/variant') }}">Variant</a>
                            </li>
                            <li class="{{ substr(explode('/', Request::fullUrl())[3], 0, 5) == 'botol' ? 'active' : '' }}">
                                <a href="{{ url('/botol') }}">Botol</a>
                            </li>

                            {{-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Riwayat
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/riwayat') . '/' . \Carbon\Carbon::now('Asia/Jakarta')->year . '/' . \Carbon\Carbon::now('Asia/Jakarta')->month }}">Bulanan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/riwayat') . '/' . \Carbon\Carbon::now('Asia/Jakarta')->year }}">Tahunan</a>
                                    </li>
                                </ul>
                            </li> --}}
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            {{-- <li><a href="{{ url('/login') }}">Login</a></li> --}}
                            {{-- <li><a href="{{ url('/register') }}">Register</a></li> --}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                @if (session('sukses'))
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Selamat!</strong> {{ session('sukses') }}
                        </div>
                    </div>
                @elseif (session('gagal'))
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Oops!</strong> {{ session('gagal') }}
                        </div>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>

        @yield('modal')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    @yield('scripts')
</body>
</html>
