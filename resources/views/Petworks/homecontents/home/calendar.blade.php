@extends('Petworks.homecontents.mainContents')
@section('title')
    <span class="text">Calendar</span>
@endsection
@section('page-title')
    <li class="breadcrumb-item" aria-current="page">Calendar</li>
@endsection
@section('contents')
<section class="py-3 c-mt-nv" style="margin-top: 100px;">
    <div class="container mb-4">
        @include('Petworks.homecontents.layouts.page-titles')
        <div class="card" data-aos="fade-up" data-aos-offset="0" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top">
            <div class="card-body">
                <div class="card mb-4 border-0">
                    <div class="card-header border-0 bg-transparent d-flex justify-content-between  align-items-center py-3">
                        <h3>Appointment for this week ({{ date('F',strtotime('this month')) }} {{ date('d',strtotime('today')) }})</h3>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead {{-- class="table-warning text-black" --}}>
                                    <tr class="py-3">
                                        <th class="text-uppercase h5 text-secondary font-weight-bolder opacity-7">
                                            {{-- get the day of this --}}
                                            Monday ({{ date('d',strtotime('monday this week')) }})
                                        </th>
                                        <th class="text-uppercase h5 text-secondary font-weight-bolder opacity-7">
                                            Tuesday ({{ date('d',strtotime('tuesday this week')) }})
                                        </th>
                                        <th class="text-uppercase h5 text-secondary font-weight-bolder opacity-7">
                                            Wednesday ({{ date('d',strtotime('wednesday this week')) }})
                                        </th>
                                        <th class="text-uppercase h5 text-secondary font-weight-bolder opacity-7">
                                            Thursday ({{ date('d',strtotime('thursday this week')) }})
                                        </th>
                                        <th class="text-uppercase h5 text-secondary font-weight-bolder opacity-7">
                                            Friday ({{ date('d',strtotime('friday this week')) }})
                                        </th>
                                        <th class="text-uppercase h5 text-secondary font-weight-bolder opacity-7">
                                            Saturday ({{ date('d',strtotime('saturday this week')) }})
                                        </th>
                                        <th class="text-uppercase h5 text-secondary font-weight-bolder opacity-7">
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
    </div>
</section>
@endsection
