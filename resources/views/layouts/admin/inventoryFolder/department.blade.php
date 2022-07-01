@extends('layouts.admin.inventory')
@section('inv')
@include('sweetalert::alert')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin: 2% !important">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#department">
                Add new department
              </button>

            <!-- Button trigger modal -->


              <!-- Modal -->
              <div class="modal fade" id="department" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Add New Department</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('depcreate') }}" method="POST">
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

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover brand" id="view" style="width: 110%">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated By</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Tag Deleted</th>
                    <th scope="col">Option</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $deps)
                    <tr>
                        <td>{{ $deps->id }}</td>
                        <td>{{ $deps->name }}</td>
                        <td>{{ $deps->status }}</td>
                        <td>{{ $deps->remarks }}</td>
                        {{-- <td>{{ isset($brand->user->name) ? $brand->user->name : 'none'}}</td> --}}
                        <td>
                          @if ( isset($deps->user->name) )
                            {{ $deps->user->name }}
                            @else
                           none
                          @endif
                        </td>
                        <td>{{ $deps->created_at }}</td>
                        <td>{{ $deps->updated_by }}</td>
                        <td>{{ $deps->updated_at }}</td>
                        <td>{{ $deps->tag_deleted }}</td>
                         <td>{!! view('layouts.admin.inventoryFolder.editmodaldep',['id'=>$deps->id,'name'=>$deps->name,'remarks'=>$deps->remarks])!!} </td>

                        <td>
                           {{-- <a href="{{ route('delete',$brand->id) }}" id="hrefdel"></a>
                           <a href="{{ route('delete',$brand->id) }}">  --}}
                           <button type="button" class="btn btn-danger delbdep" data-href="{{ route('depdel',$deps->id) }}">Delete</button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
