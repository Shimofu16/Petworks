@extends('Petworks.admin.index')
@section('contents')
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

        <div class="col-md-7 shadow">
            <!-- Nav tabs -->
            <div class="row bg-white">
                <table class="table ">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
