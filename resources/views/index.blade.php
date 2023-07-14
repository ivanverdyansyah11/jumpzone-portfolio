<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JumpZone | Trampoline Zone</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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
                        class="col-lg-7 col-xxl-6 pe-lg-5 pe-xxl-0 text-md-center text-lg-start d-flex flex-column align-items-md-center align-items-lg-start">
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
                            <p class="paragraph">Get ready to bounce, jump, and laugh as you
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
                <div class="row align-items-end justify-content-between row-gap">
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


            {{-- ZONE SECTION --}}
            <section class="zone section-gap" id="zone">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6">
                        <h2 class="title">Jump into the <span class="light">Ultimate Trampoline Adventure</span> at
                            JumpZone</h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">The ultimate destination for trampoline enthusiasts. Our Trampoline Zone
                            is a thrilling playground where gravity takes a backseat and excitement takes center stage.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex flex-column mb-4 mb-md-0">
                        <div class="wrapper-image rounded" style="margin-bottom: 16px;">
                            <img src="{{ asset('assets/img/zone/zone-1.svg') }}" class="img-fluid w-100"
                                alt="Zone Image">
                        </div>
                        <h6 class="zone-title">Open Bounce Zone</h6>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex flex-column">
                        <div class="wrapper-image rounded" style="margin-bottom: 16px;">
                            <img src="{{ asset('assets/img/zone/zone-2.svg') }}" class="img-fluid w-100"
                                alt="Zone Image">
                        </div>
                        <h6 class="zone-title active">Foam Pit Zone</h6>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="card-default d-flex align-items-end" style="height: 100%">
                            <div class="wrapper">
                                <h5 style="margin-bottom: 6px">Foam Pit Zone</h5>
                                <p class="paragraph-small" style="margin-bottom: 16px">Dive into a sea of soft foam
                                    cubes in the Foam Pit Zone.
                                    Jump,
                                    flip, and experience the sensation of weightlessness as you launch yourself into the
                                    air
                                    and land safely in the foam-filled pit. It's an exhilarating and cushioned landing
                                    that
                                    adds an extra element of excitement to your trampoline experience.</p>
                                <button class="card-link d-flex align-items-center gap-2 p-0">
                                    More Detail
                                    <img src="{{ asset('assets/img/icon/link-arrow-icon.svg') }}" class="img-fluid"
                                        alt="Link Arrow Icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-6 mt-4 mt-lg-0 order-last order-lg-1">
                        <div class="card-default d-flex align-items-end" style="height: 100%">
                            <div class="wrapper">
                                <h5 style="margin-bottom: 6px">Dodgeball Arena</h5>
                                <p class="paragraph-small" style="margin-bottom: 16px">Get ready to unleash your
                                    competitive side in the Dodgeball Arena. Gather your friends, form teams, and engage
                                    in epic dodgeball battles on the trampolines. Jump, dodge, and throw with precision
                                    as you enjoy the fast-paced and high-flying action of trampoline dodgeball.</p>
                                <button class="card-link d-flex align-items-center gap-2 p-0">
                                    More Detail
                                    <img src="{{ asset('assets/img/icon/link-arrow-icon.svg') }}" class="img-fluid"
                                        alt="Link Arrow Icon">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex flex-column order-lg-2 mb-4 mb-md-0">
                        <div class="wrapper-image rounded" style="margin-bottom: 16px;">
                            <img src="{{ asset('assets/img/zone/zone-3.svg') }}" class="img-fluid w-100"
                                alt="Zone Image">
                        </div>
                        <h6 class="zone-title active">Dodgeball Arena</h6>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex flex-column order-lg-3">
                        <div class="wrapper-image rounded" style="margin-bottom: 16px;">
                            <img src="{{ asset('assets/img/zone/zone-4.svg') }}" class="img-fluid w-100"
                                alt="Zone Image">
                        </div>
                        <h6 class="zone-title">Slam Dunk Zone</h6>
                    </div>
                </div>
            </section>
            {{-- ZONE SECTION --}}


            {{-- ABOUT SECTION --}}
            <section class="zone section-gap" id="zone">
                <div class="row align-items-center justify-content-between row-gap">
                    <div class="col-5 ps-xxl-5 d-none d-lg-inline-block">
                        <img src="{{ asset('assets/img/banner/about-banner.svg') }}" class="img-fluid w-100"
                            alt="About Banner">
                    </div>

                    <div class="offset-xxl-1 col-lg-7 col-xxl-6 ps-lg-5 ps-xxl-0">
                        <h2 class="title" style="margin-bottom: 16px;">Discover the <span class="light">Ultimate
                                Trampoline Experience</span> at
                            JumpZone</h2>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 36px;">
                            <p class="paragraph">The premier destination for thrilling trampoline adventures. At
                                JumpZone, we believe in creating an environment where fun knows no limits and
                                imaginations soar. With our state-of-the-art trampoline area, dedicated staff, and
                                commitment to safety, we provide an unparalleled experience that will leave you smiling,
                                laughing, and craving for more.</p>
                            <p class="paragraph d-none d-md-inline-block">Join us at JumpZone and let us take you on a
                                gravity-defying journey filled with excitement, energy, and unforgettable memories.</p>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h3 class="fact-value">24+</h3>
                                <p class="fact-caption">Total Lane Available</p>
                            </div>
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h3 class="fact-value">138+</h3>
                                <p class="fact-caption">Total Bowling Ball</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h3 class="fact-value">06+</h3>
                                <p class="fact-caption">Total Branch Places</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h3 class="fact-value">562+</h3>
                                <p class="fact-caption">Satisfied customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END ABOUT SECTION --}}


            {{-- GUIDELINE SECTION --}}
            <section class="guideline section-gap" id="guideline">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6">
                        <h2 class="title"><span class="light">Safety First, Fun Always</span>, Our Commitment at
                            JumpZone</h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">Our Safety Guidelines are designed to create a secure environment where
                            jumpers of all ages can enjoy the excitement of our trampoline area with confidence.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card-default d-flex flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">1</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">Age and Height Restrictions</h6>
                                <p class="paragraph-small">Ensure that jumpers meet the
                                    minimum age and height requirements to participate in the trampoline activities.
                                    This
                                    helps ensure their safety and reduces the risk of accidents or injuries.</p>
                            </div>
                        </div>

                        <div
                            class="card-default d-flex flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4 d-md-none mt-4">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">2</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">Proper Attire</h6>
                                <p class="paragraph-small">Encourage jumpers to wear comfortable clothing that allows
                                    for ease of movement. Non-slip socks should be worn to provide traction on the
                                    trampoline surface and minimize the risk of slipping.</p>
                            </div>
                        </div>

                        <div
                            class="card-default d-flex flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4 d-lg-none mt-4">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">3</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">One Jumper at a Time</h6>
                                <p class="paragraph-small">Emphasize the importance of one person jumping on a
                                    trampoline bed at a time to avoid collisions or accidents. Jumpers should wait their
                                    turn and not overcrowd the trampoline area.</p>
                            </div>
                        </div>

                        <div
                            class="card-default d-flex mt-4 flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4 d-flex d-md-none d-lg-flex">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">4</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">No Flips or Dangerous Tricks</h6>
                                <p class="paragraph-small">Prohibit flips, somersaults, or any other dangerous tricks
                                    that could lead to injury. Encourage jumpers to engage in safe and controlled
                                    movements, such as bouncing or jumping in place.</p>
                            </div>
                        </div>

                        <div
                            class="card-default d-flex mt-4 flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4 d-lg-none mt-4">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">5</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">Supervision for Children</h6>
                                <p class="paragraph-small">Children should be supervised by a responsible adult at all
                                    times to ensure their safety. Parents or guardians should actively monitor their
                                    children's activities on the trampolines and enforce the safety guidelines.</p>
                            </div>
                        </div>

                        <div
                            class="card-default d-flex mt-4 flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4 d-md-none">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">6</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">Follow Staff Instructions</h6>
                                <p class="paragraph-small">Instruct jumpers to listen to and follow the instructions
                                    provided by the staff members. Staff members are trained to enforce safety rules and
                                    guidelines and can provide assistance or address any safety concerns.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-4 d-none d-md-inline-block">
                        <div class="card-default d-flex flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">2</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">Proper Attire</h6>
                                <p class="paragraph-small">Encourage jumpers to wear comfortable clothing that allows
                                    for ease of movement. Non-slip socks should be worn to provide traction on the
                                    trampoline surface and minimize the risk of slipping.</p>
                            </div>
                        </div>

                        <div
                            class="card-default d-flex mt-4 flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4 d-lg-none">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">4</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">No Flips or Dangerous Tricks</h6>
                                <p class="paragraph-small">Prohibit flips, somersaults, or any other dangerous tricks
                                    that could lead to injury. Encourage jumpers to engage in safe and controlled
                                    movements, such as bouncing or jumping in place.</p>
                            </div>
                        </div>

                        <div
                            class="card-default d-flex mt-4 flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4 d-none d-lg-flex">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">5</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">Supervision for Children</h6>
                                <p class="paragraph-small">Children should be supervised by a responsible adult at all
                                    times to ensure their safety. Parents or guardians should actively monitor their
                                    children's activities on the trampolines and enforce the safety guidelines.</p>
                            </div>
                        </div>

                        <div
                            class="card-default d-flex mt-4 flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4 d-lg-none">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">6</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">Follow Staff Instructions</h6>
                                <p class="paragraph-small">Instruct jumpers to listen to and follow the instructions
                                    provided by the staff members. Staff members are trained to enforce safety rules and
                                    guidelines and can provide assistance or address any safety concerns.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-4 d-none d-lg-inline-block">
                        <div class="card-default d-flex flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">3</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">One Jumper at a Time</h6>
                                <p class="paragraph-small">Emphasize the importance of one person jumping on a
                                    trampoline bed at a time to avoid collisions or accidents. Jumpers should wait their
                                    turn and not overcrowd the trampoline area.</p>
                            </div>
                        </div>

                        <div class="card-default d-flex mt-4 flex-lg-column flex-xl-row gap-4 gap-lg-3 gap-xl-4">
                            <div class="card-icon d-flex justify-content-center align-items-center">
                                <h4 class="guide-number">6</h4>
                            </div>
                            <div class="wrapper">
                                <h6 style="margin-bottom: 4px;">Follow Staff Instructions</h6>
                                <p class="paragraph-small">Instruct jumpers to listen to and follow the instructions
                                    provided by the staff members. Staff members are trained to enforce safety rules and
                                    guidelines and can provide assistance or address any safety concerns.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END GUIDELINE SECTION --}}


            {{-- GALLERY SECTION --}}
            <section class="gallery section-gap" id="gallery">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6">
                        <h2 class="title">JumpZone in Action, <span class="light">Explore the
                                Excitement in</span> Our
                            Gallery</h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">Get a front-row seat to the excitement and exhilaration as you browse
                            through a collection of action-packed photos capturing the essence of our trampoline area.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8 col-lg-6 d-none d-md-inline-block">
                        <div class="row">
                            <div class="col-6">
                                <div class="wrapper-image rounded" style="height: max-content;">
                                    <img src="{{ asset('assets/img/gallery/gallery-1.svg') }}"
                                        class="image-1 img-fluid w-100" alt="Gallery Image">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="wrapper-image rounded">
                                    <img src="{{ asset('assets/img/gallery/gallery-2.svg') }}"
                                        class="image-2 img-fluid w-100" alt="Gallery Image">
                                </div>
                                <div class="wrapper-image rounded mt-4">
                                    <img src="{{ asset('assets/img/gallery/gallery-5.svg') }}"
                                        class="image-5 img-fluid w-100" alt="Gallery Image">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="wrapper-image rounded mt-4">
                                    <img src="{{ asset('assets/img/gallery/gallery-8.svg') }}"
                                        class="image-8 img-fluid w-100" alt="Gallery Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="wrapper-image rounded">
                            <img src="{{ asset('assets/img/gallery/gallery-3.svg') }}"
                                class="image-3 img-fluid w-100" alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4">
                            <img src="{{ asset('assets/img/gallery/gallery-6.svg') }}"
                                class="image-6 img-fluid w-100" alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4">
                            <img src="{{ asset('assets/img/gallery/gallery-9.svg') }}"
                                class="image-9 img-fluid w-100" alt="Gallery Image">
                        </div>
                    </div>
                    <div class="col-3 d-none d-lg-inline-block">
                        <div class="wrapper-image rounded">
                            <img src="{{ asset('assets/img/gallery/gallery-4.svg') }}"
                                class="image-4 img-fluid w-100" alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4">
                            <img src="{{ asset('assets/img/gallery/gallery-7.svg') }}"
                                class="image-7 img-fluid w-100" alt="Gallery Image">
                        </div>
                        <div class="wrapper-image rounded mt-4">
                            <img src="{{ asset('assets/img/gallery/gallery-10.svg') }}"
                                class="image-10 img-fluid w-100" alt="Gallery Image">
                        </div>
                    </div>
                </div>
            </section>
            {{-- END GALLERY SECTION --}}


            {{-- PRICING SECTION --}}
            <section class="pricing section-gap" id="pricing">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6">
                        <h2 class="title">Pricing Made Easy, <span class="light">Experience the Value</span> at
                            JumpZone</h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph">JumpZone offers flexible and affordable pricing options designed to suit
                            every jumper's needs. Our competitive pricing ensures that the joy of bouncing and
                            experiencing our trampoline area is accessible to all.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card-default">
                            <h6 style="margin-bottom: 9px;">Jumpstart Adventure</h6>
                            <h4 class="pricing-price" style="margin-bottom: 13px;">$19.99/ per person</h4>
                            <p class="paragraph-small" style="margin-bottom: 26px;">Kick-start your jumping adventure
                                with our Jumpstart package. This package grants you access to the trampoline area for
                                one session, allowing you to bounce, and flip.</p>
                            <div class="wrapper-benefit d-flex flex-column gap-3" style="margin-bottom: 32px;">
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Full access to all trampoline zones</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Safety grip socks included</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Perfect for first-time visitors</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Affordable option for a memorable jumping</p>
                                </div>
                            </div>
                            <a href="" class="button-pricing">Buy Package</a>
                        </div>

                        <div class="card-default mt-4 d-none d-md-inline-block d-lg-none">
                            <h6 style="margin-bottom: 9px;">JumpZone Party Package</h6>
                            <h4 class="pricing-price" style="margin-bottom: 13px;">$199.99 for up to 10 guests</h4>
                            <p class="paragraph-small" style="margin-bottom: 26px;">Make your celebration
                                extraordinary with our JumpZone Party Package. This package is designed for groups and
                                includes a private party room, dedicated party host.</p>
                            <div class="wrapper-benefit d-flex flex-column gap-3" style="margin-bottom: 32px;">
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Private party room for two hours</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Trampoline access for all guests</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Party decorations, plates, and utensils</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Option to add food and beverage packages</p>
                                </div>
                            </div>
                            <a href="" class="button-pricing">Buy Package</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-4 mt-md-0">
                        <div class="card-default">
                            <h6 style="margin-bottom: 9px;">Unlimited Fun Pass</h6>
                            <h4 class="pricing-price" style="margin-bottom: 13px;">$39.99/ per Month</h4>
                            <p class="paragraph-small" style="margin-bottom: 26px;">Take your bouncing experience to
                                the next level with our Unlimited Fun Pass. Enjoy unlimited access to the trampoline
                                area for an entire month, giving you the freedom to jump whenever you want.</p>
                            <div class="wrapper-benefit d-flex flex-column gap-3" style="margin-bottom: 32px;">
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Unlimited visits for a full month</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Exclusive discounts on additional attractions</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Free guest pass to bring a friend along</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Great value getting enough trampoline fun</p>
                                </div>
                            </div>
                            <a href="" class="button-pricing">Buy Package</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 d-inline-block d-md-none d-lg-inline-block">
                        <div class="card-default">
                            <h6 style="margin-bottom: 9px;">JumpZone Party Package</h6>
                            <h4 class="pricing-price" style="margin-bottom: 13px;">$199.99 for up to 10 guests</h4>
                            <p class="paragraph-small" style="margin-bottom: 26px;">Make your celebration
                                extraordinary with our JumpZone Party Package. This package is designed for groups and
                                includes a private party room, dedicated party host.</p>
                            <div class="wrapper-benefit d-flex flex-column gap-3" style="margin-bottom: 32px;">
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Private party room for two hours</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Trampoline access for all guests</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Party decorations, plates, and utensils</p>
                                </div>
                                <div class="benefit-item d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}" class="img-fluid"
                                        alt="Checklist Icon" width="21">
                                    <p class="paragraph-small">Option to add food and beverage packages</p>
                                </div>
                            </div>
                            <a href="" class="button-pricing">Buy Package</a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END PRICING SECTION --}}


            {{-- TESTIMONI SECTION --}}
            <section class="testimoni section-gap" id="testimoni">
                <div class="row align-items-center justify-content-between row-gap">
                    <div class="col-lg-7 col-xxl-6 pe-lg-5 pe-xxl-0">
                        <h2 class="title" style="margin-bottom: 16px;">JumpZone Delights, <span class="light">Hear
                                What Our Jumpers</span> Have
                            to Say</h2>
                        <p class="paragraph" style="margin-bottom: 36px">Discover the real experiences and heartfelt
                            stories of our visitors at
                            JumpZone through our Testimonial section. Dive into a world of bouncing joy as you read the
                            accounts of jumpers who have experienced the excitement and exhilaration firsthand.</p>

                        <div class="wrapper position-relative">
                            <div class="swiper mySwiper position-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-default">
                                            <div class="testimoni-profile d-flex align-items-center gap-3"
                                                style="margin-bottom: 14px;">
                                                <div class="wrapper-profile">
                                                    <img src="{{ asset('assets/img/testimoni/testimoni-1.svg') }}"
                                                        class="img-fluid" alt="Testimoni Profile Image"
                                                        style="border-radius: 2px;">
                                                </div>
                                                <div class="wrapper">
                                                    <h6 class="profile-name" style="margin-bottom: 2px;">Sarah
                                                        Thompson
                                                    </h6>
                                                    <p class="profile-position">Parent</p>
                                                </div>
                                            </div>
                                            <p class="paragraph-small">“JumpZone provided an incredible trampoline
                                                experience for my
                                                family. We had a blast bouncing together and creating unforgettable
                                                memories.”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-default">
                                            <div class="testimoni-profile d-flex align-items-center gap-3"
                                                style="margin-bottom: 14px;">
                                                <div class="wrapper-profile">
                                                    <img src="{{ asset('assets/img/testimoni/testimoni-2.svg') }}"
                                                        class="img-fluid" alt="Testimoni Profile Image"
                                                        style="border-radius: 2px;">
                                                </div>
                                                <div class="wrapper">
                                                    <h6 class="profile-name" style="margin-bottom: 2px;">David Johnson
                                                    </h6>
                                                    <p class="profile-position">Adventure Enthusiast</p>
                                                </div>
                                            </div>
                                            <p class="paragraph-small">“As a regular visitor to JumpZone, I can
                                                confidently say that it's the ultimate trampoline paradise. The staff
                                                are friendly, the facilities are top-notch.”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-default">
                                            <div class="testimoni-profile d-flex align-items-center gap-3"
                                                style="margin-bottom: 14px;">
                                                <div class="wrapper-profile">
                                                    <img src="{{ asset('assets/img/testimoni/testimoni-1.svg') }}"
                                                        class="img-fluid" alt="Testimoni Profile Image"
                                                        style="border-radius: 2px;">
                                                </div>
                                                <div class="wrapper">
                                                    <h6 class="profile-name" style="margin-bottom: 2px;">Sarah
                                                        Thompson
                                                    </h6>
                                                    <p class="profile-position">Parent</p>
                                                </div>
                                            </div>
                                            <p class="paragraph-small">“JumpZone provided an incredible trampoline
                                                experience for my
                                                family. We had a blast bouncing together and creating unforgettable
                                                memories.”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-default">
                                            <div class="testimoni-profile d-flex align-items-center gap-3"
                                                style="margin-bottom: 14px;">
                                                <div class="wrapper-profile">
                                                    <img src="{{ asset('assets/img/testimoni/testimoni-2.svg') }}"
                                                        class="img-fluid" alt="Testimoni Profile Image"
                                                        style="border-radius: 2px;">
                                                </div>
                                                <div class="wrapper">
                                                    <h6 class="profile-name" style="margin-bottom: 2px;">David Johnson
                                                    </h6>
                                                    <p class="profile-position">Adventure Enthusiast</p>
                                                </div>
                                            </div>
                                            <p class="paragraph-small">“As a regular visitor to JumpZone, I can
                                                confidently say that it's the ultimate trampoline paradise. The staff
                                                are friendly, the facilities are top-notch.”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination position-absolute"></div>
                        </div>

                    </div>

                    <div class="offset-xxl-1 col-5 d-none d-lg-inline-block">
                        <img src="{{ asset('assets/img/banner/testimoni-banner.svg') }}" class="img-fluid w-100"
                            alt="Testimoni Banner">
                    </div>
                </div>
            </section>
            {{-- END ABOUT SECTION --}}

        </div>
    </main>

    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>
