@extends('Petworks.admin.index')
@section('page-title')
    Category
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
                        <button class="btn btn-primary mb-0" type="button" data-bs-toggle="modal" data-bs-target="#add">
                            <span class="d-flex align-items-center"><i class="fas fa-plus-circle"></i>&#160; Add
                                Category</span>
                        </button>
                        @include('Petworks.admin.inventory.category.modal._add')
                    </div>

                </div>



                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">no.
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total
                                        product
                                    </th>
                                    <th
                                        class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($categorys as $category)
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $category->id }}</h6>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $category->category_name }}</h6>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">{{ $category->products->count() }}</h6>
                                            </div>
                                        </td>




                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <button class="btn btn-link text-primary px-3 mb-0" href="#"
                                                    type="button" data-bs-toggle="modal"
                                                    data-bs-target="#edit{{ $category->id }}">
                                                    <i class="fa-solid fa-pen-to-square text-primary me-2"
                                                        aria-hidden="true"></i>

                                                    Edit
                                                </button>
                                                @include('Petworks.admin.inventory.category.modal._edit')
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
            $('#category').DataTable(
                'odering': false
            );
        });
    </script>
@endsection
