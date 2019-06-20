@extends('layout')

@section('content')


    <!-- END section -->

    <section class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2>Your Search</h2>
                </div>
            </div>
            <div class="row top-destination">
                @foreach($searchdata as $top)
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



@endsection()