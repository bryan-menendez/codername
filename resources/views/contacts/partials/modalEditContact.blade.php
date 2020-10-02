<div class="modal fade" id="modalEditContact">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit contact</h4>
                <button class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>

            <form action="{{route('contactPostUpdate')}}" id="formEditContact">
                @csrf
                @method('POST')   
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id">
                        <label for="name">Name</label><input class="form-control input-sm" type="text" name="name">
                        <label for="phone">Phone</label><input class="form-control input-sm" type="text" name="phone">
                        <label for="comment">Comment</label><input class="form-control input-sm" type="textarea" name="comment">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btnUpdate" value="Update" type="submit">Update</button>
                    <button class="btn btn-secondary-outline" data-dismiss="modal" data-target="#modalAddContact">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
