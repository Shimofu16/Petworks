@extends('Petworks.admin.layouts.index')
@section('tab-title')
    Dashboard
@endsection
@section('sidebar')
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 z-index-2"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="" target="_blank">
                <img src="{{ asset('images/petworks.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-primary">Admin Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">

        {{-- dashboard --}}
        <div class="navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">

                <li class="nav-item mt-2">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manage System</h6>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('admin.index') ? 'active' : '' }}"
                        href="{{ route('admin.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-tv text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>



                {{-- Homepage Syste, --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('admin.contact.index') ? 'active' : '' }}"
                        href="{{ route('admin.contact.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                            <i class="fa-solid fa-message text-sm opacity-10 text-primary"></i>
                        </div>
                        <span class="nav-link-text ms-1">Contact us</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed {{ Request::routeIs('admin.appointment.*') ? 'active' : '' }}"
                        href="#appointment" data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="appointment">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-calendar-days text-sm opacity-10 text-primary"></i>
                        </div>
                        <span class="nav-link-text">Appointment</span>
                    </a>
                    <div class="collapse" id="appointment">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item mb-2">
                                <a href="{{ route('admin.appointment.index') }}" class="nav-link">Pending</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="{{ route('admin.confirm.index') }}" class="nav-link">Confirm</a>
                            </li>


                        </ul>
                    </div>
                </li>
                {{-- <div class="sidenav-header">
                    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                        aria-hidden="true" id="iconSidenav"></i>
                    <a class="navbar-brand m-0" href="" target="_blank">
                        <img src="{{ asset('images/doc.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                        <span class="ms-1 font-weight-bold text-warning">Doctor's  Dashboard</span>
                    </a>
                </div> --}}


                <hr class="horizontal dark mt-1">
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Records</h6>
                </li>


                {{-- Single --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('admin.owner.index') ? 'active' : '' }}"
                        href="{{ route('admin.owner.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                            <i class="fa-solid fa-file-invoice text-sm opacity-10 text-warning"></i>
                        </div>
                        <span class="nav-link-text ms-1">Client Records</span>
                    </a>
                </li>


                {{-- Homepage dropdown --}}



                {{-- Single --}}
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('admin.appointment.index') ? 'active' : '' }}" href="{{ route('admin.appointment.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                            <i class="fa-solid fa-calendar-days text-sm opacity-10 text-primary"></i>

                        </div>
                        <span class="nav-link-text ms-1">Appointment</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('admin.confirm.index') ? 'active' : '' }}" href="{{ route('admin.confirm.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                            <i class="fa-solid fa-calendar-check text-sm opacity-10 text-primary"></i>
                        </div>
                        <span class="nav-link-text ms-1">Confirm</span>
                    </a>
                </li> --}}

                {{-- Records dropdown --}}
                {{-- <li class="nav-item">
                    <a class="nav-link collapsed {{ Request::routeIs('admin.admission.*') ? 'active' : '' }}"
                        href="#admission" data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="admission">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-clipboard text-sm opacity-10 text-primary"></i>
                        </div>
                        <span class="nav-link-text">Admission</span>
                    </a>

                    <div class="collapse" id="admission">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item mb-2">
                                <a href="" class="nav-link">Client & Pet</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link">Prescription</a>
                            </li>

                        </ul>
                    </div>
                </li> --}}



                {{-- Human Recources --}}
                {{-- <li class="nav-item">
                    <a class="nav-link collapsed {{ Request::routeIs('admin.human.*') ? 'active' : '' }}"
                        href="#human" data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="human">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-file-lines text-sm opacity-10 text-primary"></i>
                        </div>
                        <span class="nav-link-text">Human Recources</span>
                    </a>

                    <div class="collapse" id="human">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item mb-2">
                                <a href="" class="nav-link">POS Summary</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link">Billing Invoice Paid List</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link">Payment Transaction Detailed</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link">Inventory Summary</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}


                {{-- System --}}
                {{-- <li class="nav-item">
                    <a class="nav-link collapsed {{ Request::routeIs('admin.system.*') ? 'active' : '' }}"
                        href="#system" data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="system">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-clock-rotate-left text-sm opacity-10 text-primary"></i>

                        </div>
                        <span class="nav-link-text">System</span>
                    </a>

                    <div class="collapse" id="system">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item mb-2">
                                <a href="" class="nav-link">History</a>
                            </li>

                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>

    </aside>
@endsection
