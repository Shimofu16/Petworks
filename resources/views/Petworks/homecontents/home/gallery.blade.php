@extends('Petworks.homecontents.mainContents')
@section('title')
    <span class="text">Gallery</span>
@endsection
@section('page-title')
    <li class="breadcrumb-item" aria-current="page">Gallery</li>
@endsection
@section('contents')
    <section class="py-3 c-mt-nv">
        <div class="container mb-4">
            @include('Petworks.homecontents.layouts.page-titles')
            <div class="card" data-aos="fade-up" data-aos-offset="0" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top">
                <div class="card-body">
                    <div class="row g-3">
                        @foreach ($galleries as $gallery)
                            <div class="col-sm-5 col-md-5 col-lg-4">
                                <a href="{{ route('gallery.show', ['id' => $gallery->id]) }}"
                                    class="text-decoration-none text-dark">
                                    <div class="card rounded-3 shadow-sm">
                                        <img class="card-img-top card-img-200" src="{{ asset($gallery->path) }}"
                                            alt="{{ $gallery->photo }}">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $gallery->title }}</h4>
                                            <small
                                                class="text-muted">{{ date('M d, Y', strtotime($gallery->date)) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
