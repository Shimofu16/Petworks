<div class="modal fade" id="edit{{ $consultation->id }}" tabindex="-1" role="dialog" wire:ignore>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">

                <h5 class="modal-title text-light font-weight-bold">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit.prevent="edit({{ $consultation->id }},'{{ $consultation->pet_id }}')" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="picture" class="form-label">Picture</label>
                        <input class="form-control" type="file" id="picture" wire:model='picture'>
                    </div>

                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment</label>
                        <textarea class="form-control" id="comment" rows="3" wire:model='comment'>{{ $consultation->comment }}</textarea>
                    </div>
                    <div wire:loading wire:target="picture">Uploading...</div>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        aria-label="Close">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>
