<!-- Scrollable modal -->
<div class="modal fade" id="complete{{ $appointment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-center">
                <h5 class="modal-title text-white font-weight-bold " id="exampleModalLongtitle">
                    FURTHER INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('admin.confirm.update', ['id' => $appointment->id]) }}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <hr class="horizontal dark mt-0">
                        <h5 class="text-center text-bold text-success m-0">Pet Information</h5>
                        <hr class="horizontal dark mt-0">
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="complaint" class="col-sm-2 col-form-label">Chief Complaint:</label>
                            <input type="text" class="form-control" name="complaint" id="complaint"
                                placeholder="Cheif Complaint">
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col-md-6">
                            <label for="weight" class="col-sm-2 col-form-label">Body Weight:</label>
                            <input type="number" class="form-control" name="weight" id="weight"
                                placeholder="Body Weight">
                        </div>
                        <div class="col-md-6">
                            <label for="diet" class="col-sm-2 col-form-label">Diet:</label>
                            <input type="text" class="form-control" name="diet" id="diet" placeholder="Diet">
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col-md-6">
                            <label for="hr" class="col-sm-2 col-form-label">HR:</label>
                            <input type="number" class="form-control" name="hr" id="hr" placeholder="HR">
                        </div>
                        <div class="col-md-6">
                            <label for="rr" class="col-sm-2 col-form-label">RR:</label>
                            <input type="number" class="form-control" name="rr" id="rr" placeholder="RR">
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col-md-3">
                            <label for="temperature" class="col-sm-2 col-form-label">Temperature:</label>
                            <input type="number" class="form-control" name="temperature" id="temperature"
                                placeholder="Temperature">
                        </div>
                        <div class="col-md-3">
                            <label for="color" class="col-sm-2 col-form-label">Color:</label>
                            <input type="text" class="form-control" name="color" id="color"
                                placeholder="Color">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="next_visit" class="col-sm-2 col-form-label">Next Visit:</label>
                            <input type="date" class="form-control" name="next_visit" id="next_visit"
                                placeholder="Next ">
                        </div>
                        <div class="col-md-6">
                            <label for="doctor" class="col-sm-2 col-form-label">Doctor:</label>
                            <select class="form-select" aria-label="Default select example" name="doctor_id"
                                id="doctor_id">
                                <option selected>--- Selecet Doctor ---</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="comment" class="col-form-label">Comment:</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="product" class="col-sm-2 col-form-label">Product:</label>
                            <select class="form-select" aria-label="Default select example" name="product"
                                id="product_id">
                                <option selected>--- Selecet product ---</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>

</div>
</div>
