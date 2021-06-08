@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <section class="home-slider position-relative">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('images/salon/makeup.jpeg')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3 title-dark animated fadeInUpBig animation-delay-1">Descoperă stilistul potrivit pentru tine</h1>
                                        <p class="para-desc para-dark mx-auto animated fadeInUpBig animation-delay-3">Navighează, descoperă și compară serviciile disponibile în zona ta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('images/salon/62100458.jpeg')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3 title-dark animated fadeInUpBig animation-delay-1">Descoperă stilistul potrivit pentru tine</h1>
                                        <p class="para-desc para-dark mx-auto animated fadeInUpBig animation-delay-3">Navighează, descoperă și compară serviciile disponibile în zona ta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('images/salon/salon5.jpg')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3 title-dark animated fadeInUpBig animation-delay-1">Economisește timp</h1>
                                        <p class="para-desc para-dark mx-auto animated fadeInUpBig animation-delay-3">Descoperă un mod mai placut și rapid de a face o programare la salonul tău preferat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('images/salon/otto.jpeg')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3 title-dark animated fadeInUpBig animation-delay-1">Economisește timp</h1>
                                        <p class="para-desc para-dark mx-auto animated fadeInUpBig animation-delay-3">Descoperă un mod mai placut și rapid de a face o programare la salonul tău preferat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('images/salon/salon7.jpg')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3 title-dark animated fadeInUpBig animation-delay-1">Citește recenzii verificate</h1>
                                        <p class="para-desc para-dark mx-auto animated fadeInUpBig animation-delay-3">Alege dintre saloanele recomandate de cei care au fost deja acolo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('images/salon/IMG_8701-1080x675.jpeg')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3 title-dark animated fadeInUpBig animation-delay-1">Citește recenzii verificate</h1>
                                        <p class="para-desc para-dark mx-auto animated fadeInUpBig animation-delay-3c">Alege dintre saloanele recomandate de cei care au fost deja acolo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Rooms Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Saloane</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach($salons as $salon)
                    <div class="container mt-100 mt-60">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <img src="images/salon/salon6.jpg" class="img-fluid shadow rounded" alt="">
                            </div><!--end col-->

                            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="section-title ms-lg-5">
                                    <h4 class="title mb-4">{{$salon['name']}}</h4>
                                    <p class="text-muted">{{$salon['description']}}</p>
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-0">{{$salon['city']}}</li>
                                        <li class="mb-0">{{$salon['address']}}</li>
                                        <li class="list-inline-item">4.5 Stele <span class="text-muted">(380 Review-uri primite)</span></li>
                                    </ul>
                                    <a href="/login" class="mt-3 h6 text-primary">Crează o programare <i class="uil uil-angle-right-b"></i></a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Rooms End -->

    <!-- Price Start -->
    <section class="section" id="prices">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Prețuri</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="col mt-4 pt-2" id="accordions">
                <div class="component-wrapper rounded shadow">
                    <div class="p-4">
                        <div class="accordion mt-4 pt-2" id="buyingquestion">
                            <div class="accordion-item rounded">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                        Coafor
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse border-0 collapse" aria-labelledby="headingOne"
                                     data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        @for($i = 0; $i < 22; $i++)
                                            <div class="accordion-body text-muted bg-white">
                                                {{$services[$i]->name}}
                                                <div style="float: right">
                                                    {{$services[$i]->price}} RON
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                        Cosmetică
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#buyingquestion">
                                    @for($i = 22; $i < 32; $i++)
                                        <div class="accordion-body text-muted bg-white">
                                            {{$services[$i]->name}}
                                            <div style="float: right">
                                                {{$services[$i]->price}} RON
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Manichiură / Pedichiură
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                     data-bs-parent="#buyingquestion">
                                    @for($i = 32; $i < 42; $i++)
                                        <div class="accordion-body text-muted bg-white">
                                            {{$services[$i]->name}}
                                            <div style="float: right">
                                                {{$services[$i]->price}} RON
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Masaj
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                     data-bs-parent="#buyingquestion">
                                    @for($i = 42; $i <= 49; $i++)
                                        <div class="accordion-body text-muted bg-white">
                                            {{$services[$i]->name}}
                                            <div style="float: right">
                                                {{$services[$i]->price}} RON
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <!-- Accordions End -->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Price End -->

    <!-- Client Start -->
    <section class="section" style="background: url('images/salon/otto.jpeg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="tiny-single-item">
                        <div class="tiny-slider text-center client-testi">
                            <p class="text-light para-dark h6 fst-italic">" Cel mai ușor mod de a beneficia de serviciile dorite, după bunul plac, recomand cu încredere! "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Lucian Pop </h6>
                            <img src="images/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>

                        <div class="tiny-slider text-center client-testi">
                            <p class="text-light para-dark h6 fst-italic">" Am realizat o mulțime de programări, sunt foarte mulțumită!  "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Andreea Neag </h6>
                            <img src="images/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>

                        <div class="tiny-slider text-center client-testi">
                            <p class="text-light para-dark h6 fst-italic">" Mulțumesc fetelor de la salonul Prestige, am rămas o clientă fidelă. Mă bucur că am apelat la serviciile lor! "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Ioana Moldovan </h6>
                            <img src="images/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>

                        <div class="tiny-slider text-center client-testi">
                            <p class="text-light para-dark h6 fst-italic">"Nu cred ca există ceva mai frumos decât masajul, în materie de relaxare. Doar că aici masajul devine o experiență magnifică. Iar pentru celelalte servicii, profesionalism și seriozitate! "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Sebastian Șipos </h6>
                            <img src="images/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>

                        <div class="tiny-slider text-center client-testi">
                            <p class="text-light para-dark h6 fst-italic">"Cele mai bune servicii pentru bărbați! "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Christine Lang </h6>
                            <img src="images/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>

                        <div class="tiny-slider text-center client-testi">
                            <p class="text-light para-dark h6 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-light title-dark"> Daniel Matache </h6>
                            <img src="images/client/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        </div>
                    </div><!--end owl carousel-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- Client End -->
    </section>
    <!-- Client End -->

    <section class="section bg-light">
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                    <img src="images/salon/3.jpg" class="img-fluid rounded shadow-md" alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">Ce este AllAboutBeauty?</h4>
                        <p class="text-muted">AllAboutBeauty este o platforma online ce iti aduce aproape de tine cei mai buni stilisti, frizeri, barbieri si specialisti din industria hair & beauty. Descopera GRATUIT cele mai bune saloane si alege stilistul potrivit pentru tine.
                            Programeaza-te simplu si rapid in intervalul orar stabilit de tine.</p>
                    </div>

                    <div class="accordion mt-4 pt-2" id="accordionExample">
                        <div class="accordion-item rounded shadow">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    Căt costa o programare prin platforma AllAboutBeauty?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse border-0 collapse" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    Pentru orice programare stabilită cu ajutorul AllAboutBeauty nu ai nimic de plătit. Totul este gratuit.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                    Cum să fac o programare ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    Niciodată nu a fost mai simplu să-ți faci o programare la cel mai bun salon din zona ta.
                                    Accesează platforma AllAboutBeauty, selectează salonul, apoi tipul de serviciu disponibil din lista (tuns/vopsit/pensat etc.), angajatul, apoi selectezi data și ora în care iți dorești o programare.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Cu cât timp inainte voi primi notificare despre o programare?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    La finalizarea programării vei primi un mail de confirmare a acesteia.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                   Cum sa anulez o programare ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    Intră in contul tău si anulează oricand orice programare.
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

    <!-- Contact Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 p-0 ps-md-3 pe-md-3">
                    <div class="card map map-height-two rounded map-gray border-0">
                        <iframe src="https://www.google.com/maps/embed/v1/place?q=Baia+Mare&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" style="border:0" class="rounded" allowfullscreen></iframe>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="title-heading ms-lg-4">
                            <h4 class="mb-4">Contact</h4>
                            <div class="d-flex contact-detail align-items-center mt-3">
                                <div class="flex-1 content">
                                    <h6 class="title fw-bold mb-0">Email</h6>
                                    <a href="mailto:contact@example.com" class="text-primary">allaboutbeautymail@gmail.com</a>
                                </div>
                            </div>

                            <div class="d-flex contact-detail align-items-center mt-3">
                                <div class="flex-1 content">
                                    <h6 class="title fw-bold mb-0">Telefon</h6>
                                    <a href="tel:+152534-468-854" class="text-primary">+40 (744) 823 043</a>
                                </div>
                            </div>
                        </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- Contact End -->
    </section><!--end section-->
    <!-- News End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="#" class="logo-footer">
                        <img src="images/logo/logo.png" height="68" alt="">
                    </a>
                    <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end col-->

                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-light footer-head">Pentru clienți</h5>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="/login" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Autentificare</a></li>
                        <li><a href="/register" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Înregistrare</a></li>
                    </ul>
                </div><!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-light footer-head">Pentru profesioniști</h5>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="/login" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Autentificare</a></li>
                        <li><a href="/request" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Înregistrare salon</a></li>
                    </ul>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </footer><!--end footer-->
@endsection
