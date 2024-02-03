@extends('layouts.index')

@section('content')
<style>
    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.02rem #009FE3;
    }

    .accordion-button:focus {
        z-index: 3;
        /* border-color: var(--bs-accordion-btn-focus-border-color); */
        outline: 0;
        /* box-shadow: var(--bs-accordion-btn-focus-box-shadow); */
    }

    #background-video {
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1;
    transform: translateX(-50%) translateY(-50%);
}
</style>
<div class="container">
    <!-- <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <nav aria-label="Breadcrumb">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item active">A propos de nous</li>
                    </ul>
                </nav>
                <h1 class="text-center">A propos de nous</h1>
            </div>
        </div>
    </div> -->
    <video autoplay muted loop id="background-video">
        <source src="/assets/video/PUB.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la balise vidéo.
    </video>
   
</div>

<!-- <div class="page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">
                <h2 class="title-section">The number #1 SEO Service Company</h2>
                <div class="divider"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="img-fluid py-3 text-center">
                    <img src="/assets/img/13.png" width="390px" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->





@endsection