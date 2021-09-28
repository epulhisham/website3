@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src={{ asset('img/img1.jpg') }} alt="img1"  width="100%">
                      <div class="carousel-caption bg-dark">
                        <h3>Helping</h3>
                        <p> 
                            We will help with PHP MySQL for your existing team to increase 
                            the level of knowledge and acquire the expertise required by your project.</p>
                      </div>
                    </div>

                    <div class="carousel-item">
                        <img src={{ asset('img/img2.jpg') }} alt="img2" width="100%">
                        <div class="carousel-caption bg-dark">
                          <h3>Teamwork</h3>
                          <p> We work with businesses in helping them turn around
                            their projects and ideas.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src={{ asset('img/img3.jpg') }} alt="img3" width="100%">
                        <div class="carousel-caption bg-dark">
                          <h3>Professional workers</h3>
                          <p> 
                            Here we have professional and highly experienced employees.</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <br><br><br>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9 text-center">
            <div class="card" data-aos="fade-up">
                <div class="card-body bg-info text-white">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h1 class="display-2">
                                World-class web and mobile Development
                            </h1>
                            <br>
                            <div class="col-md-12 mt-3">
                                <p class="p">
                                    We enable your digital business to succeed by building apps with 
                                    a robust technical foundation and the outstanding user experience 
                                    your customers deserve.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-5">
            <div class="row" data-aos="fade-up">
                <div class="col-md-6 mt-5">
                    <div class="row">
                        <div class="cold-md-12 mt-3">
                            <h3>Laravel</h3>
                            <br>
                            <p>Laravel is a web application framework with expressive, elegant syntax.
                                We’ve already laid the foundation freeing you to create without sweating
                                the small things. — Laravel takes care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <img src={{ asset('img/laravel.jpg') }} alt="laravel" width="100%">
                </div>
            </div>

            <div class="row mt-5" data-aos="fade-up">
                <div class="col-md-6 mt-5">
                    <img src={{ asset('img/android.jpg') }} alt="android" width="100%">
                </div>
                <div class="col-md-6 mt-5">
                    <div class="row">
                        <div class="cold-md-12 mt-3">
                            <h3>Android Apps</h3>
                            <br>
                            <p>Android is open to everyone: developers, designers and device makers. 
                                That means more people can experiment, imagine and create things the world has 
                                never seen. — Everything from 5G phones to stunning tablets, Android powers them all.
                            </p>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="row mt-5" data-aos="fade-up">
                <div class="col-md-6 mt-5">
                    <div class="row">
                        <div class="cold-md-12 mt-3">
                            <h3>Bootstrap</h3>
                            <br>
                            <p>Quickly design and customize responsive mobile-first sites with Bootstrap, 
                                the world’s most popular front-end open source toolkit, featuring Sass 
                                variables and mixins, responsive grid system, extensive prebuilt components, 
                                and powerful JavaScript plugins..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <img src={{ asset('img/boostrap5.jpg') }} alt="bootstrap" width="100%">
                </div>
            </div>


        </div>
    </div>
</div>

@endsection