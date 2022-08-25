@extends('Petworks.admin.index')
@section('page-title')
    Client and Pets Record
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>

                                     <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($owners as $owner)
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $owner->name }}</h6>
                                            </div>
                                        </td>



                                        {{-- BUTTONS --}}
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('admin.owner.show',$owner->id) }} ">
                                                    <i class="fa-solid fa-file-import text-dark me-2" aria-hidden="true"></i>show</a>
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

@section('page-level-javascript')
    <script>
        $(document).ready(function() {
            $('#owner').DataTable();
        });
    </script>
@endsection
