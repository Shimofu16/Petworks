<!-- Modal -->
<div class="modal" id="delete{{ $gallery->id }}" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-light font-weight-bold">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p> Are you sure you want to delete {{ $gallery->title }} ?</p>

            <form action="{{ route('admin.gallery.destroy', ['id' => $gallery->id]) }}" method="POST">
                @csrf
                @method('delete')

                

             {{--    <div class="modal-body">
                    <h5 class="text-start">Are you sure you want to delete {{ $gallery->title }} ?</h5>
                </div> --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">YES</button>
                </div>
            </form>
        </div>
    </div>
</div>
