@extends('layouts.admin.processFolder.processIndex')
@section('process')
  

<!-- Button trigger modal -->
                     
<!-- Modal -->
<div class="modal fade" id="generateqr" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">GENERATE QR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('generate') }}" method="POST">
          @csrf
          <div class="modal-body">
              <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Numbers</span>
                  <input type="number" maxlength="3" min="1" max="99" class="form-control" placeholder="How" aria-label="Name" aria-describedby="basic-addon1" value="" name="number">
              </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Type</span>
                  <select class="form-select" id="inputGroupSelect01" name="type">
                    <option selected>Choose...</option>
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                  </select>
               </div>
               <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Brand</span>
                <select class="form-select" id="inputGroupSelect01" name="brand">
                  <option selected>Choose...</option>
                  @foreach ($brands as $brand)
                  <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                  @endforeach
                </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Model</span>
                    <select class="form-select" id="inputGroupSelect01" name="model">
                      <option selected>Choose...</option>
                      @foreach ($models as $model)
                      <option value="{{ $model->id }}">{{ $model->name }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Description</span>
                    <input type="text" class="form-control" placeholder="Description" aria-label="Name" aria-describedby="basic-addon1" value="" name="description">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Remarks</span>
                    <input type="text" class="form-control" placeholder="Remarks" aria-label="Name" aria-describedby="basic-addon1" value="" name="remarks">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Purchase Order</span>
                    <input type="text" class="form-control" placeholder="P O #" aria-label="Name" aria-describedby="basic-addon1" value="" name="po">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Date of purchase</span>
                    <input type="date" class="form-control" placeholder="date_of_purchase" aria-label="Name" aria-describedby="basic-addon1" value="" name="dop">
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