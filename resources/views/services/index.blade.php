@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-10 text-center">
      <div class="card bg-info text-white">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 mt-3">
              <h3 class="display-2">What we do</h3>
              <br>
              <div class="col-md-12 mt-3">
                <p class="display-6">
                    We partners with businesses in helping them bring their projects and ideas to life. 
                    We focus on the Laravel ecosystem and PHP MySQL along with Bootstrap to build web 
                    and mobile applications, as well as open source software.
                </p>
                <br>
              </div>
              <div class="col-md-12 mt-3">
                <p class="display-6">          
                    We take a custom approach tailored to each project's requirements and in collaboration
                    with your team we choose the best technologies suited for your needs.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center mt-5">
    <div class="col-md-9">
      <div class="row py-5">
        <div class="col-md-4 text-center" data-aos="fade-right">
          <img src={{ asset('img/website.png') }} alt="web apps" width="35%">
        </div>
        <div class="col-md-8" data-aos="fade-left">
          <div class="row">
            <div class="col-md-12">
              <h3>Web apps</h3>
            </div>
            <div class="col-md-12 mt-2">
              <p>
                Outstanding web applications based on PHP MySQL that scale with your needs and user base, 
                built with exceptional attention to details.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-md-4 text-center" data-aos="fade-right">
          <img src={{ asset('img/smartphone.png') }} alt="smartphone" width="35%">
        </div>
        <div class="col-md-8" data-aos="fade-left">
          <div class="row">
            <div class="col-md-12">
              <h3>Native mobile apps</h3>
            </div>
            <div class="col-md-12 mt-2">
              <p>
                Mobile applications for Android based on Bootstrap Framework, integrating perfectly
                with your existing APIs and web applications and providing an amazing user experience.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-md-4 text-center" data-aos="fade-right">
          <img src={{ asset('img/performance.png') }} alt="performance" width="35%">
        </div>
        <div class="col-md-8" data-aos="fade-left">
          <div class="row">
            <div class="col-md-12">
              <h3>Auditing & Performance Tuning</h3>
            </div>
            <div class="col-md-12 mt-2">
              <p>
                Auditing and analysis to existing applications, offering support for 
                improving the user experience or extending them with new features.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-md-4 text-center" data-aos="fade-right">
          <img src={{ asset('img/seo-training.png') }} alt="training" width="35%">
        </div>
        <div class="col-md-8" data-aos="fade-left">
          <div class="row">
            <div class="col-md-12">
              <h3>Trainings</h3>
            </div>
            <div class="col-md-12 mt-2">
              <p>
                Help and support with PHP MySQL for your existing team to boost up the level of knowledge 
                and acquire the expertise that your project requires.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection