<div class="modal fade" id="confirm{{ $appointment->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">

                <h5 class="modal-title text-light font-weight-bold">WARNING</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <form action=" {{ route('admin.appointment.update', $appointment->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="card shadow-none">
                        <div class="card-body p-0">
                           <p>You are about to accept the client's requested appointment.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>

                </div>

            </form>

        </div>
    </div>
</div>


