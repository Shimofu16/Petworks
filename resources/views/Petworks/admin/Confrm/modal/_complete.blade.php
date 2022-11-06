<div class="modal fade" id="complete{{ $appointment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-center">
                <h5 class="modal-title text-white font-weight-bold " id="exampleModalLongtitle">
                    FURTHER INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <!-- Scrollable modal -->

            <div class="modal-body">
                <div class="modal-dialog modal-dialog-scrollable">

                    <form class="row g-3">


                        <hr class="horizontal dark mt-0">
                        <h5 class="text-center text-bold text-success">Pet Information</h5>
                        <hr class="horizontal dark mt-0">

                        <div class="col-md-6">
                            <label for="chief_complaint" class="col-sm-2 col-form-label">Chief Complaint:</label>
                            <input type="text" class="form-control" name="chief_complaint" id="chief_complaint" placeholder="Cheif Complaint"
                                value="">
                        </div>

                        <div class="col-md-6">
                            <label for="body_weight" class="col-sm-2 col-form-label">Body Weight:</label>
                            <input type="number" class="form-control" name="body_weight" id="body_weight" placeholder="Body Weight"
                                value="">
                        </div>

                        <div class="col-md-2">
                            <label for="hr" class="col-sm-2 col-form-label">HR:</label>
                            <input type="number" class="form-control" name="hr" id="hr" placeholder="HR"
                                value="">
                        </div>
                        <div class="col-md-2">
                            <label for="hr" class="col-sm-2 col-form-label">RR:</label>
                            <input type="number" class="form-control" name="rr" id="rr" placeholder="RR"
                                value="">
                        </div>
                        <div class="col-md-2">
                            <label for="temperature" class="col-sm-2 col-form-label">Temperature:</label>
                            <input type="number" class="form-control" name="temperature" id="temperature"
                                placeholder="Temperature" value="">
                        </div>
                        <div class="col-md-2">
                            <label for="diet" class="col-sm-2 col-form-label">Diet:</label>
                            <input type="text" class="form-control" name="diet" id="diet" placeholder="Diet"
                                value="">
                        </div>
                        <div class="col-md-4">
                            <label class="col-sm-2 col-form-label">Product</label>
                            <select class="form-select @error('product') is-invalid @enderror"
                                aria-label="Default select example"name="product" wire:model='product'>
                                <option selected>Selecet product</option>

                            </select>
                            @error('product')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-md-6">
                            <label for="next_visit" class="col-sm-2 col-form-label">Next Visit:</label>
                            <input type="date" class="form-control" name="next_visit" id="next_visit"
                                placeholder="Next visit" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="doctor" class="col-sm-2 col-form-label">Doctor:</label>
                            <input type="text" class="form-control" name="doctor" id="doctor"
                                placeholder="Doctor" value="">
                        </div>


                        <div class="form-floating mb-1 mt-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comment"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>



                    </form>

                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-success data-bs-dismiss="modal"">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

</div>
</div>
