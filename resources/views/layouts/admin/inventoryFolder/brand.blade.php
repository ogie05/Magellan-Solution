@extends('layouts.admin.inventory')
@section('inv')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover brand" id="view" style="width: 105% height:300px;">
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
                    @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->id }}</td>   
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->status }}</td>
                        <td>{{ $brand->remarks }}</td>
                        {{-- <td>{{ isset($brand->user->name) ? $brand->user->name : 'none'}}</td> --}}
                        <td>
                          @if ( isset($brand->user->name) )
                            {{ $brand->user->name }}
                            @else
                           try
                          @endif
                        </td>
                        <td>{{ $brand->created_at }}</td>
                        <td>{{ $brand->updated_by }}</td>
                        <td>{{ $brand->updated_at }}</td>
                        <td>{{ $brand->tag_deleted }}</td>
                        <td>{!! view('layouts.admin.inventoryFolder.editmodal',['id'=>$brand->id,'name'=>$brand->name,'remarks'=>$brand->remarks]) !!}</td>
                        
                        <td>
                          {{-- <a href="{{ route('delete',$brand->id) }}" id="hrefdel"></a> --}}
                          {{-- <a href="{{ route('delete',$brand->id) }}"> --}}
                          <button type="button" class="btn btn-danger delb" data-href="{{ route('delete',$brand->id) }}">Delete</button>
                        </td>
                        
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
