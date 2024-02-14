<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur Business TV, votre destination exclusive dédiée à l'entrepreneuriat et à la promotion des startups ! 🚀📺 Inspirer, informer et soutenir les entrepreneurs  et les aspirants entrepreneurs au Bénin.Devenir le principal média digital du Bénin et d'Afrique pour tout ce qui concerne l'entrepreneuriat.">
    <meta name="keywords" content="TV,entrepreneuriat, micros-trottoir,émission,débats,promotion des startups">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <link rel="icon" href="/assets/img/logo.png" type="image/x-icon">
    <title>Business TV - Bienvenue sur Business TV, votre destination exclusive dédiée à l'entrepreneuriat et à la promotion des startups ! 🚀📺 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/maicons.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="/assets/css/theme.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">

    <style>
        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            /* box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width); */
        }
    </style>
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            <div class="container">
                <a href="/" class="navbar-brand"><img src="/assets/img/logo.png" width="80px" height="80px" alt=""></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">A propos de nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>


    </header>
    <main>
        @yield('content')
    </main>
    <footer class="page-footer bg-image" style="background-image: url(/assets/img/world_pattern.svg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 py-3">
                    <h3><img src="/assets/img/logo.png" width="100px" height="100px" alt=""></h3>
                    <p>Éclairez votre parcours entrepreneurial avec Business TV, votre guide vers le succès.</p>

                    <div class="social-media-button">
                        <a target="_blank" href="https://www.facebook.com/businesstv.bj"><span class="mai-logo-facebook-f"></span></a>
                        <a href="https://www.tiktok.com/@business.tv03?_t=8jA35Kam5Sf&_r=1" target="_blank"><span class="mai-logo-tiktok"><i class="bi bi-tiktok"></i></span></a>
                        <a target="_blank" href="https://wa.me/+22964897003?text=Salut nous voulons avoir plus de renseignement sur votre projet"><span ><i class="bi bi-whatsapp"></i></span></a>
                        <a target="_blank" href="https://www.instagram.com/businesstv.bj/ "><span class="mai-logo-instagram"></span></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UC6udAYX6Xf5a2lKaNhBJhtg"><span class="mai-logo-youtube"></span></a>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Nos liens</h5>
                    <ul class="footer-menu">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/about">A propos de nous</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/blog">Blog</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Contactez-nous</h5>
                    <p>Deuxième von à droite en quittant carrefour Toyota pour Etoile rouge Cotonou, Bénin</p>
                    <a href="https://wa.me/+22964897003?text=Salut nous voulons avoir plus de renseignement sur votre projet" class="footer-link">+229 64897003</a>
                    <a href="#" class="footer-link">seogram@temporary.com</a>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Newsletter</h5>
                    <p>Abonnez-vous à notre newsletter pour avoir plus d'actualités.</p>
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Entrez votre email..">
                        <button type="submit" class="btn btn-primary btn-block mt-2">Souscrire</button>
                    </form>
                </div>
            </div>

            <p class="text-center" id="copyright">Copyright &copy; 2024, Tout droits réservés, developpé par Safi & Freddy</p>
        </div>
    </footer>

    <script src="/assets/js/jquery-3.5.1.min.js"></script>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/js/google-maps.js"></script>

    <script src="/assets/vendor/wow/wow.min.js"></script>

    <script src="/assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            // Active la barre de navigation
            $(".nav-item").click(function() {
                $(".nav-item").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>


</body>

</html>