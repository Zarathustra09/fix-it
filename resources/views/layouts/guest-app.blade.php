<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('images/fevicon/fevicon.png') }}" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Site css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- colors css -->
    <link rel="stylesheet" href="{{ asset('css/colors1.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <![endif]-->
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="{{asset('images/fevicon/fevicon.png')}}" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
@include('layouts.menu')
<!-- end header -->
<!-- section -->

@yield('content')
{{--<div class="section padding_layout_1 testmonial_section white_fonts">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="full">--}}
{{--                    <div class="main_heading text_align_left">--}}
{{--                        <h2 style="text-transform: none;">What Clients Say?</h2>--}}
{{--                        <p class="large">Here are testimonials from clients..</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-7">--}}
{{--                <div class="full">--}}
{{--                    <div id="testimonial_slider" class="carousel slide" data-ride="carousel">--}}
{{--                        <!-- Indicators -->--}}
{{--                        <ul class="carousel-indicators">--}}
{{--                            <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>--}}
{{--                            <li data-target="#testimonial_slider" data-slide-to="1"></li>--}}
{{--                            <li data-target="#testimonial_slider" data-slide-to="2"></li>--}}
{{--                        </ul>--}}
{{--                        <!-- The slideshow -->--}}
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="carousel-item active">--}}
{{--                                <div class="testimonial-container">--}}
{{--                                    <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.--}}
{{--                                        I am really satisfied with my first laptop service. </div>--}}
{{--                                    <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>--}}
{{--                                    <div class="testimonial-meta">--}}
{{--                                        <h4>Maria Anderson</h4>--}}
{{--                                        <span class="testimonial-position">CFO, Tech NY</span> </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <div class="testimonial-container">--}}
{{--                                    <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.--}}
{{--                                        I am really satisfied with my first laptop service. </div>--}}
{{--                                    <div class="testimonial-photo"> <img src="images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>--}}
{{--                                    <div class="testimonial-meta">--}}
{{--                                        <h4>Maria Anderson</h4>--}}
{{--                                        <span class="testimonial-position">CFO, Tech NY</span> </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <div class="testimonial-container">--}}
{{--                                    <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.--}}
{{--                                        I am really satisfied with my first laptop service. </div>--}}
{{--                                    <div class="testimonial-photo"> <img src="images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>--}}
{{--                                    <div class="testimonial-meta">--}}
{{--                                        <h4>Maria Anderson</h4>--}}
{{--                                        <span class="testimonial-position">CFO, Tech NY</span> </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-5">--}}
{{--                <div class="full"> </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="modal fade" id="search_bar" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form action="#" method="get" id="search-global-form" class="search-global">
                                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                                <div class="search-global__note">Begin typing your search above and press return to search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
@include('layouts.footer')
<!-- end footer -->
<!-- js section -->
<!-- js section -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- menu js -->
<script src="{{ asset('js/menumaker.js') }}"></script>
<!-- wow animation -->
<script src="{{ asset('js/wow.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
<!-- revolution js files -->
<script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- map js -->

<script>
    // This example adds a marker to indicate the position of Rizal Park in Manila, Philippines.
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: {lat: 14.582598, lng: 120.979366}, // Coordinates of Rizal Park, Manila
            styles: [
                {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                },
                {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
                {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                },
                {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                },
                {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                },
                {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                },
                {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                },
                {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                }
            ]
        });

        var image = 'images/it_service/location_icon_map_cont.png';
        var beachMarker = new google.maps.Marker({
            position: {lat: 14.582598, lng: 120.979366}, // Marker at Rizal Park, Manila
            map: map,
            icon: image
        });
    }
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANsQP_vy2AbZzn40IKLMmq8SgZLgfBzJY&callback=initMap"></script>
<!-- end google map js -->

</body>
</html>
