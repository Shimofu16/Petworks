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
                <span class="ms-1 font-weight-bold text-primary">{{ Auth::guard('admin')->user()->roles }} Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">

        {{-- dashboard --}}
        <div class="navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">

                <li class="nav-item mt-2">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manage System</h6>
                </li>


                {{-- Dashboard --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('admin.index') ? 'active' : '' }}"
                        href="{{ route('admin.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="fa-solid fa-tv text-sm opacity-10 {{ Request::routeIs('admin.index') ? '' : 'text-primary' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>





                @if (Auth::guard('admin')->user()->roles == 'Admin' || Auth::guard('admin')->user()->roles == 'Owner')
                    {{-- COntact us --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('admin.contact.index') ? 'active' : '' }}"
                            href="{{ route('admin.contact.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                                <i
                                    class="fa-solid fa-message text-sm opacity-10 {{ Request::routeIs('admin.contact.index') ? '' : 'text-primary' }}"></i>
                            </div>
                            <span class="nav-link-text ms-1">Contact us</span>
                        </a>
                    </li>
                @endif
                @if (Auth::guard('admin')->user()->roles == 'Admin' || Auth::guard('admin')->user()->roles == 'Owner')
                    {{-- Appointment --}}
                    <li class="nav-item">
                        <a class="nav-link collapsed {{ Request::routeIs(['admin.appointment.*', 'admin.pending.*', 'admin.confirm.*']) ? 'active' : '' }}"
                            href="#appointment" data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="appointment">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i
                                    class="fa-solid fa-calendar-days text-sm opacity-10  {{ Request::routeIs(['admin.appointment.*', 'admin.pending.*', 'admin.confirm.*']) ? '' : 'text-primary' }}"></i>
                            </div>
                            <span class="nav-link-text">Appointment</span>
                        </a>
                        <div class="collapse mt-1 bg-primary rounded mx-2" id="appointment">
                            <ul class="nav nav-sm flex-column p-2">
                                <li
                                    class="nav-item  mb-1 {{ Request::routeIs('admin.appointment.index') ? 'nav-item-active' : '' }}">
                                    <a href="{{ route('admin.appointment.index') }}" class="nav-link text-white">Request
                                        Appointments</a>
                                </li>
                                <li
                                    class="nav-item mb-1 {{ Request::routeIs('admin.pending.index') ? 'nav-item-active' : '' }}">
                                    <a href="{{ route('admin.pending.index') }}" class="nav-link text-white">Pending
                                        Appointments</a>
                                </li>
                                <li
                                    class="nav-item mb-1 {{ Request::routeIs('admin.confirm.index') ? 'nav-item-active' : '' }}">
                                    <a href="{{ route('admin.confirm.index') }}" class="nav-link text-white">Confirm
                                        Appointments</a>
                                </li>
                                <li
                                    class="nav-item mb-1 {{ Request::routeIs('admin.cancel.index') ? 'nav-item-active' : '' }}">
                                    <a href="{{ route('admin.cancel.index') }}" class="nav-link text-white">Canceled
                                        Appointments</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                {{-- <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                    aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0" href="" target="_blank">
                    <img src="{{ asset('images/doc.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                    <span class="ms-1 font-weight-bold text-warning">Doctor's Dashboard</span>
                </a>
            </div> --}}


                {{-- RECORDS --}}
                <hr class="horizontal dark mt-1">
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Records</h6>
                </li>

                @if (Auth::guard('admin')->user()->roles == 'Doctor' || Auth::guard('admin')->user()->roles == 'Admin' || Auth::guard('admin')->user()->roles == 'Owner')
                    {{-- Client records Single --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('admin.owner.*') ? 'active' : '' }}"
                            href="{{ route('admin.owner.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                                <i
                                    class="fa-solid fa-file-invoice text-sm opacity-10  {{ Request::routeIs('admin.owner.*') ? '' : 'text-warning' }}"></i>
                            </div>
                            <span class="nav-link-text ms-1">Clients Records</span>
                        </a>
                    </li>
                @endif

                @if (Auth::guard('admin')->user()->roles == 'Admin' || Auth::guard('admin')->user()->roles == 'Owner')
                    {{-- Doctor records Single --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('admin.doctor.index') ? 'active' : '' }}"
                            href="{{ route('admin.doctor.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i
                                    class="fa-solid fa-user-doctor text-sm opacity-10  {{ Request::routeIs('admin.doctor.*') ? '' : 'text-warning' }}"></i>
                            </div>
                            <span class="nav-link-text ms-1">Doctors Records</span>
                        </a>
                    </li>
                @endif


                @if (Auth::guard('admin')->user()->roles == 'Owner')
                    {{-- INVENTORY --}}
                    <hr class="horizontal dark mt-1">
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">INVENTORY</h6>
                    </li>


                    {{-- Category Single --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('admin.category.index') ? 'active' : '' }}"
                            href="{{ route('admin.category.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                                <i
                                    class="fa-solid fa-boxes-packing text-sm opacity-10  {{ Request::routeIs('admin.category.index') ? '' : 'text-success' }}"></i>

                            </div>
                            <span class="nav-link-text ms-1">Category</span>
                        </a>
                    </li>

                    {{-- Daily Transaction --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('admin.daily.index') ? 'active' : '' }}"
                            href="{{ route('admin.daily.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                                <i
                                    class="fa-solid fa-money-bills text-sm opacity-10  {{ Request::routeIs('admin.daily.index') ? '' : 'text-success' }}"></i>

                            </div>
                            <span class="nav-link-text ms-1">Daily Ttransaction</span>
                        </a>
                    </li>

                    {{-- Products Single --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('admin.product.index') ? 'active' : '' }}"
                            href="{{ route('admin.product.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i
                                    class="fa-solid fa-boxes-stacked text-sm opacity-10 text-  {{ Request::routeIs('admin.product.index') ? '' : 'text-success' }}"></i>
                            </div>
                            <span class="nav-link-text ms-1">Products</span>
                        </a>
                    </li>


                    {{-- Sales Single --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('admin.sale.index') ? 'active' : '' }}"
                            href="{{ route('admin.sale.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i
                                    class="fa-solid fa-barcode text-sm opacity-10 {{ Request::routeIs('admin.sale.index') ? '' : 'text-success' }}"></i>
                            </div>
                            <span class="nav-link-text ms-1">Sales</span>
                        </a>
                    </li>
                @endif
                {{-- Homepage dropdown --}}




            </ul>
        </div>

    </aside>
@endsection
