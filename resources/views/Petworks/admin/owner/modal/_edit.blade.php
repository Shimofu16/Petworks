<div class="modal fade" id="edit{{ $consultation->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">

                <h5 class="modal-title text-light font-weight-bold">INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('admin.owner.update', $consultation->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label for="comment" class="form-label">Email address</label>
                    <div class="mb-3">
                        <textarea name="comment" id="comment" cols="45" rows="5" >{{ $consultation->comment }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>
