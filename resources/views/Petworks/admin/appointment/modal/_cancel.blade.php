<!-- Modal -->
{{-- <div class="modal fade" id="view{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role document="document">
        <div class="modal-content">
            <div class="modal-header align-items-center bg-info  text-light">
                <div class="row flex-nowrap">

                    <div class="d-flex flex-column">
                        <h5 class="text-white">{{ $contact->name }}</h5>
                        <span class="text-dark">{{ $contact->email }}</span>
                    </div>
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body width:100%">
                <div class="row" style="height: 100px;">
                    <h6 class="text-left">{{ $contact->message }}</h6>
                </div>
            </div>

            <div class="modal-footer justify-content-center">
                <form action="{{ route('admin.contact.reply') }}" method="post">
                    @csrf
                    <div class="row flex-nowrap align-items-center">
                        <div class="col">
                            <input type="hidden" name="email" value="{{ $contact->email }}">
                            <textarea name="message" id="message" cols="50" rows="10" style="height: 50px; width: 100%;"
                                placeholder="message"></textarea>
                        </div>


                        <div class="col-4">
                            <button type="submit" class="btn btn-success"> Send</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div> --}}


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
