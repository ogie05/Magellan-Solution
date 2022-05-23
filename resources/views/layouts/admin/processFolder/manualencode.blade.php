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
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover brand" id="view" style="width: 105% height:300px;">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Unique Id</th>
                                <th scope="col">Type</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">Serial No</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Vendor</th>
                                <th scope="col">P.O #</th>
                                <th scope="col">O.R #</th>
                                <th scope="col">Remarks</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                             
                                <tr>
                                    <td>1</td>
                                    <td><div class="col-auto"><input type="text" class="form-control"></div></td>
                                    <td>
                                        <div class="col-auto">
                                            <select type="text" class="form-select">
                                                <option selected>Select</option>
                                                @foreach ($types as $type)
                                                    <option value="1">{{ $type->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-auto">
                                            <select type="text" class="form-select">
                                                <option selected>Select</option>
                                                @foreach ($brands as $brand)
                                                    <option value="1">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-auto">
                                            <select type="text" class="form-select">
                                                <option selected>Select</option>
                                                @foreach ($models as $model)
                                                    <option value="1">{{ $model->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td><div class="col-auto"><input type="text" class="form-control"></div></td>
                                    <td><div class="col-auto"><input type="text" class="form-control"></div></td>
                                    <td>
                                        <div class="col-auto">
                                            <select type="text" class="form-select">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-auto">
                                            <select type="text" class="form-select">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-auto">
                                            <select type="text" class="form-select">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-auto">
                                            <select type="text" class="form-select">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td><div class="col-auto"><input type="text" class="form-control"></div></td>
                                    <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <button class="btn btn-success bi bi-plus"></button>
                                        <button class="btn btn-danger"><i class="bi bi-dash"></i></button>
                                    </div>
                                    </td>
                                </tr>
                
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</body>
</html>