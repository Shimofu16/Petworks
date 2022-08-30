<div>
    <div class="row">
        <div class="col-md-4 p-0 shadow me-3">
            <div class="card border-0">
                <div class="card-header border-0 text-bold">
                    {{ $owner->name }}
                </div>

                <div class="card-body pt-0">
                    <select class="form-select mt-1" aria-label="Default select example" name="pet_id" wire:model='pet_id'>
                        <option selected>Pet name</option>
                        @foreach ($owner->pets as $pet)
                            <option value="{{ $pet->id }}">{{ $pet->pet_name }}</option>
                        @endforeach
                    </select>
                    <select class="form-select mt-1" aria-label="Default select example" name="reason_id"
                        wire:model='reason_id'>
                        <option selected>Appointments</option>
                        @forelse ($services as $service)
                            <option value="{{ $service->reason_id }}">{{ $service->service->service }}</option>
                        @empty
                            <option value="">No Appointments</option>
                        @endforelse
                    </select>
                    <hr class="horizontal dark mt-0">
                    <h6 class="card-title">Pet Information</h6>

                    <p class="card-text">Pet name: {{ $pet_name }}</p>
                    <p class="card-text">Pet Type: {{ $pet_type }}</p>
                    <p class="card-text">Date of Birth: {{ $pet_birthdate }}</p>
                    <p class="card-text">Age: {{ $pet_age }}</p>
                    <p class="card-text">Gender: {{ $pet_gender }}</p>
                    <p class="card-text">Breed: {{ $pet_breed }}</p>

                    <hr class="horizontal dark mt-0">

                </div>

            </div>
        </div>

        <!-- Nav tabs -->
        {{-- TABLEEEEEEE --}}
        <div class="col-md-7 ">
            <div class="row bg-white shadow">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header d-flex justify-content-between align-items-center mb-3 pb-0">

                                <div class="col">
                                    @isset($title)
                                    <h6>{{ $title->service }}</h6>
                                        
                                    @endisset
                                </div>
                            </div>

                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead {{-- class="table-warning text-black" --}}>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Date
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Time
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Comment
                                                </th>


                                                <th
                                                    class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($consultations as $consultation)
                                                <tr>

                                                    <td>{{ date('F d, Y', strtotime($consultation->date)) }}</td>
                                                    <td>{{ date('H:i A', strtotime($consultation->time)) }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-link btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#show{{ $consultation->id }}">
                                                            View
                                                        </button>
                                                        @include('Petworks.admin.owner.modal._show')
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-link btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit{{ $consultation->id }}">
                                                            Comment
                                                        </button>
                                                        @include('Petworks.admin.owner.modal._edit')
                                                    </td>
                                                </tr>
                                            @empty

                                                <tr>

                                                    <td>no data</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
