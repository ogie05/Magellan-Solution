@extends('layouts.master')
@section('main')
<div class="container">
  <div class="row">
    <div class="col-md-3 log-header">
      <h1>Log History</h1>
    </div>
  </div>
    <div class="row">
        <div class="col-md-4">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Name, type, brand, action..." aria-label="Example text with button addon" aria-describedby="button-addon1">
            <button class="btn btn-primary pt-1" type="button" id="button-addon1"><i class="bi bi-search"></i></button>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <table class="table table-hover table-responsive-md logs-table" id="logs" style="width: 105%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection
