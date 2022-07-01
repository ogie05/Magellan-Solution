@extends('layouts.admin.processIndex')
@section('process')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <table class="table table-hover brand" id="genqr" style="width: 100%">
                <thead>
                  <tr>
                    <th scope="col">Select</th>
                    <th scope="col">QR</th>
                    <th scope="col">Unique id</th>
                    <th scope="col">Serial No</th>
                    <th scope="col">Description</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Type</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Purchase Order</th>
                    <th scope="col">Date of Purchase</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($genqrs as $genqr)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><a href="{{ $genqr->qr_path }}" target="_blank"><img src="{{ $genqr->qr_path }}" width="30%" height="30%"></a></td>
                        <td>{{ $genqr->unique_id }}</td>
                        <td>{{ $genqr->serial_no }}</td>
                        <td>{{ $genqr->description }}</td>
                        <td>{{ $genqr->brand_id }}</td>
                        <td>{{ $genqr->model_id }}</td>
                        <td>{{ $genqr->type_id }}</td>
                        <td>{{ $genqr->remarks }}</td>
                        <td>{{ $genqr->purchase_id }}</td>
                        <td>{{ $genqr->date_of_purchase }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection
