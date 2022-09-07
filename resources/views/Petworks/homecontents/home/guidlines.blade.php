<!DOCTYPE html>
<html lang="en">

<head>

    <title>Guidlines</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS File -->
    <link rel="stylesheet" href="{{asset('css/appointment_intro.css')}}">

</head>

<body>

    <div class="login">

        <h1 class="text-center mb-1">Welcome!</h1>
        <h6 class="text-center">Petworks Veterinary Clinic</h6>

        <hr>

        <form class="needs-validation">
            <!--   <div class="form-group was-validated">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div> -->

            <a class="btn btn-info text-white w-100 mb-2" href="{{ route('appointment.index') }}" type="submit" value="">Book Appointment</a>
          {{--   <a class="btn btn-info text-white w-100" href="{{  route('existing.index')  }}" type="submit" value="">Existing Client</a> --}}
            <hr>
        </form>

    </div>

</body>

</html>
