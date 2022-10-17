<div class="modal fade" id="cancel{{ $pending->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">

                <h5 class="modal-title text-light font-weight-bold">WARNING!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <form action=" {{ route('admin.pending.destroy', $pending->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="card shadow-none">
                        <div class="card-header ">
                            <span class="text-wrap"> Note: Once you cancel the client's appointment, the client will receive an email regarding the terms and policy of the appointment from the clinic.</span>
                        </div>
                       {{--  <div class="card-body pt-0">
                            <div class="row">
                                <textarea name="message" id="message" cols="50" rows="10" style="height: 50px; width: 100%;"
                                    placeholder="message"></textarea>
                            </div>
                        </div> --}}
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </form>


        </div>
    </div>
</div>
