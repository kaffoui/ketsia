@extends('layouts.app')
@section('title',"Contact")


@section('pageheader')
    <section class="page-header page-header-text-light bg-dark-3 py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <ul class="breadcrumb mb-0">
                        <li><a href="index.html">Accueil</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
                <div class="col-12">
                    <h1>Contactez-nous</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="bg-white shadow-md rounded h-100 p-3">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon text-primary mt-4"> <i class="fas fa-map-marker-alt"></i></div>
                        <h3>Adresse</h3>
                        <p>98 RUE DES ORTEAUX 75020 PARIS</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="bg-white shadow-md rounded h-100 p-3">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon text-primary mt-4"> <i class="fas fa-phone"></i> </div>
                        <h3>Téléphone</h3>
                        <p class="mb-0">(+33) 06 68 51 03 29</p>
                        {{-- <p>(+060) 8898880088</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="bg-white shadow-md rounded h-100 p-3">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon text-primary mt-4"> <i class="fas fa-envelope"></i> </div>
                        <h3>Email</h3>
                        <p>contact@Lisocash-moneytransfer.com</p>
                    </div>
                </div>
            </div>


            <div class="col-12 mb-4">
                <div class="text-center py-5 px-2">
                    <h2 class="text-8">Suivez-nous !</h2>
                    <p class="lead">Retrouvez-nous sur les réseaux sociaux</p>
                    <div class="d-flex flex-column">
                        <ul class="social-icons social-icons-lg social-icons-colored justify-content-center">
                            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/"
                                    target="_blank" title="" data-original-title="Facebook"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/"
                                    target="_blank" title="" data-original-title="Twitter"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/"
                                    target="_blank" title="" data-original-title="Google"><i
                                        class="fab fa-google"></i></a></li>
                            <li class="social-icons-linkedin"><a data-toggle="tooltip" href="http://www.linkedin.com/"
                                    target="_blank" title="" data-original-title="Linkedin"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/"
                                    target="_blank" title="" data-original-title="Youtube"><i
                                        class="fab fa-youtube"></i></a></li>
                            <li class="social-icons-instagram"><a data-toggle="tooltip" href="http://www.instagram.com/"
                                    target="_blank" title="" data-original-title="Instagram"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <section class="hero-wrap section shadow-md">
        <div class="hero-mask opacity-9 bg-primary"></div>
        <div class="hero-bg" style="background-image:url('images/bg/image-2.jpg');"></div>
        <div class="hero-content">
            <div class="container text-center">
                <h2 class="text-9 text-white">Service client</h2>
                <p class="text-4 text-white mb-4">Vous avez une queston ? N'hésitez pas à contacter le support via whatsapp</p>
                <a href="#" class="btn btn-light">Contacter le support</a>
            </div>
        </div>
    </section>
@endsection
