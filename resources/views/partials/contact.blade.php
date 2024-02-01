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
</style>
<div class="container">
    <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <nav aria-label="Breadcrumb">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ul>
                </nav>
                <h1 class="text-center">Contactez-nous</h1>
            </div>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="col-lg-4 py-3">
                <div class="display-4 text-center text-primary"><span class="mai-pin"></span></div>
                <p class="mb-3 font-weight-medium text-lg">Address</p>
                <p class="mb-0 text-secondary">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="col-lg-4 py-3">
                <div class="display-4 text-center text-primary"><span class="mai-call"></span></div>
                <p class="mb-3 font-weight-medium text-lg">Phone</p>
                <p class="mb-0"><a href="#" class="text-secondary">+1 232 3235 324</a></p>
                <p class="mb-0"><a href="#" class="text-secondary">+00 1122 3344 5566</a></p>
            </div>
            <div class="col-lg-4 py-3">
                <div class="display-4 text-center text-primary"><span class="mai-mail"></span></div>
                <p class="mb-3 font-weight-medium text-lg">Email Address</p>
                <p class="mb-0"><a href="#" class="text-secondary">support@seogram.com</a></p>
                <p class="mb-0"><a href="#" class="text-secondary">hello@seogram.com</a></p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
        <div class="col-lg-2 px-0">
                
                </div>
            <div class="col-lg-8 mb-5 mb-lg-0">
                <form action="#" class="contact-form py-5 px-lg-5">
                    <h2 class="mb-4 font-weight-medium text-secondary">Get in touch</h2>
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Nom</label>
                            <input type="text" id="fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Prénoms</label>
                            <input type="text" id="lname" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Objet</label>
                            <input type="text" id="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" ></textarea>
                        </div>
                    </div>

                    <div class="row form-group mt-4">
                        <div class="col-md-12">
                            <input type="submit" value="Envoyer" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 px-0">
                
            </div>
        </div>
    </div>
</div>



@endsection