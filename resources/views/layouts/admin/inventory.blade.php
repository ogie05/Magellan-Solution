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
                <button class="btn btn-primary pt-1" type="button" id="button-addon1"><i class="bi bi-search"></i></button>
              </div>
            </div>

<<<<<<< HEAD
            <div class="col-md-8 inv-btn ">
              <a href="{{ route('brand') }}"><button class="btn">Brand</button></a>
              <a href="{{ route('department') }}"><button class="btn">Department</button></a>
              <button class="btn">Model</button> 

                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add new brand
                  </button>
                
                <!-- Button trigger modal -->
                
                
                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('create') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" name="name">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Remarks</span>
                                    <input type="text" class="form-control" placeholder="Remarks" aria-label="Remarks" aria-describedby="basic-addon1" name="remarks">
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
=======
            <div class="col-md-4 offset-4">
              <a href="{{ route('type') }}"><button class="btn btn-primary">Type</button></a>
              <a href="{{ route('brand') }}"><button class="btn btn-primary">Brand</button></a>
              <a href="{{ route('department') }}"><button class="btn btn-primary">Department</button></a>
              <a href="{{ route('model') }}"><button class="btn btn-warning">Model</button></a>
>>>>>>> 79c3bcb2471be5f4a2e1bd8eb26c368e00d5516b
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
