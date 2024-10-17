@extends('layouts.guest-app')

@section('content')
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">About Us</h1>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">About Us</li>
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
    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                            <h2>We are Fix It</h2>
                            <p class="large">Fastest tech repair service at the best price in the Philippines!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row about_blog">
                <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
                    <div class="full text_align_left">
                        <h3>What we do</h3>
                        <p>At Fix It, we specialize in providing high-quality repair services for all kinds of tech devices. Whether it's your smartphone, laptop, or gaming console, our team of skilled technicians is here to get it back to working order quickly and affordably.</p>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Fast and efficient repairs for all devices</li>
                            <li><i class="fa fa-check-circle"></i> Expert technicians with years of experience</li>
                            <li><i class="fa fa-check-circle"></i> Affordable prices without compromising on quality</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
                    <div class="full text_align_center"> <img class="img-responsive" src="{{ asset('images/it_service/post-06.jpg') }}" alt="#" /> </div>
                </div>
            </div>
            <div class="row" style="margin-top: 35px">
                <div class="col-md-8">
                    <div class="full margin_bottom_30">
                        <div class="accordion border_circle">
                            <div class="bs-example">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-bar-chart" aria-hidden="true"></i> Complete Recovery from Local & External Drive<i class="fa fa-angle-down"></i></a> </p>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Fix It offers comprehensive data recovery services for both local and external drives. We ensure that your important files are safely retrieved, even from damaged devices.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plane"></i> Recovery of Photos, Videos, and Audio Files<i class="fa fa-angle-down"></i></a> </p>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lost precious memories? Fix It can help recover your lost photos, videos, and audio files from corrupted or damaged devices.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-star"></i> Mobile Phone Recovery<i class="fa fa-angle-down"></i></a> </p>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Fix It specializes in mobile phone recovery, whether it's accidental damage or software issues. We bring your phone back to life.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-bar-chart" aria-hidden="true"></i> Complete Recovery from Local & External Drive<i class="fa fa-angle-down"></i></a> </p>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Our experienced technicians provide full data recovery services for any type of hard drive or external storage, ensuring you get your data back safely.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full" style="margin-top: 35px;">
                        <h3>Need file recovery?</h3>
                        <p>If you’ve accidentally deleted or lost files, Fix It offers expert file recovery services for personal and business needs.</p>
                        <p><a class="btn main_bt" href="#">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
