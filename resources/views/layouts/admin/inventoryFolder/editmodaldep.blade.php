<!-- Button trigger modal -->

<button class="btn btn-primary editBtn" data-bs-toggle="modal" data-bs-target="#editDep{{ $id }}"><i class="bi bi-pencil-square"></i></button>
                        
<!-- Modal -->
<div class="modal fade" id="editDep{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Department</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('depedit') }}" method="POST">
          @csrf
          <div class="modal-body">
            <input type="hidden" value="{{ $id }}" name="dep_id">
              <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Name</span>
                  <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" value="{{ $name }}" name="name">
              </div>
              <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Remarks</span>
                  <input type="text" class="form-control" placeholder="Remarks" aria-label="Remarks" aria-describedby="basic-addon1" value="{{ $remarks }}" name="remarks">
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