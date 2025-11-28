<!-- Modal -->
<div class="modal fade" id="CreateModalOpen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="CreateForm" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="server_side_error"></div>
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Titel">
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <textarea class="form-control" name="description" placeholder="Enter Description" cols="5" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Website Link</label>
                        <input type="text" class="form-control" name="button_link" placeholder="Enter Website Link">
                    </div>
                    <div class="form-group">
                        <label for="name">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Enter Image">
                    </div>
                    <div class="form-group">
                        <label for="name">Video</label>
                        <input type="file" class="form-control" name="video" placeholder="Enter Video">
                    </div>
                    <div class="form-group">
                        <label for="name">YouTube Video Link</label>
                        <input type="text" class="form-control" name="youtube_video"
                            placeholder="Enter YouTube Video Link">
                    </div>

                    <div class="form-group">
                        <label for="name">Select Company</label>
                        <select name="slier_for" class="form-control">
                            <option value="1">Company 1</option>
                            <option value="2">Company 2</option>
                            <option value="3">Company 3</option>
                            <option value="4">Company 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Serial</label>
                        <input type="text" class="form-control" name="serial" placeholder="Enter Serial">
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
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        </div>
    </div>
</div>
