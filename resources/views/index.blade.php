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

<body id="home" style="padding-bottom: 100px">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg py-3 position-relative">
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

    <main>
        <div class="container">

            {{-- HERO SECTION --}}
            <section class="hero d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0" id="hero">
                <div class="row align-items-center">
                    <div
                        class="col-lg-7 col-xxl-6 pe-xl-5 pe-xxl-0 text-md-center text-lg-start d-flex flex-column align-items-md-center align-items-lg-start">
                        <p class="subtitle" style="margin-bottom: 20px;">Jump into Fun, One Bounce at a Time</p>
                        <h1 class="headline" style="margin-bottom: 22px;">Reach for the Skies at <span class="light">
                                JumpZone</span>, The Ultimate
                            <span class="light">Trampoline Experience</span>
                        </h1>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 36px;">
                            <p class="paragraph">Welcome to JumpZone, the ultimate destination for trampoline
                                enthusiasts of
                                all ages. Step into a world where you can defy gravity and experience the exhilarating
                                sensation of soaring through the air. With our state-of-the-art trampolines, foam pits,
                                and
                                thrilling attractions, JumpZone offers a trampoline experience like no other.</p>
                            <p class="paragraph d-none d-md-inline-block">Get ready to bounce, jump, and laugh as you
                                explore our
                                expansive
                                trampoline area, filled with endless possibilities for fun and adventure.</p>
                        </div>
                        <div class="wrapper-button d-flex gap-2 align-items-center">
                            <a href="#" class="button-default">Explore Now</a>
                            <a href="#" class="button-reverse d-flex align-items-center gap-2">
                                Booking Now
                                <img src="{{ asset('assets/img/icon/button-arrow-icon.svg') }}" alt="Button Arrow Icon">
                            </a>
                        </div>
                    </div>
                    <div class="offset-xxl-1 col-5 ps-xxl-5 d-none d-lg-inline-block">
                        <img src="{{ asset('assets/img/banner/hero-banner.svg') }}" class="img-fluid w-100"
                            alt="Hero Banner">
                    </div>
                </div>
            </section>
            {{-- END HERO SECTION --}}


            {{-- ADVENTAGE SECTION --}}
            <section class="adventage section-gap" id="adventage">
                <div class="row align-items-end justify-content-between" style="margin-bottom: 56px">
                    <div class="col-lg-6">
                        <h2 class="title">Elevate Your Fun, Discover the <span class="light">Advantages of
                                JumpZone</span></h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">Discover the many benefits of JumpZone's trampoline wonderland. Our
                            trampolines are engineered to deliver maximum bounce, ensuring an exhilarating and
                            gravity-defying experience.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default">
                            <div class="card-icon d-flex justify-content-center align-items-center"
                                style="margin-bottom: 14px;">
                                <img src="{{ asset('assets/img/adventage/adventage-1.svg') }}" class="img-fluid"
                                    alt="Adventage Image">
                            </div>
                            <h6 style="margin-bottom: 4px;">Active Fun for All Ages</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">JumpZone offers an inclusive and
                                exhilarating experience for
                                jumpers of all ages.</p>
                            <button class="card-link d-flex align-items-center gap-2 p-0">
                                More Detail
                                <img src="{{ asset('assets/img/icon/link-arrow-icon.svg') }}" class="img-fluid"
                                    alt="Link Arrow Icon">
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default">
                            <div class="card-icon d-flex justify-content-center align-items-center"
                                style="margin-bottom: 14px;">
                                <img src="{{ asset('assets/img/adventage/adventage-2.svg') }}" class="img-fluid"
                                    alt="Adventage Image">
                            </div>
                            <h6 style="margin-bottom: 4px;">Safety First</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">We prioritize the safety of our
                                jumpers. Our trampolines are carefully maintained.</p>
                            <button class="card-link d-flex align-items-center gap-2 p-0">
                                More Detail
                                <img src="{{ asset('assets/img/icon/link-arrow-icon.svg') }}" class="img-fluid"
                                    alt="Link Arrow Icon">
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="card-default">
                            <div class="card-icon d-flex justify-content-center align-items-center"
                                style="margin-bottom: 14px;">
                                <img src="{{ asset('assets/img/adventage/adventage-3.svg') }}" class="img-fluid"
                                    alt="Adventage Image">
                            </div>
                            <h6 style="margin-bottom: 4px;">Variety of Attractions</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">We offer a wide range of
                                attractions to keep you entertained and engaged throughout your visit.</p>
                            <button class="card-link d-flex align-items-center gap-2 p-0">
                                More Detail
                                <img src="{{ asset('assets/img/icon/link-arrow-icon.svg') }}" class="img-fluid"
                                    alt="Link Arrow Icon">
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card-default">
                            <div class="card-icon d-flex justify-content-center align-items-center"
                                style="margin-bottom: 14px;">
                                <img src="{{ asset('assets/img/adventage/adventage-4.svg') }}" class="img-fluid"
                                    alt="Adventage Image">
                            </div>
                            <h6 style="margin-bottom: 4px;">Fitness and Fun Combined</h6>
                            <p class="paragraph-small" style="margin-bottom: 16px;">Jumping on trampolines isn't just
                                fun it's also a fantastic way to stay active and fit.</p>
                            <button class="card-link d-flex align-items-center gap-2 p-0">
                                More Detail
                                <img src="{{ asset('assets/img/icon/link-arrow-icon.svg') }}" class="img-fluid"
                                    alt="Link Arrow Icon">
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END ADVENTAGE SECTION --}}
        </div>
    </main>

    {{-- SCRIPT JS --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
