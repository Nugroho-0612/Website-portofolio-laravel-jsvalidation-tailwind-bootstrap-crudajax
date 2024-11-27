<!-- Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" id="projectForm" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description">
                    </div>
                    <div class="mb-3">
                        <label for="date">Release Date</label>
                        <input type="date" name="release_date" class="form-control" id="release_date">
                    </div>
                    <div class="mb-3">
                        <label for="url">URL Link</label>
                        <input type="url" name="url_link" class="form-control" id="url_link">
                    </div>
                    <div class="mb-3">
                        <label for="image">Image (Max 2MB)</label>
                        <input type="file" name="image" class="form-control" id="image" accept="image/*">
                    </div>
                    <div class="float-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btnSubmit"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>