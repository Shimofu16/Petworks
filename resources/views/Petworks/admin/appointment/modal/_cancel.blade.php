<div class="modal fade" id="cancel{{ $appointment->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">

                <h5 class="modal-title text-light font-weight-bold">WARNING!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <form action=" {{ route('admin.confirm.reply', $appointment->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="card shadow-none">
                        <div class="card-header ">
                            <span class="text-wrap"> Are you sure you want to mark this request as pending?
                                If so, please leave a message or explanation.</span>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <textarea name="message" id="message" cols="50" rows="10" style="height: 50px; width: 100%;"
                                    placeholder="message"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Yes</button>
                </div>
            </form>


        </div>
    </div>
</div>
