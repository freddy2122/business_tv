@extends('layouts.index')

@section('content')



<style>
    /* Lazy Load Styles */
    .card-image {
        display: block;
        min-height: 20rem;
        /* layout hack */
        background: #fff center center no-repeat;
        background-size: cover;
        filter: blur(3px);
        /* blur the lowres image */
    }

    .card-image>img {
        display: block;
        width: 100%;
        opacity: 0;
        /* visually hide the img element */
    }

    .card-image.is-loaded {
        filter: none;
        /* remove the blur on fullres image */
        transition: filter 1s;
    }

    /* Layout Styles */


    .card-list {
        display: block;
        margin: 1rem auto;
        padding: 0;
        font-size: 0;
        text-align: center;
        list-style: none;
    }

    .card20 {
        display: inline-block;
        width: 90%;
        max-width: 20rem;
        margin: 1rem;
        font-size: 1rem;
        text-decoration: none;
        overflow: hidden;
        box-shadow: 0 0 3rem -1rem rgba(0, 0, 0, 0.5);
        transition: transform 0.1s ease-in-out, box-shadow 0.1s;
    }

    .card20:hover {
        transform: translateY(-0.5rem) scale(1.0125);
        box-shadow: 0 0.5em 3rem -1rem rgba(0, 0, 0, 0.5);
    }

    .card-description {
        display: block;
        padding: 1em 0.5em;
        color: #515151;
        text-decoration: none;
    }
</style>

<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis">
        <div class="col-lg-6 px-0">
            <h1 class=" fst-italic">Découvrez l'impact de la Business TV sur le monde entrepreneurial</h4>
                <p class="lead my-3">Comment les startups utilisent la Business TV pour accroître leur visibilité, les opportunités offertes par Business TV et autres chaînes pour votre entreprise</p>
        </div>
    </div>


    <div class="row g-5">

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">


                <div>
                    <h4 class="fst-italic">Archive posts</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <iframe width="100px" height="100px" src="https://www.youtube.com/embed/J9w-cir5a6U?si=Zuh0NpbHgYhp42iF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Example blog post title</h6>
                                    <small class="text-body-secondary">January 15, 2023</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <iframe width="100px" height="100px" src="https://www.youtube.com/embed/KsCUcBK9q14?si=_NBKn39aYhgQaEaP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">This is another blog post title</h6>
                                    <small class="text-body-secondary">January 14, 2023</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <iframe width="100px" height="100px" src="https://www.youtube.com/embed/KsCUcBK9q14?si=_NBKn39aYhgQaEaP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                    <small class="text-body-secondary">January 13, 2023</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <div class="col-md-8">


            <article class="blog-post">
                <h4 class=" link-body-emphasis mb-1">Nom du post</h4>
                <p class="blog-post-meta"> <i class="bi bi-calendar-event"></i> 06, fevr, 2024</p>
            </article>

            <div class="container pb-5">
                <div class="row">
                    <iframe height="400px" src="https://www.youtube.com/embed/J9w-cir5a6U?si=Zuh0NpbHgYhp42iF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius facere illum libero pariatur recusandae! Doloribus nesciunt nisi, explicabo eius magnam earum ipsa culpa? Ab, labore nulla? Debitis, unde? Deleniti quas omnis perspiciatis iure sapiente, consectetur ratione cupiditate, voluptatibus tempore dignissimos tempora in dicta, necessitatibus porro? Eveniet suscipit amet praesentium voluptatibus?</p>

                </div>


                <!-- <div class="col-md-6 mb-3">
                        
                          

                          
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                           
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                    </div> -->
            </div>

            <div class="container">
                <article class="blog-post">
                    <h4 class=" link-body-emphasis mb-1">Nom du post</h4>
                    <p class="blog-post-meta"> <i class="bi bi-calendar-event"></i> 06, fevr, 2024</p>
                </article>
                <div class="row">
                    <iframe height="400px" src="https://www.youtube.com/embed/KsCUcBK9q14?si=_NBKn39aYhgQaEaP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <p class="pt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="container">
                <article class="blog-post">
                    <h4 class=" link-body-emphasis mb-1">Nom du post</h4>
                    <p class="blog-post-meta"> <i class="bi bi-calendar-event"></i> 06, fevr, 2024</p>
                </article>
                <div class="row">
                    <iframe height="400px" src="https://www.youtube.com/embed/KsCUcBK9q14?si=_NBKn39aYhgQaEaP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <p class="pt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>


        </div>
    </div>





    <div class="container mt-5">
        <div class="row">
            <h3 class="border-bottom">Notre gallerie</h3>
            <ul class="card-list ">

                <div class="card card20">

                    <img src="/assets/img/19.jpg" class="card-img-top" />

                    <h2>Psychopomp</h2>
                    <p>Japanese Breakfast</p>
                </div>

                <div class="card card20">

                    <img src="/assets/img/20.jpg" class="card-img-top" alt="" />

                    <h2>let's go</h2>
                    <p>In Love With A Ghost</p>
                </div>

                <div class="card card20">

                    <img src="/assets/img/20.jpg" class="card-img-top" alt="" />

                    <h2>let's go</h2>
                    <p>In Love With A Ghost</p>
                </div>

                <div class="card card20">
                    <img src="/assets/img/21.jpg" class="card-img-top" alt="" />
                    <h2>The Beautiful Game</h2>
                    <p>Vulfpeck</p>
                </div>
                <div class="card card20">
                    <img src="/assets/img/21.jpg" class="card-img-top" alt="" />
                    <h2>The Beautiful Game</h2>
                    <p>Vulfpeck</p>
                </div>
                <div class="card card20">
                    <img src="/assets/img/21.jpg" class="card-img-top" alt="" />
                    <h2>The Beautiful Game</h2>
                    <p>Vulfpeck</p>
                </div>

            </ul>
        </div>
        <nav aria-label="Page Navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</main>





@endsection

