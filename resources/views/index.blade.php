<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JumpZone | Trampoline Zone</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body id="home">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#home">
                <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" alt="Logo Brand" width="175">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link py-2 py-lg-0 px-lg-3 active" href="">Home</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">About Us</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">Pricing</a>
                </div>
            </div>
            <a href="#" class="button-reverse-small d-none d-lg-inline-block">Contact Us</a>
        </div>
    </nav>
    {{-- END NAVBAR --}}

    <div class="container">
    </div>

    {{-- SCRIPT JS --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
