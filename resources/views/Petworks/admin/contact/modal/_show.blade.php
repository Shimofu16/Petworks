
<!-- Modal -->
<div class="modal" id="view{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary text-center">
          <h5 class="modal-title text-light font-weight-bold">Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-flex flex-column">
                <h6>Name: {{ $contact->name }}</h6>
              
<hr>
            </div>

            <div class="row" style="height: 100px;">
                <h6 class="text-left">{{ $contact->message }}</h6>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
{{--           <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
{{-- <div class="modal fade" id="view{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role document="document">
        <div class="modal-content">
            <div class="modal-header align-items-center  text-light">
                <div class="row flex-nowrap">
                     <div class="col">

                    </div>
                    <div class="d-flex flex-column">
                        <h5>{{ $contact->name }}</h5>
                        <span>{{ $contact->email }}</span>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="height: 100px;">
                    <h6 class="text-left">{{ $contact->message }}</h6>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="" method="post">
                    @csrf
                    <div class="row flex-nowrap align-items-center">
                        <div class="col">
                            <input type="hidden" name="email" value="{{ $contact->email }}">
                            <textarea name="reply" id="reply" cols="50" rows="10" style="height: 50px; width: 100%;" placeholder="Reply"></textarea>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-outline-success">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                <span>  Send</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div> --}}

