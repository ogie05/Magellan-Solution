@extends('layouts.master')
@section('main')
<h1>Inventory</h1>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Desktop, monitor, mouse, keyboard..." aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="col-md-4 offset-5">
            <a href="{{ route('brand') }}"><button class="btn btn-primary">Brand</button></a>
            <a href="{{ route('department') }}"><button class="btn btn-primary">Department</button></a>
            
            <button class="btn btn-warning">Model</button>
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
           @yield('inv')
        </div>
    </div>
</div>


@endsection
