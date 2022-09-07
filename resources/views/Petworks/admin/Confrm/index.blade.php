@extends('Petworks.admin.index')
@section('page-title')
    Confirm
@endsection
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center mb-3 pb-0">

                    <div class="col">
                        <h6>@yield('page-title')</h6>
                    </div>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead {{-- class="table-warning text-black" --}}>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pet
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reason
                                        of
                                        Appointment
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Doctor
                                    </th>
                                    <th
                                        class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                        More info
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $appointment->owner->name }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $appointment->pet->pet_name }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $appointment->service->service }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $appointment->doctor->name }}</h6>
                                            </div>
                                        </td>

                                        {{-- BUTTONS --}}
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <button class="btn btn-link text-info px-3 mb-0" href="#"
                                                    type="button" data-bs-toggle="modal"
                                                    data-bs-target="#show{{ $appointment->id }}">
                                                    <i class="fa-solid fa-eye text-info me-2" aria-hidden="true"></i>
                                                    Show
                                                </button>
                                            </div>
                                            @include('Petworks.admin.Confrm.modal._show')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-level-javascript')
    <script>
        $(document).ready(function() {
            $('#confirm').DataTable(
                'odering': false
            );
        });
    </script>
@endsection
