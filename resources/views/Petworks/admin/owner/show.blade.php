@extends('Petworks.admin.index')
@section('contents')
    {{-- SIDE BAR OF THE CLIENT AND PET --}}
    @livewire('owner.show', ['owner' => $owner, 'services' => $services])
    {{-- hi --}}
@endsection
