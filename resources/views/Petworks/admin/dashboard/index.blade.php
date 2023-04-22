    @extends('Petworks.admin.index')
    @section('tab-title')
        Dashboard
    @endsection
    @section('contents')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <style>
            div.card.item :hover {
                background-color: #7ba0c5;
            }
        </style>

        <div class="row mt-3 mb-5">


            <h3 class="text-white">{{ Auth::guard('admin')->user()->roles }} Dashboard</h3>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <a href="{{ route('admin.owner.index') }}">
                    <div class="card item">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Client Record</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $recordCount }}
                                        </h5>
                                        <a class="mb-0 text-decoration-underline" href="#">
                                            <span class="text-success text-sm font-weight-bolder"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="fa-solid fa-clipboard-user text-lg opacity-10"></i>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            @if (Auth::guard('admin')->user()->roles == 'Secretary' || Auth::guard('admin')->user()->roles == 'Owner')
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    {{--      <h3 class="text-white">Contact Us</h3> --}}
                    <a href="{{ route('admin.contact.index') }}">
                        <div class="card item">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Contact us</p>
                                            <h5 class="font-weight-bolder">
                                                {{ $contactCount }}
                                            </h5>
                                            <a class="mb-0 text-decoration-underline" href="#">
                                                <span class="text-success text-sm font-weight-bolder"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                            <i class="fa-solid fa-message text-lg opacity-10"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        </div>





        @if (Auth::guard('admin')->user()->roles == 'Secretary' || Auth::guard('admin')->user()->roles == 'Owner')
            <div class="row">
                <h3 style="text-color:#7ba0c5;">Appointments</h3>

                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <a href="{{ route('admin.appointment.index') }}">
                        <div class="card item">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Request</p>
                                            <h5 class="font-weight-bolder">
                                                {{ $requestCount }}
                                            </h5>
                                            <a class="mb-0 text-decoration-underline" href="#">
                                                <span class="text-success text-sm font-weight-bolder"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                            <i class="fa-solid fa-person-circle-exclamation text-lg opacity-10"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <a href="{{ route('admin.pending.index') }}">
                        <div class="card item">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Pending</p>
                                            <h5 class="font-weight-bolder">
                                                {{ $pendingCount }}
                                            </h5>
                                            <a class="mb-0 text-decoration-underline" href="#">
                                                <span class="text-success text-sm font-weight-bolder"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                            <i class="fa-solid fa-person-circle-question text-lg opacity-10"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <a href="{{ route('admin.confirm.index') }}">
                        <div class="card item">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Confirm</p>
                                            <h5 class="font-weight-bolder">
                                                {{ $confirmCount }}
                                            </h5>
                                            <a class="mb-0 text-decoration-underline" href="#">
                                                <span class="text-success text-sm font-weight-bolder"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                            <i class="fa-solid fa-person-circle-check text-lg opacity-10"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <a href="{{ route('admin.cancel.index') }}">
                        <div class="card item">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Cancelled</p>
                                            <h5 class="font-weight-bolder">
                                                {{ $cancelledCount }}
                                            </h5>
                                            <a class="mb-0 text-decoration-underline" href="#">
                                                <span class="text-success text-sm font-weight-bolder"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                            <i class="fa-solid fa-person-circle-xmark text-lg opacity-10"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endif

        <div class="border mt-4"></div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Latest Client Records</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead {{-- class="table-warning text-black" --}}>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Address
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Number
                                        </th>

                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($owners as $owner)
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column px-2 py-1">
                                                    <h5 class="mb-0 text-sm">{{ $owner->name }}</h5>
                                                    <p class="text-sm text-secondary mb-0">
                                                        {{ $owner->email }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                    <h6 class="mb-0 text-sm">{{ $owner->address }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                    <h6 class="mb-0 text-sm">{{ $owner->number }}</h6>
                                                </div>
                                            </td>





                                            {{-- BUTTONS --}}
                                            <td>
                                                <div class="d-flex justify-content-center px-2 py-1">
                                                    <a class="btn btn-link text-info px-3 mb-0"
                                                        href="{{ route('admin.owner.show', $owner->id) }} ">
                                                        <i class="fa-solid fa-eye text-info me-2"
                                                            aria-hidden="true"></i>show</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="8">No Records</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between  align-items-center pb-0">
                        <h6>Reminders for this week  ({{ date('F',strtotime('this month')) }}, {{ date('d',strtotime('date today')) }})</h6>

                        <div class="d-flex justify-content-end ">
                            <a class="btn btn-danger mb-0" href="{{ route('admin.reminder.index') }}">
                                <span class="d-flex align-items-center"><i class="fa-solid fa-bell"></i>&#160;
                                    Remind</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead {{-- class="table-warning text-black" --}}>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{-- get the day of this --}}
                                            Monday ({{ date('d',strtotime('monday this week')) }})
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tuesday ({{ date('d',strtotime('tuesday this week')) }})
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Wednesday ({{ date('d',strtotime('wednesday this week')) }})
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Thursday ({{ date('d',strtotime('thursday this week')) }})
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Friday ({{ date('d',strtotime('friday this week')) }})
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Saturday ({{ date('d',strtotime('saturday this week')) }})
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Sunday ({{ date('d',strtotime('sunday this week')) }})
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($appointments as $appointment)
                                        <tr>
                                            <td>
                                                @if (date('N', strtotime($appointment->next_visit)) == 1)
                                                    <div class="d-flex flex-column px-2 py-1">
                                                        <h5 class="mb-0 text-sm">{{ $appointment->owner->name }}
                                                            ({{ $appointment->service->service }})
                                                        </h5>
                                                        <p class="text-sm text-secondary mb-0">
                                                            at
                                                            {{ $appointment->time }}
                                                        </p>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                @if (date('N', strtotime($appointment->next_visit)) == 2)
                                                    <div class="d-flex flex-column px-2 py-1">
                                                        <h5 class="mb-0 text-sm">{{ $appointment->owner->name }}
                                                            ({{ $appointment->service->service }})</h5>
                                                        <p class="text-sm text-secondary mb-0">
                                                            at
                                                            {{ $appointment->time }}
                                                        </p>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                @if (date('N', strtotime($appointment->next_visit)) == 3)
                                                    <div class="d-flex flex-column px-2 py-1">
                                                        <h5 class="mb-0 text-sm">{{ $appointment->owner->name }}
                                                            ({{ $appointment->service->service }})</h5>
                                                        <p class="text-sm text-secondary mb-0">
                                                            at
                                                            {{ $appointment->time }}
                                                        </p>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                @if (date('N', strtotime($appointment->next_visit)) == 4)
                                                    <div class="d-flex flex-column px-2 py-1">
                                                        <h5 class="mb-0 text-sm">{{ $appointment->owner->name }}
                                                            ({{ $appointment->service->service }})</h5>
                                                        <p class="text-sm text-secondary mb-0">
                                                            at
                                                            {{ $appointment->time }}
                                                        </p>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                @if (date('N', strtotime($appointment->next_visit)) == 5)
                                                    <div class="d-flex flex-column px-2 py-1">
                                                        <h5 class="mb-0 text-sm">{{ $appointment->owner->name }}
                                                            ({{ $appointment->service->service }})</h5>
                                                        <p class="text-sm text-secondary mb-0">
                                                            at
                                                            {{ $appointment->time }}
                                                        </p>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                @if (date('N', strtotime($appointment->next_visit)) == 6)
                                                    <div class="d-flex flex-column px-2 py-1">
                                                        <h5 class="mb-0 text-sm">{{ $appointment->owner->name }}
                                                            ({{ $appointment->service->service }})</h5>
                                                        <p class="text-sm text-secondary mb-0">
                                                            at
                                                            {{ $appointment->time }}
                                                        </p>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                @if (date('N', strtotime($appointment->next_visit)) == 7)
                                                    <div class="d-flex flex-column px-2 py-1">
                                                        <h5 class="mb-0 text-sm">{{ $appointment->owner->name }}
                                                            ({{ $appointment->service->service }})</h5>
                                                        <p class="text-sm text-secondary mb-0">
                                                            at
                                                            {{ $appointment->time }}
                                                        </p>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="8">No Records</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
