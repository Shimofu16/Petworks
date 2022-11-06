<div class="modal fade" id="show{{ $consultation->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">

                <h5 class="modal-title text-light font-weight-bold">{{ $consultation->service->service }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body">

                <div class="card">




                    <div class="card-header">
                        <img src="{{ asset($consultation->path) }}" alt="Photo" class="card-img">
                    </div>
                    <hr class="horizontal dark mt-0">
                    <div class="card-body">
                        <h6>Cheif Complaint:</h6>

                        <h6>Body Weight:</h6>
                        <h6>HR:</h6>
                        <h6>RR:</h6>
                        <h6>Temperature:</h6>
                        <h6>Diet:</h6>
                        <h6>Product:</h6>
                        <h6>Next Visit:</h6>
                        <h6>Doctor:</h6>
                        <h6>Comments:</h6>
                        <h6 class="card-title">Comment: {{ $consultation->comment }}</h6>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    aria-label="Close">Close</button>
            </div>
        </div>

    </div>
</div>
