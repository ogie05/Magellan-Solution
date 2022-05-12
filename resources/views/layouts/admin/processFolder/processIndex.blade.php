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

            <div class="col-md-7 offset-1 mt-1">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generateqr" style="margin-top: .3em">Generate QR Code</button>
              <a href="{{ route('brand') }}"><button class="btn btn-primary" style="margin-top: .3em">Manual Encode</button></a>
              <a href="{{ route('department') }}"><button class="btn btn-primary" style="margin-top: .3em">Process Generated QR</button></a>
              <a href="{{ route('model') }}"><button class="btn btn-warning" style="margin-top: .3em">Register QR</button></a>
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

<!-- Button trigger modal -->
                     
<!-- Modal -->
<div class="modal fade" id="generateqr" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">GENERATE QR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('edit') }}" method="POST">
          @csrf
          <div class="modal-body">
            <input type="hidden" value="" name="brand_id">
              <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Numbers</span>
                  <input type="text" class="form-control" placeholder="How" aria-label="Name" aria-describedby="basic-addon1" value="" name="number">
              </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Type</span>
                  <select class="form-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                  </select>
               </div>
               <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Brand</span>
                <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  @foreach ($brands as $brand)
                  <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                  @endforeach
                </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Model</span>
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      @foreach ($models as $model)
                      <option value="{{ $model->id }}">{{ $model->name }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Description</span>
                    <input type="text" class="form-control" placeholder="Description" aria-label="Name" aria-describedby="basic-addon1" value="" name="number">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Remarks</span>
                    <input type="text" class="form-control" placeholder="Remarks" aria-label="Name" aria-describedby="basic-addon1" value="" name="number">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Purchase Order</span>
                    <input type="text" class="form-control" placeholder="P O #" aria-label="Name" aria-describedby="basic-addon1" value="" name="number">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Date of purchase</span>
                    <input type="text" class="form-control" placeholder="date_of_purchase" aria-label="Name" aria-describedby="basic-addon1" value="" name="number">
                </div>
              
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Generate</button>
          </div>
      </form>
    </div>
  </div>
</div>

@endsection
