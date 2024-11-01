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
<div id="slider" class="section main_slider">
    <div class="container-fuild">
        <div class="row">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <li data-index="rs-1812" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/it_service/slide1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Computer Services" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/it_service/slide1.jpg"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. BG -->
                            <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                                 id="slide-270-layer-1012"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="s:300;s:300;"
                                 data-start="750"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-18-layer-912"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                 data-width="500"
                                 data-height="140"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;"
                                 data-mask_out="x:inherit;y:inherit;"
                                 data-start="2000"
                                 data-responsive_offset="on"
                                 style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-18-layer-112"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['70','70','70','35']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05"
                                 style="z-index: 6; white-space: nowrap;">Computer Services </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-18-layer-412"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap;">Available On It.Next </div>
                        </li>
                        <li data-index="rs-181" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/it_service/slide2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Easy To Use & Customize" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/it_service/slide2.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. BG -->
                            <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                                 id="slide-270-layer-101"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="s:300;s:300;"
                                 data-start="750"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-18-layer-91"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                 data-width="500"
                                 data-height="140"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;"
                                 data-mask_out="x:inherit;y:inherit;"
                                 data-start="2000"
                                 data-responsive_offset="on"
                                 style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-18-layer-11"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['70','70','70','35']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05"
                                 style="z-index: 6; white-space: nowrap;">Fast & Affordable </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-18-layer-41"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap;">Available On It.Next </div>
                        </li>
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/it_service/slide3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Perfectly Responsive" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/it_service/slide3.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. BG -->
                            <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                                 id="slide-270-layer-10"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="s:300;s:300;"
                                 data-start="750"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-18-layer-9"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                 data-width="500"
                                 data-height="140"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;"
                                 data-mask_out="x:inherit;y:inherit;"
                                 data-start="2000"
                                 data-responsive_offset="on"
                                 style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-18-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['70','70','70','35']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05"
                                 style="z-index: 6; white-space: nowrap;">We Will Fix It </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-18-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap;">Available On It.Next </div>
                        </li>
                    </ul>
                    <div class="tp-static-layers"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>Why Choose Us</h2>
                        <p class="large">Fastest repair service with best price!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="full text_align_center margin_bottom_30">
                    <div class="center">
                        <div class="icon"> <img src="images/it_service/i1.png" alt="#" /> </div>
                    </div>
                    <h4 class="theme_color">Data recovery</h4>
                    <p>Perspiciatis eos quos totam cum minima aut!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="full text_align_center margin_bottom_30">
                    <div class="center">
                        <div class="icon"> <img src="images/it_service/i2.png" alt="#" /> </div>
                    </div>
                    <h4 class="theme_color">Computer repair</h4>
                    <p>Perspiciatis eos quos totam cum minima aut!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="full text_align_center margin_bottom_30">
                    <div class="center">
                        <div class="icon"> <img src="images/it_service/i3.png" alt="#" /> </div>
                    </div>
                    <h4 class="theme_color">Mobile service</h4>
                    <p>Perspiciatis eos quos totam cum minima aut!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="full text_align_center margin_bottom_30 margin_0">
                    <div class="center">
                        <div class="icon"> <img src="images/it_service/i4.png" alt="#" /> </div>
                    </div>
                    <h4 class="theme_color">Network solutions</h4>
                    <p>Perspiciatis eos quos totam cum minima aut!</p>
                </div>
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
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plane"></i> Recovery Photo, Image, Video and Audio<i class="fa fa-angle-down"></i></a> </p>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-star"></i> Mobile Phone Recovery<i class="fa fa-angle-down"></i></a> </p>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-bar-chart" aria-hidden="true"></i> Complete Recovery from Local & External Drive<i class="fa fa-angle-down"></i></a> </p>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
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
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae dicta sunt explicabo.. </p>
                    <p><a class="btn main_bt" href="#">Read More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 light_silver gross_layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_left">
                        <h2>Service Process</h2>
                        <p class="large">Easy and effective way to get your device repaired.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="images/it_service/si1.png" alt="#" /></div>
                                <h4 class="service-heading">Fast service</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="images/it_service/si2.png" alt="#" /></div>
                                <h4 class="service-heading">Secure payments</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="images/it_service/si3.png" alt="#" /></div>
                                <h4 class="service-heading">Expert team</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="images/it_service/si4.png" alt="#" /></div>
                                <h4 class="service-heading">Affordable services</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="images/it_service/si5.png" alt="#" /></div>
                                <h4 class="service-heading">90 Days warranty</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="images/it_service/si6.png" alt="#" /></div>
                                <h4 class="service-heading">Award winning</h4>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
<!-- end section -->
<!-- section -->

<!-- end section -->
<!-- section -->
{{--<div class="section padding_layout_1" style="padding: 50px 0;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="full">--}}
{{--                    <ul class="brand_list">--}}
{{--                        <li><img src="images/it_service/brand_icon1.png" alt="#" /></li>--}}
{{--                        <li><img src="images/it_service/brand_icon2.png" alt="#" /></li>--}}
{{--                        <li><img src="images/it_service/brand_icon3.png" alt="#" /></li>--}}
{{--                        <li><img src="images/it_service/brand_icon4.png" alt="#" /></li>--}}
{{--                        <li><img src="images/it_service/brand_icon5.png" alt="#" /></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- end section -->
<!-- Modal -->
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
