@extends('layouts.index')

@section('content')

<div class="container">
    <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
            <div class="col-md-6 py-5 wow fadeInLeft">
                <h1 class="mb-4">Business TV</h1>
                <p class="text-lg text-grey mb-5">inspirer, informer et soutenir les entrepreneurs et les aspirants entrepreneurs du Bénin et d'Afrique</p>
                <a href="#" class="btn btn-primary btn-split" data-toggle="modal" data-target="#videoModal">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
                <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                    <div class="modal-dialog  " role="document">
                        <div class="modal-content">
                            <div class="modal-body" style="border: none;">
                                <!-- Assurez-vous que le chemin de votre vidéo est correct -->
                                <video controls width="100%">
                                    <source src="/assets/video/PUB.mp4" type="video/mp4">
                                    Votre navigateur ne prend pas en charge la lecture de la vidéo.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 py-5 wow zoomIn">
                <div class="img-fluid text-center">
                    <img src="/assets/img/12.png" width="370px" height="300px" alt="">
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->

    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card-service wow fadeInUp">
                    <div class="header">
                        <img src="/assets/img/services/service-1.svg" alt="">
                    </div>
                    <div class="body">
                        <h5 class="text-secondary">SEO Consultancy</h5>
                        <p>We help you define your SEO objective & develop a realistic strategy with you</p>
                        <a href="service.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-service wow fadeInUp">
                    <div class="header">
                        <img src="/assets/img/services/service-2.svg" alt="">
                    </div>
                    <div class="body">
                        <h5 class="text-secondary">Content Marketing</h5>
                        <p>We help you define your SEO objective & develop a realistic strategy with you</p>
                        <a href="service.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-service wow fadeInUp">
                    <div class="header">
                        <img src="/assets/img/services/service-3.svg" alt="">
                    </div>
                    <div class="body">
                        <h5 class="text-secondary">Keyword Research</h5>
                        <p>We help you define your SEO objective & develop a realistic strategy with you</p>
                        <a href="service.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

<div class="page-section" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <span class="subhead">About us</span>
                <h2 class="title-section">The number #1 SEO Service Company</h2>
                <div class="divider"></div>

                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                <a href="about.html" class="btn btn-primary mt-3">Read More</a>
            </div>
            <div class="col-lg-6 py-3 wow fadeInRight">
                <div class="img-fluid py-3 text-center">
                    <img src="/assets/img/11.png" alt="" width="370px">
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->




<!-- Banner info -->
<div class="page-section banner-info mb-5">
    <div class="wrap bg-image" style="background-image: url(/assets/img/bg_pattern.svg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
                    <h2 class="title-section">SEO to Improve Brand <br> Visibility</h2>
                    <div class="divider"></div>
                    <p>We're an experienced and talented team of passionate consultants who breathe with search engine marketing.</p>

                    <ul class="theme-list theme-list-light text-white">
                        <li>
                            <div class="h5">SEO Content Strategy</div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                        </li>
                        <li>
                            <div class="h5">B2B SEO</div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-3 wow fadeInRight">
                    <div class="img-fluid text-center">
                        <img src="/assets/img/10.png" alt="" width="370px">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .wrap -->
</div> <!-- .page-section -->





@endsection