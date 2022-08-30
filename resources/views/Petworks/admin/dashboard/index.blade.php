@extends('Petworks.admin.index')
@section('contents')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Clients</p>
                                <h5 class="font-weight-bolder">
                            {{--   {{ $pendingCount }} --}}
                                </h5>
                                <a class="mb-0 text-decoration-underline" href="#">
                                    {{-- view --}}
                                    <span class="text-success text-sm font-weight-bolder"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="fa-solid fa-users text-lg opacity-10"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Billing Invoice</p>
                                <h5 class="font-weight-bolder">
                                 {{--   {{ $confirmCount }} --}}
                                </h5>
                                <a class="mb-0" href="#">
                                    <span class="text-white">a</span>
                                    <span class="text-success text-sm font-weight-bolder"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="fa-solid fa-file-invoice-dollar text-lg opacity-10"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                                <h5 class="font-weight-bolder">
                                   {{--  {{ $totalPlayerinGroupCount }} --}}
                                </h5>
                                <a class="mb-0" href="#">
                                    <span class="text-white">a</span>
                                    <span class="text-success text-sm font-weight-bolder"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="fa-solid fa-boxes-stacked text-lg opacity-10"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
