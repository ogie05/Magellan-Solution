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
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-body">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"><img src="{{ asset('img/navicon.png') }}" alt="nav-icon"></a>
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
                    <div class="container">
                    <div class="row">
                        <div class="left-button" style="margin-top: 10%;margin-left:15%">
                            <div class="col-md-12"><i class="bi bi-bar-chart-fill"></i><button> Dashboard</button></div>
                            <div class="col-md-12"><i class="bi bi-collection-fill"></i><button> Inventory</button></div>
                            <div class="col-md-12"><i class="bi bi-collection-fill"></i><button> Log History</button></div>
                            <div class="col-md-12"><i class="bi bi-collection-fill"></i><button> Reports</button></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 ps-1 rp">
                <div class="right-panel">
                    <h1>123</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>