<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/des.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">



</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark text-light shadow-sm">
                    <div class="container">
                        <a class="fs-6 navLogo" href="{{ url('dashboard') }}">
                            Magellan <span>Solutions</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <i class="bi bi-person-fill fs-5"></i>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" ><i class="bi bi-person-fill width="16" height="16""></i> Profile</a>
                                            <a class="dropdown-item" ><i class="bi bi-gear-fill"></i>  Settings</a>
                                            <a class="dropdown-item"><i class="bi bi-info-square-fill"></i> Help & Support</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                             <i class="bi bi-arrow-right-square-fill"></i>
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 p-0 sticky-top">
                <div class="left-panel">
                    <div class="container-fluid left-nav">
                    <div class="row">

                        <div class="left-button">
                            <div class="col-md-12"><button><a href="{{ url('/dashboard') }}"><i class="bi bi-bar-chart-fill"></i> Dashboard</button></a></div>
                            <div class="col-md-12"><button><a href="{{ url('/inventory') }}"><i class="bi bi-collection-fill"></i> Inventory</button></a></div>
                            <div class="col-md-12"><button><a href="{{ url('/process') }}"><i class="bi bi-filter-square-fill"></i> Process</button></a></div>
                            <div class="col-md-12"><button><a href="{{ url('/loghistory') }}"><i class="bi bi-calendar-check-fill"></i></i> Log History</button></a></div>
                            <div class="col-md-12"><button><i class="bi bi-calendar2-fill"></i> Reports</button></div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 ps-1 rp">
                <div class="right-panel">
                    @yield('main')
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#view').DataTable({
            "scrollX":true

        });
        $('#logs').DataTable({
            "scrollX":true
        });

        }
         );

        $(document).ready( function () {
            $('#genqr').DataTable();
        } );
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
