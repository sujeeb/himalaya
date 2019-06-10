@extends('layout')

@section('content')

<style>
    body {
        font-family: 'open sans';
        overflow-x: hidden; }

    img {
        max-width: 100%; }

    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column; }
    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px; } }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1; }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px; }
    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block; }
    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0; }

    .tab-content {
        overflow: hidden; }
    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s; }

    .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em; }

    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex; } }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column; }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1; }

    .product-title, .price, .sizes, .colors {
        text-transform: UPPERCASE;
        font-weight: bold; }

    .checked, .price span {
        color: #ff9f1a; }

    .product-title, .rating, .product-description, .price, .vote, .sizes {
        margin-bottom: 15px; }

    .product-title {
        margin-top: 0; }

    .size {
        margin-right: 10px; }
    .size:first-of-type {
        margin-left: 40px; }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px; }
    .color:first-of-type {
        margin-left: 20px; }

    .add-to-cart, .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
        transition: background .3s ease; }
    .add-to-cart:hover, .like:hover {
        background: #b36800;
        color: #fff; }

    .not-available {
        text-align: center;
        line-height: 2em; }
    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff; }

    .orange {
        background: #ff9f1a; }

    .green {
        background: #85ad00; }

    .blue {
        background: #0076ad; }

    .tooltip-inner {
        padding: 1.3em; }

    @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1); } }

    @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1); } }

    /*# sourceMappingURL=style.css.map */
    ul.timeline {
        list-style-type: none;
        position: relative;
    }
    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }
    ul.timeline > li {
        margin: 20px 0;
        padding-left: 20px;
    }
    ul.timeline > li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
</style>
    <section style="margin-top: 6em">
        <div class="container">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">

                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="{{ asset('images')}}/{{$details->package_title_image}}" /></div>
                                <?php $sn = 2; ?>
                                @foreach($images as $image)

                                <div class="tab-pane" id="pic-{{$sn}}"><img src="{{ asset('images')}}/{{$image->image_name }}" /></div>
                                    <?php $sn++; ?>
                                @endforeach

                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('images')}}/{{$details->package_title_image }}" /></a></li>
                                <?php $key = 2; ?>
                                @foreach($images as $image)
                                <li><a data-target="#pic-{{$key}}" data-toggle="tab"><img src="{{ asset('images')}}/{{$image->image_name }}" /></a></li>
                                 <?php $key++; ?>
                                @endforeach
                            </ul>

                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{$details->package_title}}</h3>
                            <input type="hidden" name="package_id" id="package_id" value="{{$details->id}}" >
                            <p class="product-description">
                                {{$details->package_description}}
                            </p>
                            <h4 class="price">current price: <span>{{$details->package_price}}</span></h4>


                            <div id="added_to_cart">
                                @if(session()->has('cart') && in_array($details->id, Session::get('cart')))
                                    <button class="btn" type="button">Added on cart</button>
                                @else
                                    <button id="addToCart" class="add-to-cart btn btn-default" type="button">add to cart</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section style="margin-top: -2em">
    <div class="container">
        <div class="card">
            <div class="container mt-12 mb-12">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h4 class="text-info">Summary Details</h4>
                        <ul class="timeline">

                            @foreach($allsummary as $summary)
                            <li>
                                <p class="text-info">{{$summary->summary_title}}</p>

                                <p>{{$summary->summary_detail}}</p>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="margin-top: -2em; margin-bottom: 1em">
    <div class="container">
        <div class="card">
            <div class="container mt-12 mb-12">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h4 class="text-info">WHAT’S INCLUDED</h4>
                        <ul class="list-group">
                            @foreach($includes as $include)
                            <li class="list-group-item"><i class="fas fa-check text-success mx-2"></i>{{$include->include_detail}}</li>
                            @endforeach
                        </ul>
                        <br>
                        <h4 class="text-info">WHAT'S EXCLUDED</h4>
                        <ul class="list-group">
                            @foreach($excludes as $exclude)
                            <li class="list-group-item"><i class="fas fa-times text-danger mx-2"></i>{{$exclude->include_detail}}</li>
                            @endforeach
                        </ul>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
      $("#addToCart").on("click", function(){

        var package = $("#package_id").val();
        $.ajax({
          method: 'GET',
          url: "{{url('/addToCart')}}",
          data: {package:package},
          success: function(data){
            $('#added_to_cart').html('<button class="btn" type="button">Added on cart</button>')
        }
    });
    });  
  });

</script>
@endsection()