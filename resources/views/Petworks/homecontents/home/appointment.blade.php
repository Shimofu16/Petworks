<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="icon" href="{{ asset('images/petworks.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="{{ route('admin.appointment.store') }}" class="mt-5 border p-4 bg-light shadow"
                        method="POST">
                        @csrf
                        <h4 class="mb-2 text-secondary text-center">Appointment / Scheduling Form</h4>
                        <h6 class="mb-5 text-secondary text-center">Petworks Veterinary Clinic</h6>
                        <div class=" row ">
                            <div class="mb-3 col-md-12 ">
                                <label>Name<span class="text-danger ">*</span></label>
                                <input type="text" name="name" class="form-control " placeholder="Enter Name ">
                            </div>
                            <div class="mb-3 col-md-12 ">
                                <label>Pet's Name<span class="text-danger ">*</span></label>
                                <input type="text " name="pet_name" class="form-control "
                                    placeholder="Enter Pet name ">
                            </div>


                            <div class="row">
                                <div class="col-md-12 col-lg-12 mb-3 ">
                                    <label for="pet_type" class="text-dark h6 fw-normal form-title">Type of Pet <span
                                            class="text-danger">*</span></label>
                                    <div class="">
                                        <label for="poll 1"
                                            class="radio-inline py-2 me-1 gender @error('pet_type') is-invalid @enderror">
                                            <input type="radio" class="" name="pet_type" id="dog"
                                                value="Dog" wire:model="pet_type">
                                            Dog</label>
                                        <label for="poll 2"
                                            class="radio-inline py-2 me-1 gender @error('pet_type') is-invalid @enderror"><input
                                                type="radio" class="" name="pet_type" id="puppy"
                                                value="Puppy" wire:model="pet_type">
                                            Puppy</label>
                                        <label for="poll 3"
                                            class="radio-inline py-2 me-1 gender @error('pet_type') is-invalid @enderror"><input
                                                type="radio" class="" name="pet_type" id="cat"
                                                value="Cat" wire:model="pet_type">
                                            Cat</label>
                                        <label for="poll 4"
                                            class="radio-inline py-2 me-1 gender @error('pet_type') is-invalid @enderror"><input
                                                type="radio" class="" name="pet_type" id="kitten"
                                                value="Kitten" wire:model="pet_type">
                                            Kitten</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <label>Age<span class="text-danger ">*</span></label>
                                <input type="text " name="age" class="form-control " placeholder="Enter Age ">
                            </div>


                            <div class="col-md-6 ">
                                <label>Breed<span class="text-danger ">*</span></label>
                                <select class="form-select" name="breed" aria-label="Default select example ">
                                    <option selected>Open this select menu</option>
                                    <option value="Bulldog">Bulldog</option>
                                    <option value="German Shepherd">German Shepherd</option>
                                    <option value="Golden Retriever">Golden Retriever</option>
                                    <option value="Poddle">Poddle</option>
                                    <option value="Husky">Husky</option>
                                </select>
                            </div>

                            <div class="mb-3 mt-3 col-md-12 ">
                                <label>Reason of Appointment<span class="text-danger ">*</span></label>
                                <select class="form-select" name="reason_id" aria-label="Default select example ">
                                    <option selected>Open this and select</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->service }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label>Date<span class="text-danger">*</span></label>
                                <input type="date" name="date" id="date" class="form-control"
                                    placeholder="Enter Date">
                            </div>

                            <div class="col-md-6">
                                <label>Time<span class="text-danger">*</span></label>
                                <input type="time" name="time" id="time" class="form-control"
                                    placeholder="Enter Time">
                            </div>

                            <div class="mb-3 mt-3 col-md-12 ">
                                <label>Address<span class="text-danger ">*</span></label>
                                <input type="text" name="address" class="form-control "
                                    placeholder="Enter Address ">
                            </div>

                            <div class="col-md-6 ">
                                <label>Email<span class="text-danger ">*</span></label>
                                <input type="text" name="email" class="form-control "
                                    placeholder="Enter Email ">
                            </div>


                            <div class="col-md-6 ">
                                <label>Contact number<span class="text-danger ">*</span></label>
                                <input type="text" name="number" class="form-control "
                                    placeholder="Enter Contact number ">
                            </div>


                            <div class="col-md-12 ">
                                <button class="btn btn-success mt-4 float-end" type="submit">Send</button>
                                <a class="btn btn-danger mt-4 float-start" href="{{ route('home.index') }}">Back</a>

                            </div>
                        </div>
                    </form>
                    <!--     <p class="text-center mt-3 text-secondary ">If you have account, Please <a href="# ">Login Now</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>
</body>

</html>
