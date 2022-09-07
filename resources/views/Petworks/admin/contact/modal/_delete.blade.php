<div class="modal" id="delete{{ $contact->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">

                <h5 class="modal-title text-light font-weight-bold">WARNING!</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p> This message will be deleted.</p>

                <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{ $contact->id }}">




                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">YES</button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
