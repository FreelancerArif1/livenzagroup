<form id="EditForm" action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal-header">
        <div class="row">
            <div class="col-md-6">
                <h1 class="modal-title" id="exampleModalLabel">Edit</h1>
            </div>
            <div class="col-md-6"><button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">&times;</button></div>
        </div>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="server_side_error" role="alert"></div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Slider Name</label>
                    <input type="text" class="form-control" name="name" id="name"
                        value="{{ $country->name }}">
                    <input type="hidden" name="id" value="{{ $country->id }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option disabled selected>--Select Status--</option>
                        <option value="1" {{ $country->status == 1 ? 'Selected' : '' }}>Active</option>
                        <option value="0" {{ $country->status == 0 ? 'Selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" id="EditFormSubmitBtn" class="btn btn-sm btn-primary">Update</button>
    </div>
</form>
