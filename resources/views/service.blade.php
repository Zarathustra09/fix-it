@extends('layouts.guest-app')

@section('content')
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">Services</h1>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Services List</li>
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
                <div class="col-md-4 service_blog margin_bottom_50">
                    <div class="full">
                        <div class="service_img"> <img class="img-responsive" src="{{ asset('images/it_service/post-01.jpg') }}" alt="#" /> </div>
                        <div class="service_cont">
                            <h3 class="service_head">Data Recovery</h3>
                            <p>At Fix It, we specialize in recovering lost data from a variety of devices to ensure your important files are safe.</p>
                            <div class="bt_cont"> <a class="btn sqaure_bt" href="{{route('data')}}">View Service</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service_blog margin_bottom_50">
                    <div class="full">
                        <div class="service_img"> <img class="img-responsive" src="{{ asset('images/it_service/post-02.jpg') }}" alt="#" /> </div>
                        <div class="service_cont">
                            <h3 class="service_head">Computer Repair</h3>
                            <p>Fix It provides comprehensive computer repair services to get your devices up and running smoothly again.</p>
                            <div class="bt_cont"> <a class="btn sqaure_bt" href="{{route('computer-repair')}}">View Service</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service_blog margin_bottom_50">
                    <div class="full">
                        <div class="service_img"> <img class="img-responsive" src="{{ asset('images/it_service/post-03.jpg') }}" alt="#" /> </div>
                        <div class="service_cont">
                            <h3 class="service_head">Network Solutions</h3>
                            <p>Our network solutions at Fix It ensure that you have a reliable and efficient network setup for your home or business.</p>
                            <div class="bt_cont"> <a class="btn sqaure_bt" href="{{route('network-solution')}}">View Service</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
