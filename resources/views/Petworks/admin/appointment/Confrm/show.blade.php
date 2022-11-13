@extends('Petworks.admin.index')
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">

                @livewire('admin.appointments.confirm', ['appointment_id' => $id])

            </div>
        </div>
    </div>
@endsection
