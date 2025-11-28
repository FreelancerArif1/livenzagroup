<form id="EditForm" action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
        <div class="server_side_error"></div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $slider->title }}"
                        placeholder="Enter Title">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter Description" rows="3"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Website Link</label>
                    <input type="text" class="form-control" name="button_link" placeholder="Enter Website Link">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>YouTube Video Link</label>
                    <input type="text" class="form-control" name="youtube_video"
                        placeholder="Enter YouTube Video Link">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Video</label>
                    <input type="file" class="form-control" name="video">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Select Company</label>
                    <select name="slier_for" class="form-control">
                        <option value="1">Company 1</option>
                        <option value="2">Company 2</option>
                        <option value="3">Company 3</option>
                        <option value="4">Company 4</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Serial</label>
                    <input type="text" class="form-control" name="serial" placeholder="Enter Serial">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" id="EditFormSubmitBtn" class="btn btn-sm btn-primary">Update</button>
    </div>
</form>
