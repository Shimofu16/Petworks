<div class="modal" id="confirm{{ $appointment->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">

                <h5 class="modal-title text-light font-weight-bold">INFORMATION</h5>

            </div>
            <form action=" {{ route('admin.confirm.update', $appointment->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <h5 class="text-left">Name: {{ $appointment->owner->name }} </h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">YES</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                </div>

            </form>

        </div>
    </div>
</div>
