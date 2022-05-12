@extends('layouts.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-3 log-header">
          <h1>Inventory</h1>
        </div>
      </div>
        <div class="row">
            <div class="col-md-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Name, type, brand, action..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button class="btn btn-primary pt-1" type="button" id="button-addon1"><i class="bi bi-search" data-toggle="tooltip" data-placement="top" title="Search"></i></button>
              </div>
            </div>

            <div class="col-md-4 offset-4">
              <a href="{{ route('type') }}"><button class="btn btn-primary">Type</button></a>
              <a href="{{ route('brand') }}"><button class="btn btn-primary">Brand</button></a>
              <a href="{{ route('department') }}"><button class="btn btn-primary">Department</button></a>
              <a href="{{ route('model') }}"><button class="btn btn-warning">Model</button></a>
            </div>
            {{-- <div class="col-md-4">
                <a href="{{ route('brand') }}"><button class="btn btn-primary">Brand</button></a>
                <button class="btn btn-danger">Department</button>
                <button class="btn btn-warning">Model</button>
            </div> --}}
        </div>

        

    <div class="row">
        <div class="col-md-12">
           @yield('inv')
        </div>
    </div>
</div>


@endsection
