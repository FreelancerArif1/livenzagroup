<!-- Modal -->
<div class="modal sm fade" id="CreateModalOpen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form id="CreateForm" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="modal-title" id="exampleModalLabel">Add New</h1>
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
                                <label for="name">Country Name</label>
                                <input type="text" class="form-control" name="name" id="name" value=""
                                    placeholder="Enter Country Name">
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="1">Active </option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="CreateModalSubmitBtn" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- edit modal  --}}
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

        </div>
    </div>
</div>
