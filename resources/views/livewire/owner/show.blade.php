<div>
    <div class="row mb-3">
        {{-- <div class="col-md-4 p-0  me-3">
            <div class="card border-0 shadow">
                <div class="card-header border-0 text-bold">
                    <h5 class="card-title">Owner Information</h5>
                    <hr class="horizontal dark mt-0">
                    <p class="card-text">Name: {{ $owner->name }}</p>
                    <p class="card-text ">Email: {{ $owner->email }}</p>
                    <p class="card-text">Address: {{ $owner->address }}</p>
                    <p class="card-text">Contact: {{ $owner->number }}</p>
                </div>

                <div class="card-body pt-0">
                    <select class="form-select mt-1" aria-label="Default select example" name="pet_id"
                        wire:model='pet_id'>
                        <option selected value="">Pet Name</option>
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
                    <h5 class="card-title">Pet Information</h5>
                    <hr class="horizontal dark mt-0">

                    <p class="card-text">Pet name: {{ $pet_name }}</p>
                    <p class="card-text">Pet Type: {{ $pet_type }}</p>
                    <p class="card-text">Date of Birth: {{ $pet_birthdate }}</p>
                    <p class="card-text">Age: {{ $pet_age }}</p>
                    <p class="card-text">Gender: {{ $pet_gender }}</p>
                    <p class="card-text">Breed: {{ $pet_breed }}</p>

                    <hr class="horizontal dark mt-0">

                </div>

            </div>
        </div> --}}
        {{-- TABLEEEEEEE --}}
        <div class="card ">
            <div class="card-body p-0">
                <div class="row">
                    {{-- owner info --}}
                    <div class="col">
                        <div class="card-header border-0 text-bold mt-3 mb-3">
                            <h5 class="card-title mb-3 text-center text-info">Owner Information</h5>

                            <hr class="horizontal dark mt-1">
                            <p class="card-text">Name: {{ $owner->name }}</p>
                            <p class="card-text ">Email: {{ $owner->email }}</p>
                            <p class="card-text">Address: {{ $owner->address }}</p>
                            <p class="card-text">Contact: {{ $owner->number }}</p>
                            {{-- <select class="form-select mt-1" aria-label="Default select example" name="reason_id"
                                wire:model='reason_id'>
                                <option selected>Appointments</option>
                                @forelse ($services as $service)
                                <option value="{{ $service->reason_id }}">{{ $service->service->service }}</option>
                                @empty
                                <option value="">No Appointments</option>
                                @endforelse
                            </select> --}}

                        </div>
                        {{-- client info --}}
                    </div>
                    {{-- pet info --}}
                    <div class="col">
                        <div class="card-header border-0 text-bold mt-3 mb-3">
                            <h5 class="card-title mb-3 text-center text-warning">Pet Information</h5>

                            <hr class="horizontal dark mt-1">
                            <select class="form-select mt-1 mb-1" aria-label="Default select example" name="pet_id"
                                wire:model='pet_id'>
                                <option selected disabled>Pet Name</option>
                                @foreach ($owner->pets as $pet)
                                <option value="{{ $pet->id }}">{{ $pet->pet_name }}</option>
                                @endforeach
                            </select>
                            <p class="card-text">Pet name: {{ $pet_name }}</p>
                            <p class="card-text">Pet Type: {{ $pet_type }}</p>
                            <p class="card-text">Date of Birth: {{ $pet_birthdate }}</p>
                            <p class="card-text">Age: {{ $pet_age }}</p>
                            <p class="card-text">Gender: {{ $pet_gender }}</p>
                            <p class="card-text">Breed: {{ $pet_breed }}</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center mb-3 pb-0">
                <h5 class="card-title">Record's Information</h5>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead {{-- class="table-warning text-black" --}}>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Record
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Date
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Time
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Doctor
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Comment
                                </th>


                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($services as $consultation)
                            <tr>

                                <td>{{ $consultation->service->service }}</td>
                                <td>{{ date('F d, Y', strtotime($consultation->date)) }}</td>
                                <td>{{ date('H:i A', strtotime($consultation->time)) }}</td>
                                <td>{{ $consultation->doctor}}</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-link btn-sm text-info"
                                            data-bs-toggle="modal" data-bs-target="#show{{ $consultation->id }}">
                                            <i class="fa-solid fa-eye text-info me-2" aria-hidden="true"></i>
                                            Show
                                        </button>
                                        @include('Petworks.admin.owner.modal._show')
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-link btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $consultation->id }}">
                                            <i class="fa-solid fa-pen-to-square text-primary me-2"
                                                aria-hidden="true"></i>
                                            Edit
                                        </button>
                                        @include('Petworks.admin.owner.modal._edit')
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <span>No Consultation Available</span>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        {{ $services->links() }}
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>