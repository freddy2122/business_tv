@extends('layouts.index')

@section('content')



<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
            <h1 class=" fst-italic">Title of a longer featured blog post</h4>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
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

    <div class="container-fluid mt-3">
        <h3 class="border-bottom pb-3">Notre gallerie d'image</h3>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <img src="/assets/img/18.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <img src="/assets/img/18.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <img src="/assets/img/18.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <img src="/assets/img/18.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>







@endsection
