<div class="modal fade" id="view{{ $appointment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-center">
                <h5 class="modal-title text-light font-weight-bold " id="exampleModalLongtitle">
                    INFORMATION</h5>
            </div>



            <div class="modal-body">
                <table class="table table-hover">
                  {{--   <thead>
                        <tr>

                            <h3 class="modal-title text-dark font-weight-bold text-center">INFORMATION</h3>


                        </tr>
                    </thead> --}}

                    <tbody>

                        <tr>
                            <td class="text-left">Name:</td>
                            <td class="text-left">{{ $appointment->owner->name}}</td>
                        </tr>

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
                            <td class="text-left">Breed:</td>
                            <td class="text-left">{{ $appointment->pet->breed }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Reason of Appointment:</td>
                            <td class="text-left">{{ $appointment->reason }}</td>
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


                    </tbody>

                </table>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
        </div>

    </div>
</div>
