<form id="EditForm" method="POST" enctype="multipart/form-data" action="{{ route('portfolio.update', $portfolio->id) }}">
    @csrf
    @method('PUT')
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>





    <div class="modal-body">
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $portfolio->title }}"
                        placeholder="Enter title">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Sub Title</label>
                    <input type="text" class="form-control" name="sub_title" value="{{ $portfolio->sub_title }}"
                        placeholder="Enter sub title">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control tinymceText" name="description" placeholder="Enter description" rows="3">{!! $portfolio->description !!}</textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Image (H:800px W:800px)</label>
                    <input type="file" class="form-control" name="image">
                    @if ($portfolio->image)
                        <img src="{{ asset($portfolio->image) }}" width="120" height="120" class="mt-2">
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Video</label>
                    <input type="file" class="form-control" name="video">
                    @if ($portfolio->video)
                        <video src="{{ asset($portfolio->video) }}" width="100%" height="120" controls
                            class="mt-2"></video>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>YouTube Video Link</label>
                    <input type="text" class="form-control" name="youtube_video"
                        value="{{ $portfolio->youtube_video }}" placeholder="Enter YouTube video link">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Website Link</label>
                    <input type="text" class="form-control" name="button_link" value="{{ $portfolio->button_link }}"
                        placeholder="Enter Website Link">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Map Link</label>
                    <input type="text" class="form-control" name="map" value="{{ $portfolio->map }}"
                        placeholder="Enter map link">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Serial</label>
                    <input type="text" class="form-control" name="serial" value="{{ $portfolio->serial }}"
                        placeholder="Enter serial">
                </div>
            </div>

        </div>
    </div>







    <div class="modal-footer">
        <button type="submit" id="EditFormSubmitBtn" class="btn btn-sm btn-primary">Update</button>
    </div>
</form>
