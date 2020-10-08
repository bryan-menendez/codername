<div class="modal fade" id="modalDeleteContact">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete contact</h4>
                <button class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>

            <form action="{{route('contactPostDelete')}}" id="formDeleteContact">
                @csrf
                @method('POST')   
                <input type="hidden" name="id">

                <div class="modal-body">
                    <p>Are you sure you want to delete this entry?</p>
                    <b><span class="contactData"></span></b>
                    <div class="msg"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btnDelete" type="submit">Delete</button>
                    <button class="btn btn-secondary-outline" data-dismiss="modal" data-target="#modalAddContact">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>