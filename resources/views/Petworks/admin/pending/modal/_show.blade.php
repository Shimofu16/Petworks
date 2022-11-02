<div class="modal fade" id="view{{ $pending->id }}" tabindex="-1" role="dialog" aria-labelledby="examplModallongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-center">
                <h5 class="modal-title text-light font-weight-bold " id="exampleModalLongtitle">
                    INFORMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>



            <div class="modal-body">
                <table class="table table-hover">
                    {{--   <thead>
                        <tr>

                            <h3 class="modal-title text-dark font-weight-bold text-center">INFORMATION</h3>


                        </tr>
                    </thead> --}}

                    <tbody>

                        <tr colspan="3">
                            <td class="text-start text-bold text-info">  OWNER DETAILS</h5></div></td>
                            <td ></td>
                        </tr>


                        <tr>
                            <td class="text-left">Name:</td>
                            <td class="text-left">{{ $pending->owner->name }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Address:</td>
                            <td class="text-left">{{ $pending->owner->address }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Email:</td>
                            <td class="text-left">{{ $pending->owner->email }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Contact number:</td>
                            <td class="text-left">{{ $pending->owner->number }}</td>
                        </tr>

                        <tr colspan="3">
                            <td class="text-start text-bold text-info">  PET DETAILS</h5></div></td>
                            <td ></td>
                    </tr>

                        <tr>
                            <td class="text-left">Pet name:</td>
                            <td class="text-left">{{ $pending->pet->pet_name }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Color:</td>
                            <td class="text-left">{{ $pending->pet->color }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Type of Pet:</td>
                            <td class="text-left">{{ $pending->pet->pet_type }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Age:</td>
                            <td class="text-left">{{ $pending->pet->age }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Birthdate:</td>
                            <td class="text-left">{{ $pending->pet->birthdate }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Gender:</td>
                            <td class="text-left">{{ $pending->pet->gender }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Breed:</td>
                            <td class="text-left">{{ $pending->pet->breed }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Reason of pending:</td>
                            <td class="text-left">{{ $pending->service->service }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Date:</td>
                            <td class="text-left">{{ $pending->date }}</td>
                        </tr>

                        <tr>
                            <td class="text-left">Time:</td>
                            <td class="text-left">{{ $pending->time }}</td>
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
