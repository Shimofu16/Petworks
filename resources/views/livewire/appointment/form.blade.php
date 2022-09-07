<div>
    @switch($currentStep)
        @case(1)
            <div class="card shadow bg-light">
                <div class="card-header">
                    {{-- <div>
                        <img src="{{  }}" alt="">
                    </div> --}}
                    <div>
                        <h1 class="text-center mb-1 card-title">Welcome!</h1>
                        <h6 class="text-center">Petworks Veterinary Clinic</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center align-items-center my-3">
                        <div class="col-md-5 text-center">
                            <button type="button" class="btn btn-primary mb-3" wire:click='new'>Book Appointment</button>
                            <button class="btn btn-link" wire:click='old'>Excisting</button>
                        </div>
                    </div>
                </div>
            </div>
        @break

        @case(2)
            @if ($isNewClient)
                <div class="card bg-light">
                    <div class="card-header bg-transparent border-0">
                        <h4 class="mb-2 text-secondary text-center">Appointment / Scheduling Form</h4>
                        <h6 class="text-secondary text-center">Petworks Veterinary Clinic</h6>
                    </div>
                    <form wire:submit.prevent='appointment'>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class=" col-md-12 ">
                                    <label>Owner Name<span class="text-danger ">*</span></label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name "
                                        wire:model='name'>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 ">
                                    <label>Email<span class="text-danger ">*</span></label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email"
                                        wire:model='email'>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 ">
                                    <label>Contact number<span class="text-danger ">*</span></label>
                                    <input type="text" name="number"
                                        class="form-control @error('number') is-invalid @enderror"
                                        placeholder="Enter Contact number" wire:model='number'>
                                    @error('number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <div class="col-md-12 ">
                                    <label>Address<span class="text-danger ">*</span></label>
                                    <input type="text" name="address" class="form-control " placeholder="Enter Address "
                                        wire:model='address'>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <hr class="horizontal dark">
                            <div class="row mb-3">
                                <div class="col-md-12 ">
                                    <label>Pet's Name<span class="text-danger ">*</span></label>
                                    <input type="text " name="pet_name"
                                        class="form-control @error('pet_name') is-invalid @enderror"
                                        placeholder="Enter Pet name " wire:model='pet_name'>
                                    @error('pet_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 ">
                                    <label>Type of pet<span class="text-danger ">*</span></label>
                                    <input type="text " name="pet_type"
                                        class="form-control @error('pet_type') is-invalid @enderror"
                                        placeholder="Enter type of pet " wire:model='pet_type'>
                                    @error('pet_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 ">
                                    <label>Age<span class="text-danger ">*</span></label>
                                    <input type="number" name="age"
                                        class="form-control  @error('age') is-invalid @enderror" placeholder="Enter Age"
                                        wire:model='age'>
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Birthdate<span class="text-danger ">*</span></label>
                                    <input type="date" name="birthdate"
                                        id="birthdate"class="form-control  @error('birthdate') is-invalid @enderror"
                                        placeholder="Enter birthdate " wire:model='birthdate'>
                                    @error('birthdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Gender<span class="text-danger ">*</span></label>
                                    <select class="form-select @error('gender') is-invalid @enderror"
                                        aria-label="Default select example"name="gender" wire:model='gender'>
                                        <option selected>Selecet Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label>Breed<span class="text-danger ">*</span></label>
                                    <input type="text " name="breed"
                                        class="form-control  @error('breed') is-invalid @enderror" placeholder="Enter breed "
                                        wire:model='breed'>
                                    @error('breed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12 ">
                                    <label>Reason of Appointment<span class="text-danger ">*</span></label>
                                    <select class="form-select @error('reason_id') is-invalid @enderror" name="reason_id"
                                        aria-label="Default select example " wire:model='reason_id'>
                                        <option selected>Open this and select</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->service }}</option>
                                        @endforeach
                                    </select>
                                    @error('reason_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class=" row mb-3">
                                <div class="col-md-6">
                                    <label>Date<span class="text-danger">*</span></label>
                                    <input type="date" name="date" id="date"
                                        class="form-control @error('date') is-invalid @enderror" placeholder="Enter Date"
                                        wire:model='date'>
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label>Time<span class="text-danger">*</span></label>
                                    <input type="time" name="time" id="time"
                                        class="form-control @error('time') is-invalid @enderror" placeholder="Enter Time"
                                        wire:model='time'>
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between py-3">
                            <div></div>
                            <button class="btn btn-success" type="submit" wire:submit>Submit</button>
                        </div>
                    </form>
                </div>
            @endif
            @if ($isOldClient)
                @if ($hasEmail)
                    <div class="card bg-light">
                        <div class="card-header bg-transparent border-0">
                            <h4 class="mb-2 text-secondary text-center">Appointment / Scheduling Form</h4>
                            <h6 class="text-secondary text-center">Petworks Veterinary Clinic</h6>
                        </div>
                        <form wire:submit.prevent='appointment'>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-7 ">
                                        <label>Pets</label>
                                        <select class="form-select @error('pet_id') is-invalid @enderror" name="pet_id"
                                            aria-label="Default select example " wire:model='pet_id'>
                                            <option selected>Open this and select</option>
                                            @foreach ($pets as $pet)
                                                <option value="{{ $pet->id }}">{{ $pet->pet_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('pet_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">
                                        <input type="checkbox" class="custom-checkbox" wire:click='addPet'> Add Pet</input>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                @if ($addPet)
                                    <div class="row mb-3">
                                        <div class="col-md-12 ">
                                            <label>Pet's Name<span class="text-danger ">*</span></label>
                                            <input type="text " name="pet_name"
                                                class="form-control @error('pet_name') is-invalid @enderror"
                                                placeholder="Enter Pet name " wire:model='pet_name'>
                                            @error('pet_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6 ">
                                            <label>Type of pet<span class="text-danger ">*</span></label>
                                            <input type="text " name="pet_type"
                                                class="form-control @error('pet_type') is-invalid @enderror"
                                                placeholder="Enter type of pet " wire:model='pet_type'>
                                            @error('pet_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 ">
                                            <label>Age<span class="text-danger ">*</span></label>
                                            <input type="number" name="age"
                                                class="form-control  @error('age') is-invalid @enderror"
                                                placeholder="Enter Age" wire:model='age'>
                                            @error('age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>Birthdate<span class="text-danger ">*</span></label>
                                            <input type="date" name="birthdate"
                                                id="birthdate"class="form-control  @error('birthdate') is-invalid @enderror"
                                                placeholder="Enter birthdate " wire:model='birthdate'>
                                            @error('birthdate')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label>Gender<span class="text-danger ">*</span></label>
                                            <select class="form-select @error('gender') is-invalid @enderror"
                                                aria-label="Default select example"name="gender" wire:model='gender'>
                                                <option selected>Selecet Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label>Breed<span class="text-danger ">*</span></label>
                                            <input type="text " name="breed"
                                                class="form-control  @error('breed') is-invalid @enderror"
                                                placeholder="Enter breed " wire:model='breed'>
                                            @error('breed')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <h5 class="card-title">Pet Information</h5>
                                        <p class="card-text">Pet name: {{ $dpet_name }}</p>
                                        <p class="card-text">Pet Type: {{ $dpet_type }}</p>
                                        <p class="card-text">Date of Birth: {{ $dbirthdate }}</p>
                                        <p class="card-text">Age: {{ $dage }}</p>
                                        <p class="card-text">Gender: {{ $dgender }}</p>
                                        <p class="card-text">Breed: {{ $dbreed }}</p>
                                    </div>
                                    <hr class="horizontal dark">
                                @endif
                                <div class="row mb-3">
                                    <div class="col-md-12 ">
                                        <label>Reason of Appointment<span class="text-danger ">*</span></label>
                                        <select class="form-select @error('reason_id') is-invalid @enderror" name="reason_id"
                                            aria-label="Default select example " wire:model='reason_id'>
                                            <option selected>Open this and select</option>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->service }}</option>
                                            @endforeach
                                        </select>
                                        @error('reason_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" row mb-3">
                                    <div class="col-md-6">
                                        <label>Date<span class="text-danger">*</span></label>
                                        <input type="date" name="date" id="date"
                                            class="form-control @error('date') is-invalid @enderror" placeholder="Enter Date"
                                            wire:model='date'>
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>Time<span class="text-danger">*</span></label>
                                        <input type="time" name="time" id="time"
                                            class="form-control @error('time') is-invalid @enderror" placeholder="Enter Time"
                                            wire:model='time'>
                                        @error('time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-0 d-flex justify-content-between py-3">
                                <div></div>
                                <button class="btn btn-success" type="submit" wire:submit>Submit</button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="card bg-light">
                        {{-- <div class="card-header bg-transparent border-0">

                        </div> --}}
                        <div class="card-body">
                            <div class="mt-3">
                                <label for="emailAddress" class="form-label">Email</label>
                                <input type="email" class="form-control  @error('emailAddress') is-invalid @enderror"
                                    id="emailAddress" name="emailAddress" placeholder="name@example.com"
                                    wire:model='emailAddress'>
                                @error('emailAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                            <div></div>
                            <button type="submit" class="btn btn-primary" wire:click='verifyEmail'>Submit</button>
                        </div>
                    </div>
                @endif
            @endif
        @break

    @endswitch
</div>
