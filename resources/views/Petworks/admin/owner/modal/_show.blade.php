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
                        <h6>Cheif Complaint: {{ $consultation->complaint }}</h6>
                        <h6>Body Weight: {{ $consultation->weight }}</h6>
                        <h6>HR: {{ $consultation->hr }}</h6>
                        <h6>RR: {{ $consultation->rr }}</h6>
                        <h6>Temperature: {{ $consultation->temperature }}</h6>
                        <h6>Diet: {{ $consultation->diet }}</h6>
                        <h6>Next Visit: {{ date('F d, Y',strtotime($consultation->next_visit)) }}</h6>
                        <h6>Doctor: {{ $consultation->doctor->name }}</h6>
                        <h6>Comment: {{ $consultation->comment }}</h6>
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
