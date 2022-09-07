@extends('Petworks.admin.index')
@section('page-title')
    Contact Us Messages
@endsection
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>@yield('page-title')</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead {{-- class="table-warning text-black" --}}>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email
                                    </th>

                                    <th
                                        class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                       More Info
                                    </th>
                                    <th
                                        class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $contact->name }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $contact->email }}</h6>
                                            </div>
                                        </td>


                                        {{-- BUTTONS --}}
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <button class="btn btn-link text-info px-3 mb-0" href="#"
                                                    type="button" data-bs-toggle="modal"
                                                    data-bs-target="#view{{ $contact->id }}">
                                                    <i
                                                    class="fa-solid fa-eye text-info me-2"
                                                        aria-hidden="true"></i> Show</button>
                                            @include('Petworks.admin.contact.modal._show')
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <button class="btn btn-link text-danger px-3 mb-0" href="#"
                                                    type="button" data-bs-toggle="modal"
                                                    data-bs-target="#delete{{ $contact->id }}">
                                                    <i
                                                    class="fa-regular fa-trash-can text-danger me-2"
                                                        aria-hidden="true"></i> Delete</button>
                                            @include('Petworks.admin.contact.modal._delete')
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
            $('#contact').DataTable();
        });
    </script>
@endsection
