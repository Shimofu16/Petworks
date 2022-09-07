<header id="header" class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">
            <a class="d-flex align-items-center" href="{{ route('home.index') }}">
                <img id= "logo" src="{{asset('images/petworks.png')}}" alt=""> <h2 class="mr-1 logo">   Petworks</h2>
            </a>
            {{-- <a href="{{ asset('images/petworks.png') }}" class="logo mr-auto">  Petworks</a> --}}

            <nav class="nav">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="{{ route('guidlines.index') }} ">Appointment</a>
                <a href="{{ route('calendar.index') }} ">Calendar</a>
                <a href="#menu">Service</a>
                <a href="#gallery">Gallery</a>
                <a href="#contact">Contact</a>
             {{--    <a href="#blogs">blogs</a> --}}
            </nav>



        </div>

    </div>

</header>
