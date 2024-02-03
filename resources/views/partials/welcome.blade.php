@extends('layouts.index')

@section('content')
<style>
    .page-banner {
        position: relative;
    }

    .video-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        /* height: 100%; */
        overflow: hidden;
    }

    #background-video {
        width: 100%;
        height: auto;
    }
</style>
<!-- <div class="container">
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


    </div>
</div> -->
<div class="">
    <div class="page-banner">

        <div class="video-container">
            <video autoplay muted loop id="background-video">
                <source src="/assets/video/PUB.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise vidéo.
            </video>
        </div>
    </div>

</div>
<div class="page-section  team">
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
                <span class="subhead"></span>
                <h2 class="title-section">Notre projet(Web TV)</h2>
                <div class="divider"></div>
                <p>L'idée de créer des creusets de promotion des entrepreneurs béninois vise à établir des environnements favorables à l'essor de l'entrepreneuriat au Bénin. Voici une explication détaillée de ce concept :</p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Création de Creusets de Promotion :
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Ces "creusets" peuvent être des centres d'innovation, des incubateurs, des programmes de mentorat, ou des initiatives similaires. Ils sont spécialement conçus pour soutenir et promouvoir les entrepreneurs béninois. Ces structures offrent des ressources, des conseils, et des opportunités qui favorisent la croissance des entreprises.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Participation au Développement Économique :
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">L'objectif ultime est de contribuer au développement économique du pays. En encourageant la création et la croissance d'entreprises locales, ces creusets stimulent l'activité économique, génèrent des emplois, et contribuent à la prospérité générale du Bénin.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Partage d'Informations sur l'Entrepreneuriat :
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"> Les creusets servent également de plateformes pour partager des informations cruciales sur l'entrepreneuriat. Cela inclut des formations, des ateliers, des conférences, et des ressources éducatives visant à renforcer les compétences entrepreneuriales des individus.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
                                            Encouragement du Développement Entrepreneurial :
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"> Les creusets encouragent activement le développement entrepreneurial en créant un écosystème qui célèbre l'innovation, la créativité, et l'initiative. Ils fournissent également un réseau solide où les entrepreneurs peuvent interagir, collaborer, et bénéficier de l'expérience les uns des autres.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree3" aria-expanded="false" aria-controls="flush-collapseThree3">
                                            Inviter des Entrepreneurs aux Émissions :
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">- Organiser des émissions dédiées à l'entrepreneuriat. <br>
                                           - Inviter des entrepreneurs à présenter leurs produits, partager leurs expériences, et discuter des défis qu'ils ont surmontés. <br>
                                          -  Favoriser la visibilité des entrepreneurs et de leurs produits à travers différents médias.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree4" aria-expanded="false" aria-controls="flush-collapseThree4">
                                        Micros-Trottoirs sur l'Entrepreneuriat :
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">- Réaliser des micros-trottoirs dans des zones fréquentées par la cible (jeunes, étudiants, élèves). <br>
                                           - Poser des questions sur divers aspects de l'entrepreneuriat pour recueillir les opinions et perceptions du public.<br>
                                          -  Diffuser ces micros-trottoirs sur les réseaux sociaux et autres plateformes pour sensibiliser et inspirer.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree5" aria-expanded="false" aria-controls="flush-collapseThree5">
                                        Débats et Partages de Connaissances :
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">- Organiser des débats entre experts, entrepreneurs, et acteurs du secteur économique. <br>
                                           - Aborder des sujets pertinents tels que les tendances du marché, l'innovation, et les opportunités entrepreneuriales.<br>
                                          - Faciliter le partage de connaissances entre les participants pour favoriser l'apprentissage et l'émulation.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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