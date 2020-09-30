
<div class="modal fade" id="modalEditContact">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>

            <div class="modal-body">
                <input type="hidden" name="id">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control input-sm" type="text" name="name">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btnUpdate" onclick="update()">Update</button>
                <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
