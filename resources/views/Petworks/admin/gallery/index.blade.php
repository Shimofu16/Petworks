@extends('Petworks.admin.index')
@section('page-title')
    Photo Gallery
@endsection
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center mb-3 pb-0">

                    <div class="col">
                        <h6>@yield('page-title')</h6>
                    </div>


                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary mb-0" type="button" data-bs-toggle="modal" data-bs-target="#add"
                            aria-hidden="true">
                            <span class="d-flex align-items-center"><i class="fas fa-plus-circle"></i>&#160; Add
                                Photo</span>
                        </button>
                        @include('Petworks.admin.gallery.modal._add')
                    </div>
                    
                </div>


                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" {{-- id="gallery-table" --}}>
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photos
                                    </th>
                                    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"
                                        {{-- class="text-center" --}}>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm"> {{ $loop->index + 1 }}</h6>
                                            </div>
                                        </td>


                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $gallery->title }}</h6>
                                            </div>
                                        </td>


                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ date('F d, Y', strtotime($gallery->date)) }}
                                                </h6>
                                            </div>
                                        </td>


                                        {{-- button --}}
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <a class="btn btn-link text-info px-3 mb-0"
                                                    href="{{ route('admin.gallery.show', ['id' => $gallery->id]) }}">
                                                    <i class="fa fa-eye text-info me-2" aria-hidden="true"></i>
                                                    Preview
                                                </a>

                                            </div>
                                        </td>


                                        {{--   <td>
                                            <a class="btn btn-sm btn-outline-info"
                                                href="{{ route('admin.gallery.show', ['id' => $gallery->id]) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                Preview
                                            </a>
                                        </td> --}}

                                        {{--  <button class="btn btn-sm btn-outline-danger" data-toggle="modal"
                                                    data-target="#delete{{ $gallery->id }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                    Delete
                                                </button>
                                                @include('Petworks.admin.gallery.modal._delete') --}}

                                        {{-- ----- --}}





                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <button class="btn btn-link text-primary px-3 mb-0" href="#" type="button" data-toggle="modal"
                                                    data-target="#edit{{ $gallery->id }}">
                                                    <i class="fa fa-edit text-primary me-2" aria-hidden="true"></i>
                                                    Edit
                                                </button>
                                                <button class="btn btn-link text-danger px-3 mb-0" href="#" type="button" data-toggle="modal"
                                                    data-target="#delete{{ $gallery->id }}">
                                                    <i class="fa fa-trash text-danger me-2" aria-hidden="true"></i>
                                                    Delete
                                                </button>
                                                @include('Petworks.admin.gallery.modal._delete')
                                                @include('Petworks.admin.gallery.modal._edit')
                                            </div>
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
@section('dashboard-javascript')
    <script type="text/javascript">
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#gallery-table').DataTable({
                "ordering": false
            });
        });
    </script>
@endsection
