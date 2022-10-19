<div class="modal fade" id="show{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="examplModallongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-center">
                <h5 class="modal-title text-white font-weight-bold " id="exampleModalLongtitle">
                    INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <!-- Scrollable modal -->

            <div class="modal-body">
                <div class="modal-dialog modal-dialog-scrollable">


                    {{--  <table class="table table-hover">

                    <tbody>

                        <tr colspan="3">
                            <td class="text-start text-bold text-info"> CLIENT DETAILS</td>

                        </tr>
                        <tr>
                            <td class="text-left">Name:</td>
                            <td class="text-left">{{ $appointment->owner->name }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Address:</td>
                            <td class="text-left">{{ $appointment->owner->address }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Email:</td>
                            <td class="text-left">{{ $appointment->owner->email }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Contact number:</td>
                            <td class="text-left">{{ $appointment->owner->number }}</td>
                        </tr>


                        <tr colspan="3">
                            <td class="text-start text-bold text-info"> PET DETAILS</td>


                        <tr>
                            <td class="text-left">Pet name:</td>
                            <td class="text-left">{{ $appointment->pet->pet_name }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Type of Pet:</td>
                            <td class="text-left">{{ $appointment->pet->pet_type }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Age:</td>
                            <td class="text-left">{{ $appointment->pet->age }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Birthdate:</td>
                            <td class="text-left">{{ $appointment->pet->birthdate }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Gender:</td>
                            <td class="text-left">{{ $appointment->pet->gender }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Breed:</td>
                            <td class="text-left">{{ $appointment->pet->breed }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Reason of Appointment:</td>
                            <td class="text-left">{{ $appointment->service->service }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Date:</td>
                            <td class="text-left">{{ $appointment->date }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Time:</td>
                            <td class="text-left">{{ $appointment->time }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Cheif Complaint:</td>
                            <td class="text-left"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Body Weight:</td>
                            <td class="text-left"></td>
                        </tr>
                        <tr>
                            <td class="text-left">HR:</td>
                            <td class="text-left"></td>
                        </tr>
                        <tr>
                            <td class="text-left">RR:</td>
                            <td class="text-left"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Temperature:</td>
                            <td class="text-left"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Diet:</td>
                            <td class="text-left"></td>
                        </tr>
                    </tbody>
                </table> --}}
                    <form>
                        <hr class="horizontal dark mt-0">
                        <h5 class="text-center text-bold text-info">Client Information</h5>
                        <hr class="horizontal dark mt-0">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Name" value="{{ $appointment->owner->name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Address:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address" value="{{ $appointment->owner->address }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="number" class="col-sm-2 col-form-label">Contact:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="number" id="number"
                                    placeholder="Number" value="{{ $appointment->owner->number }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Email" value="{{ $appointment->owner->email }}">
                            </div>
                        </div>
                        <div class="col">
                            <hr class="horizontal dark mt-0">
                            <h5 class="text-center text-bold text-warning">Pet Information</h5>
                            <hr class="horizontal dark mt-0">

                            <div class="row mb-3">
                                <label for="pet_name" class="col-sm-2 col-form-label">Pet name:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="pet_name" id="pet_name"
                                        placeholder="Pet name" value="{{ $appointment->pet->pet_name }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="age" class="col-sm-2 col-form-label">Age:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="age" id="age"
                                        placeholder="Age" value="{{ $appointment->pet->age }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="birthdate" class="col-sm-2 col-form-label">Date of Birth:</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="birthdate" id="birthdate"
                                        placeholder="Date of Birth" value="{{ $appointment->pet->birthdate }}">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="gender" id="gender"
                                        placeholder="Gender" value="{{ $appointment->pet->gender }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="breed" class="col-sm-2 col-form-label">Breed:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="breed" id="breed"
                                        placeholder="Breed" value="{{ $appointment->pet->breed }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pet_type" class="col-sm-2 col-form-label">Pet type:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="pet_type" id="pet_type"
                                        placeholder="Pet type" value="{{ $appointment->pet->pet_type }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="date" class="col-sm-2 col-form-label">Date:</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="date" id="date"
                                        placeholder="Date" value="{{ $appointment->date }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="time" class="col-sm-2 col-form-label">Time:</label>
                                <div class="col-sm-8">
                                    <input type="time" class="form-control" name="time" id="time"
                                        placeholder="Time" value="{{ $appointment->time }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="service" class="col-sm-2 col-form-label">Appointment:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="service" id="service"
                                        placeholder="Reason of Appointment" value="{{ $appointment->service->service }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="stock" class="col-sm-2 col-form-label">Color:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="color" id="color"
                                        placeholder="Color" value="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="color" class="col-sm-2 col-form-label">Chief Complaint:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="color" id="color"
                                        placeholder="Color" value="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="body_weight" class="col-sm-2 col-form-label">Body Weight:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="body_weight" id="body_weight"
                                        placeholder="Body weightr" value="">
                                </div>
                            </div>

                            <div class="row mb-3">

                                <label for="hr" class="col-sm-2 col-form-label">HR:</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" name="hr" id="hr"
                                        placeholder="HR" value="">
                                </div>
                                <label for="rrk" class="col-sm-2 col-form-label">HR:</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" name="rr" id="rr"
                                        placeholder="RR" value="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="temperature" class="col-sm-2 col-form-label">Temperature:</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" name="temperature" id="temperature"
                                        placeholder="Temperature" value="">
                                </div>
                                <label for="diet" class="col-sm-2 col-form-label">Diet:</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" name="diet" id="diet"
                                        placeholder="Diet" value="">
                                </div>
                            </div>




                            <div class="row mb-3">
                                <label for="next_visit" class="col-sm-2 col-form-label">Next Visit:</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" name="next_visit" id="next_visit"
                                        placeholder="Next visit" value="">
                                </div>
                                <label for="doctor" class="col-sm-2 col-form-label">Doctor:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="doctor" id="doctor"
                                        placeholder="Doctor" value="">
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comment"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                </div>
                            </div>
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
