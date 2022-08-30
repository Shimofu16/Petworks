<div class="modal fade" id="show{{ $consultation->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">

                <h5 class="modal-title text-light font-weight-bold">INFORMATION</h5>

            </div>

            <form method="POST">
                @csrf
                <div class="modal-body">
                    <h5 class="text-left">{{ $consultation->comment }} </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        aria-label="Close">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>
