<header id="header" class="header fixed-top {{  (Request::routeIs('home.index')) ? '' : 'active' ; }}">

    <div class="container">

        <div class="row align-items-center justify-content-between">
            <a class="d-flex align-items-center" href="{{ route('home.index') }}">
                <img id= "logo" src="{{asset('images/petworks.png')}}" alt=""> <h2 class="mr-1 logo">   Veterinary Clinic</h2>
            </a>
            {{-- <a href="{{ asset('images/petworks.png') }}" class="logo mr-auto">  Petworks</a> --}}
            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
            <nav class="nav">
                <a href="{{ route('home.index') }}">Home</a>
                <a href="{{ route('appointment.index') }} ">Appointment</a>
                 <a href="{{ route('calendar.index') }}">Calendar</a>
            </nav>



        </div>

    </div>

</header>
