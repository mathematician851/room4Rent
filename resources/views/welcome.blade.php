@extends('layouts.master')
@section('title')
    Room4Rent
@stop
@section('content')

    <!-- ====== Slider Area ====== -->
    <div class="slider-area">
        <div class="pogoSlider">
            <div class="pogoSlider-slide overlay-gradient" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/slider-one.png);">
                <div class="container-slider one">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome room 4 Rent</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>

                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
            <div class="pogoSlider-slide  overlay-gradient" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/slider-one.png);">
                <div class="container-slider one">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome apartment Villa</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>

                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
        </div><!-- .pogoSlider -->
    </div><!-- /.slider-area -->

    <!-- ====== Call To Action ======= -->
    <div class="call-to-action style-two default-template-gradient">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="left-content">
                        <h3>Do you want to Rent your Room</h3>
                        {{--                    <h4>Call us and list your property here</h4>--}}
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-left">
                                    <h4><a href="#">+2438284533<span>company@gmail.com</span></a></h4>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="contact">
                                    <a href="#">Contact us</a>
                                </div><!-- /.contact-tight -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.slider-bottom-area -->

    <!-- ====== About Us Area ====== -->
    <div class="aboutus-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title">About Us</h2>
                        <h5 class="sub-title">Welcome to our Room Rent Company</h5>
                    </div><!-- /.heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-2">
                    <div class="tab-list">
                        <ul class="nav nav-tabs about-tab hidden-xs hidden-sm" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">About Company</a>
                            </li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Terms &amp; Condition</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
                            </li>
                        </ul>
                        <form class="hidden-md hidden-lg">
                            <select class="about-mobile">
                                <option value='0'>About Company</option>
                                <option value='1'>Terms &amp; Condition</option>
                                <option value='2'>Our specialty</option>
                                <option value='3'>Our specialty</option>
                            </select>
                        </form>
                    </div> <!-- /.tab-list -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-10">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active row" id="home">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                    <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul>
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="/assets/images/about-image.png" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.home -->

                        <div role="tabpanel" class="tab-pane fade row" id="profile">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                    <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul>
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="assets/images/about-image.png" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.profile -->

                        <div role="tabpanel" class="tab-pane fade row" id="messages">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                    <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul>
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="assets/images/about-image.png" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.messages -->
                    </div> <!-- /.tab-content -->
                </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.aboutus-area -->

    <!-- ====== Apartments Area ======= -->
    <div class="apartments-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one border">
                        <h2 class="title">Rooms &amp; Hostels</h2>
                        <h5 class="sub-title">Find Your Rooms, for your ability</h5>
                    </div><!-- /.Apartments-heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                @foreach($data as $hostel)
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content" style="width: 100% !important; height: 180px !important;">
                            <a href="{{route('hostel.details', $hostel->id)}}"><img width="100" height="500" src="/photo/{{$hostel->images[0]->photo}}" alt="apartment" /></a>
                        </div><!-- /.image-content -->

                        <div class="text-content">
                            <div class="top-content">
                                <h3><a href="{{route('hostel.details', $hostel->id)}}">{{$hostel->name}}</a></h3>
                                <span>
                                    <i class="fa fa-map-marker"></i>
                                    {{$hostel->campus->name}}
                                </span>
                            </div><!-- /.top-content -->
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-user"></i>  {{$hostel->type == 1 ? ' Male Only': ' Female Only'}}
                                </div>

                                <span class="clearfix"></span>

                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-4 -->

                <div class="clearfix hidden-md hidden-lg"></div>
                @endforeach


            </div><!-- /.row -->
            {{--        <a href="#" class="button nevy-button">All Apartments</a>--}}
        </div><!-- /.container -->
    </div><!-- /.Apartments-area-->


@stop