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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/des.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    
    
</head>
<body>
    @include('sweetalert::alert')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-body">
                    <div class="container-fluid">
                      {{-- <a class="navbar-brand" href="#"><img src="{{ asset('img/navicon.png') }}" alt="nav-icon"></a> --}}
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">


                        <ul class="navbar-nav ms-auto">
                          <li class="nav-item">
                           <div class="nav-item dropdown d-flex">
                            
                            <p style="color: #00B0FF;font-size:16px">{{ Auth::user()->name }}</p>
                            <img src="{{ asset('img/person-fill.svg') }}" alt="icon" class="logI">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="text-align:center">Administrator</a>
                                    <a class="dropdown-item" style="text-align:center">TBD</a>
                                    <a class="dropdown-item" style="text-align:center">TBD</a>
                                    <a class="dropdown-item" style="text-align:center" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 p-0">
                <div class="left-panel">
                    <div class="container-fluid left-nav">
                    <div class="row">

                        <div class="left-button">
                            <div class="col-md-12"><button><a href="{{ url('/dashboard') }}"><i class="bi bi-bar-chart-fill"></i> Dashboard</button></a></div>
                            <div class="col-md-12"><button><a href="{{ url('/inventory') }}"><i class="bi bi-collection-fill"></i> Inventory</button></a></div>
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
        
        } );
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>