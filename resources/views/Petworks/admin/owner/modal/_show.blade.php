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
                    <div class="card-body">
                        <h4 class="card-title">{{ $consultation->comment }}</h4>
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
