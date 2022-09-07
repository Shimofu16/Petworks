<div class="modal fade" id="confirm{{ $appointment->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">

                <h5 class="modal-title text-light font-weight-bold">INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <form action=" {{ route('admin.confirm.update', $appointment->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="card shadow-none">
                        <div class="card-body p-0">
                            <div class="row">
                                <label for="doctor">Doctor:</label>
                            </div>
                            <select class="form-select" aria-label="Default select example" id="doctor"
                                name="doctor_id">
                                <option selected>Select Doctor</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>

                </div>

            </form>

        </div>
    </div>
</div>
