@extends('layouts.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-3 log-header">
          <h1>Process</h1>
        </div>
      </div>
        <div class="row">
            <div class="col-md-4 mt-2 d-flex justify-content-around">
              <div class="input-group mb-2">
                <input type="text" class="form-control" placeholder="Name, type, brand, action..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button class="btn btn-primary pt-1" type="button" id="button-addon1" data-toggle="tooltip" data-placement="top" title="Search"><i class="bi bi-search"></i></button>

              </div>

              
            </div>

            <div class="col-md-7 offset-1">
              <a href="{{ route('generateqrcode') }}"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generateqr" style="margin-top: 2%">Generate QR Code</button></a>
              <a href="{{ route('brand') }}"><button class="btn btn-primary" style="margin-top: 2%">Manual Encode</button></a>
              <a href="{{ route('generatedqr') }}"><button class="btn btn-primary" style="margin-top: 2%">Process Generated QR</button></a>
              <a href="{{ route('model') }}"><button class="btn btn-warning" style="margin-top: 2%">Register QR</button></a>
            </div>
  
        </div>
        <div class="row">
          @yield('process')
        </div>

</div>


@endsection
