@extends('layouts.guest-app')


@section('content')
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">Network Solutions</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="active">Network Solutions</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->
    <!-- section -->
    <div class="section padding_layout_1 service_list">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-md-12">
                            <div class="full margin_bottom_30">
                                <div class="accordion border_circle">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <div class="service_blog_inner">
                                    <div class="icon text_align_left"><img src="{{asset('images/it_service/si1.png')}}" alt="#"></div>
                                    <h4 class="service-heading">Fast service</h4>
                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <div class="service_blog_inner">
                                    <div class="icon text_align_left"><img src="{{asset('images/it_service/si2.png')}}" alt="#"></div>
                                    <h4 class="service-heading">Secure payments</h4>
                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <div class="service_blog_inner">
                                    <div class="icon text_align_left"><img src="{{asset('images/it_service/si3.png')}}" alt="#"></div>
                                    <h4 class="service-heading">Expert team</h4>
                                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="full" style="margin-top: 15px;">
                                <h3>Need Network Solution?</h3>
                                <p><a class="btn main_bt" href="{{route('service')}}">Get a Quote Now!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="side_bar">
                        <div class="side_bar_blog">
                            <h4>GET A QUOTE</h4>
                            <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius elitr consequ unturimperdiet.</p>
                            <a class="btn sqaure_bt" href="it_service.html">View Service</a> </div>
                        <div class="side_bar_blog">
                            <h4>OUR SERVICE</h4>
                            <div class="categary">
                                <ul>
                                    <li><a href=""><i class="fa fa-angle-right"></i> Data recovery</a></li>
                                    <li><a href=""><i class="fa fa-angle-right"></i> Computer repair</a></li>
                                    <li><a href=""><i class="fa fa-angle-right"></i> Network solutions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
