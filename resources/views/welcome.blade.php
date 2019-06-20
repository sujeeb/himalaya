@extends('layout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(../public/images/himalayas-main-1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Find your perfect place.</h1>
              <p>Discover &amp; connect with great places around Nepal.</p>
            </div>

            <form class="form-inline element-animate" method="post" action="{{url('/search')}}" id="search-form">

              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <label for="s" class="sr-only">Location</label>
              <input name="keyword" type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Search with Keyword">
              <button type="submit" class="btn btn-primary">Search</button>
            </form>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="feature-destination">
      <div class="container">
        <div class="row">
          @foreach($bestPackage as $best)
          <div class="col-md-4 element-animate ">
            <a href="{{url('/packageDetail')}}/{{$best->id}}" class="img-bg" style="background-image: url('../public/images/{{$best->package_title_image}}')">
              <div class="text">
                <span class="icon ion-ios-location"></span>
                <h2>{{$best->package_title}}</h2>
                <p>Visit This Place</p>
              </div>
            </a>
          </div>
          @endforeach
          

        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Top Destinations</h2>
            <p>Top destinations to visit in Nepal according to the people who have visited them.</p>
          </div>
        </div>
        <div class="row top-destination">
          @foreach($topPackage as $top)
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="{{url('/packageDetail')}}/{{$top->id}}" class="place">
              <img src="{{ asset('images')}}/{{$top->package_title_image }}" alt="Image placeholder" width="200px" height="150px">
              <h2>{{$top->package_title}}</h2>
              <p>Visit This Place</p>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(../public/images/kathmandu-main-2.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-7 text-center element-animate">
            <h2>Get 10% off On Your Next Travel</h2>
            <p>Buy a package from us now and get 10% off on your next travel when you buy from us.</p>
            <p><a href="#" class="btn btn-black">Get Started</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 pr-5">
            
            <h2 class="mb-3">More Featured <br> Destinations</h2>
            <p class="mb-5">Every corner you go to - Nepal will make you feel very welcome with its friendly people and its immense beauty and historical charm. </p>
            
            <div class="mb-3">
              <a href="#" class="btn btn-primary custom-prev mr-2 mb-2"><span class="ion-android-arrow-back"></span></a> 
              <a href="#" class="btn btn-primary custom-next mr-2 mb-2"><span class="ion-android-arrow-forward"></span></a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12 slider-wrap">
                <div class="owl-carousel owl-theme no-nav js-carousel-1">
                  @foreach($featuredPackage as $featured)
                  <a href="{{url('/packageDetail')}}/{{$featured->id}}" class="img-bg" style="background-image: url('../public/images/{{$featured->package_title_image}}')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>{{$featured->package_title}}</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>
                  @endforeach
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

@endsection()