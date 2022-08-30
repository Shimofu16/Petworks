@extends('Petworks.admin.index')
@section('contents')
    {{-- SIDE BAR OF THE CLIENT AND PET --}}
    <div class="row">
        <div class="col-md-4 p-0 shadow me-3">
            <div class="card border-0">
                <div class="card-header border-0 text-bold">
                    {{ $owner->name }}
                </div>

                <div class="card-body pt-0">
                    <select class="form-select mt-1" aria-label="Default select example">
                        <option selected>Pet name</option>
                        @foreach ($owner->pets as $pet)
                            <option value="{{ $pet->id }}">{{ $pet->pet_name }}</option>
                        @endforeach
                    </select>

                    <select class="form-select mt-1" aria-label="Default select example">
                        <option selected>Records</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <hr class="horizontal dark mt-0">
                    <h6 class="card-title">Pet Information</h6>
                    <p class="card-text">Pet name:</p>
                    <p class="card-text">Pet Type:</p>
                    <p class="card-text">Date of Birth:</p>
                    <p class="card-text">Age:</p>
                    <p class="card-text">Gender:</p>
                    <p class="card-text">Breed:</p>
                    <hr class="horizontal dark mt-0">

                </div>

            </div>
        </div>

        <!-- Nav tabs -->
        {{-- TABLEEEEEEE --}}
        <div class="col-md-7 shadow">
            <div class="row bg-white">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center mb-3 pb-0">

                                <div class="col">
                                    <h6>{{-- @yield('page-title') --}} Consultation</h6>
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
                                            <tr>

                                                <td>August 23, 2022</td>
                                                <td>2:30 pm</td>
                                                <td>need a follow up check up</td>
                                            </tr>
                                            <tr>

                                                <td>July 03, 2022</td>
                                                <td>3:00pm</td>
                                                <td>need to deworm</td>
                                            </tr>
                                            <tr>

                                                <td>June 24, 2022</td>
                                                <td>3:30pm</td>
                                                <td>no more consultation</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        @endsection
