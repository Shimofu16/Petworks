<div class="modal fade" id="show{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="examplModallongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-center">
                <h5 class="modal-title text-white font-weight-bold " id="exampleModalLongtitle">
                    CLIENT INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>



            <div class="modal-body">
                <table class="table table-hover">


                    <tbody>

                        <tr colspan="3">
                            <td class="text-start text-bold  text-info">  OWNER DETAILS</h5></div></td>
                            <td ></td>
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
                                <td class="text-start text-bold text-info">  PET DETAILS</h5></div></td>
                                <td ></td>
                        </tr>


                        <tr>
                            <td class="text-left">Pet name:</td>
                            <td class="text-left">{{ $appointment->pet->pet_name }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Color:</td>
                            <td class="text-left">{{ $appointment->pet->color }}</td>
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

                    </tbody>




                </table>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
