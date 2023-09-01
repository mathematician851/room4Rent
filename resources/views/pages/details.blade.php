
@extends('layouts.master')
@section('content')


<!-- ====== Breadcrumbs Area====== -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                       <span class="first-item">
                        <a href="/">Home</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">{{$data->name}}</span>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->

<!-- ====== Apartments-Single-Area ======= -->
<div class="apartment-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="corousel-gallery-content">
                    <div class="gallery">
                        <div class="full-view owl-carousel">
                            <a class="item image-pop-up" href="/photo/{{$data->images[0]->photo}}">
                                <img src="/photo/{{$data->images[0]->photo}}" alt="corousel">
                            </a>
                            @if($data->images->count() > 0)
                           @foreach($data->images as $key=>$image)
                               @if($key > 0)

                                    <a class="item image-pop-up" href="/photo/{{$image->photo}}">
                                        <img src="/photo/{{$image->photo}}" alt="corousel">
                                    </a>

                                @endif
                            @endforeach
                                @endif
                            </div>

                        <div class="list-view owl-carousel">
                            @if($data->images->count() > 0)
                            @foreach($data->images as $key=>$image)
                                @if($key > 0)
                            <div class="item">
                                <img src="/photo/{{$image->photo}}" alt="corousel-image">
                            </div>

                                @endif
                            @endforeach
                                @endif

                        </div>
                    </div> <!-- /.gallery-two -->
                </div> <!-- /.corousel-gallery-content -->

                <div class="family-apartment-content mobile-extend">
                    <div class="tb">
                        <div class="tb-cell">
                            <h3 class="apartment-title">{{$data->name}}</h3>
                        </div><!-- /.tb-cell -->
                        @if($data->rooms->count() > 0)
                        <div class="tb-cell">
                            <p class="pull-right rent">Rent/Month: GHS {{$data->rooms[0]->amount}}. 00</p>
                        </div><!-- /.tb-cell -->
                            @endif
                    </div><!-- /.tb -->
                    <div class="clearfix"></div><!-- /.clearfix -->
                    <p class="apartment-description default-gradient-before">{{$data->rooms->count()}}    Rooms.  <i class="fa fa-map-marker"></i> {{$data->campus->name}}</p>



                    <div class="property-details">
                        <h3>Hostel / House  Details </h3>
                        {!! $data->description !!}
                    </div><!-- /.Property -->
                    <div class="apartment-overview">

                    </div><!-- /.overview -->
                    <div class="indoor-features">

                    </div><!-- /.indoor -->
                </div><!-- /.family-apartment-content -->
                <div class="hidden-md hidden-lg text-center extend-btn">
                        <span class="extend-icon">
                            <i class="fa fa-angle-down"></i>
                        </span>
                </div>
            </div> <!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="apartment-sidebar">
                    <div class="widget_rental_search clerafix">
                        <div class="form-border gradient-border">
                            <form action="https://htmlguru.net/house-rent/booking.html" method="get" class="advance_search_query booking-form">
                                <div class="form-bg seven">
                                    <div class="form-content">
                                        <h2 class="form-title">Book  {{$data->name}}</h2>
{{--                                        <div class="form-group">--}}
{{--                                            <label>Full Name</label>--}}
{{--                                            <input type="text" name="FirstName" placeholder="Full name">--}}
{{--                                        </div><!-- /.form-group -->--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Phone Number</label>--}}
{{--                                            <input type="tel" name="phone number" placeholder="+99(99)9999-9999">--}}
{{--                                        </div><!-- /.form-group -->--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Email Address</label>--}}
{{--                                            <input type="email" name="Email" placeholder="example@domain.com">--}}
{{--                                        </div><!-- /.form-group -->--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Family Member</label>--}}
{{--                                            <input type="number" step="1" min="1" max="100" name="quantity" value="1" title="Qty" size="4" class="input-text">--}}
{{--                                        </div><!-- /.form-group -->--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Children</label>--}}
{{--                                            <input type="number" step="1" min="1" max="100" name="quantity" value="1" title="Qty" size="4" class="input-text">--}}
{{--                                        </div><!-- /.form-group -->--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Your Message</label>--}}
{{--                                            <textarea name="message" placeholder="Message" class="form-controller"></textarea>--}}
{{--                                        </div><!-- /.form-group -->--}}
                                        @if(auth()->user())
                                            <div class="form-group">
                                                <a  href="{{url('student/allocate?h=')}}{{$data->id}}" class="button default-template-gradient button-radius">Request Booking</a>
                                            </div><!-- /.form-group -->
                                        @else
                                            <div class="form-group">
                                                <a href="{{route('user.login')}}"  class="button default-template-gradient button-radius">Login / Register</a>
                                            </div><!-- /.form-group -->
                                            @endif
                                    </div><!-- /.form-content -->
                                </div><!-- /.form-bg -->
                            </form> <!-- /.advance_search_query -->
                        </div><!-- /.form-border -->
                    </div><!-- /.widget_rental_search -->

                    <div class="apartments-content seven post clerafix">
                        <div class="image-content">
{{--                            <a href="#"><img class="overlay-image" src="assets/images/apartment-ad.png" alt="about" /></a>--}}
                        </div><!-- /.image-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.apartment-sidebar -->
            </div> <!-- .col-md-4 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.appartment-single-area -->

{{--<!-- ====== Apartments-Related-area ====== -->--}}
{{--<div class="apartments-related-area bg-gray-color">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="heading-content-one">--}}
{{--                    <h2 class="title default-text-gradient">Related apartments</h2>--}}
{{--                </div><!-- /.Apartments-heading-content -->--}}
{{--            </div><!-- /.col-md-12 -->--}}
{{--        </div><!-- /.row -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4 col-sm-6 col-xs-6">--}}
{{--                <div class="apartments-content">--}}
{{--                    <div class="image-content">--}}
{{--                        <a href="#"><img src="assets/images/apartment/apartment-one.png" alt="apartment" /></a>--}}
{{--                    </div><!-- /.image-content -->--}}

{{--                    <div class="text-content">--}}
{{--                        <div class="top-content">--}}
{{--                            <h3><a href="#">Family Apartment</a></h3>--}}
{{--                            <span><a href="#"><i class="fa fa-map-marker"></i></a> <a href="#">Dhanmondi, Dhaka</a>  </span>--}}
{{--                        </div><!-- /.top-content -->--}}
{{--                        <div class="bottom-content clearfix">--}}
{{--                            <div class="meta-bed-room">--}}
{{--                                <i class="fa fa-bed"></i> 3 Bedrooms--}}
{{--                            </div>--}}
{{--                            <div class="meta-bath-room">--}}
{{--                                <i class="fa fa-bath"></i>2 Bathroom--}}
{{--                            </div>--}}
{{--                            <span class="clearfix"></span>--}}
{{--                            <div class="rent-price pull-left">--}}
{{--                                $200--}}
{{--                            </div>--}}
{{--                            <div class="share-meta dropup pull-right">--}}
{{--                                <ul>--}}
{{--                                    <li class="dropup">--}}
{{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>--}}
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="fa fa-star-o"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.bottom-content -->--}}
{{--                    </div><!-- /.text-content -->--}}
{{--                </div><!-- /.partments-content -->--}}
{{--            </div><!-- /.col-md-4 -->--}}

{{--            <div class="col-md-4 col-sm-6 col-xs-6">--}}
{{--                <div class="apartments-content">--}}
{{--                    <div class="image-content">--}}
{{--                        <a href="#"><img src="assets/images/apartment/apartment-two.png" alt="apartment" /></a>--}}
{{--                    </div><!-- /.image-content -->--}}

{{--                    <div class="text-content">--}}
{{--                        <div class="top-content">--}}
{{--                            <h3><a href="#">Family Apartment</a></h3>--}}
{{--                            <span><a href="#"><i class="fa fa-map-marker"></i></a> <a href="#">Dhanmondi, Dhaka</a>  </span>--}}
{{--                        </div><!-- /.top-content -->--}}
{{--                        <div class="bottom-content clearfix">--}}
{{--                            <div class="meta-bed-room">--}}
{{--                                <i class="fa fa-bed"></i> 3 Bedrooms--}}
{{--                            </div>--}}
{{--                            <div class="meta-bath-room">--}}
{{--                                <i class="fa fa-bath"></i>2 Bathroom--}}
{{--                            </div>--}}
{{--                            <span class="clearfix"></span>--}}
{{--                            <div class="rent-price pull-left">--}}
{{--                                $200--}}
{{--                            </div>--}}
{{--                            <div class="share-meta dropup pull-right">--}}
{{--                                <ul>--}}
{{--                                    <li class="dropup">--}}
{{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>--}}
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="fa fa-star-o"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.bottom-content -->--}}
{{--                    </div><!-- /.text-content -->--}}
{{--                </div><!-- /.partments-content -->--}}
{{--            </div><!-- /.col-md-4 -->--}}

{{--            <div class="clearfix hidden-md hidden-lg"></div>--}}

{{--            <div class="col-md-4 col-sm-6 col-xs-6">--}}
{{--                <div class="apartments-content">--}}
{{--                    <div class="image-content">--}}
{{--                        <a href="#"><img src="assets/images/apartment/apartment-three.png" alt="apartment" /></a>--}}
{{--                    </div><!-- /.image-content -->--}}

{{--                    <div class="text-content">--}}
{{--                        <div class="top-content">--}}
{{--                            <h3><a href="#">Family Apartment</a></h3>--}}
{{--                            <span><a href="#"><i class="fa fa-map-marker"></i></a> <a href="#">Dhanmondi, Dhaka</a>  </span>--}}
{{--                        </div><!-- /.top-content -->--}}
{{--                        <div class="bottom-content clearfix">--}}
{{--                            <div class="meta-bed-room">--}}
{{--                                <i class="fa fa-bed"></i> 3 Bedrooms--}}
{{--                            </div>--}}
{{--                            <div class="meta-bath-room">--}}
{{--                                <i class="fa fa-bath"></i>2 Bathroom--}}
{{--                            </div>--}}
{{--                            <span class="clearfix"></span>--}}
{{--                            <div class="rent-price pull-left">--}}
{{--                                $200--}}
{{--                            </div>--}}
{{--                            <div class="share-meta dropup pull-right">--}}
{{--                                <ul>--}}
{{--                                    <li class="dropup">--}}
{{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>--}}
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="fa fa-star-o"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.bottom-content -->--}}
{{--                    </div><!-- /.text-content -->--}}
{{--                </div><!-- /.partments-content -->--}}
{{--            </div><!-- /.col-md-4 -->--}}
{{--        </div><!-- /.row -->--}}
{{--    </div><!-- /.container -->--}}
{{--</div><!-- /.Apartments-Related-area-->--}}

<!-- ====== Call To Action ======== -->
<div class="call-to-action default-template-gradient">
    <div class="container">
        <div class="row tb">
            <div class="col-md-6 col-sm-6 tb-cell">
                <div class="contact-left-content">
                    <h3>Do you want to Rent your House</h3>
                    <h4>Call us and list your property here</h4>
                </div><!-- /.contact-left-content -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-sm-6 tb-cell">
                <div class="contact-right-content">
                    <h4><a href="#">+880123654987<span>company@gmail.com</span></a></h4>
                    <a href="#" class="button">Contact us</a>
                </div><!-- /.contact-right-content -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.call-to-action -->

<!-- ====== Contact Area ====== -->
<div class="contact-area">
    <div class="container-large-device">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-two available">
                        <h2 class="title">We Are Available<br/> For You 24/7</h2>
                        <h5 class="sub-title">Our online support service is always 24 Hours</h5>
                    </div><!-- /.testimonial-heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-7">
                    <div class="map-left-content">
                        <iframe width="600" height="350" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC871wKM6aoCLSV_pT3xBVsYzNGXaDh7Pw&amp;q=121King+St,Melbourne+VIC+3000,Australia" allowfullscreen="allowfullscreen"></iframe>
                    </div><!-- /.mapl-left-content -->
                </div><!-- /.col-md-7 -->
                <div class="col-md-5">
                    <div class="map-right-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-address-book"></i>Address</h4>
                                    <p>112/B - Road 121, King/St Melbourne Australia</p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-envelope"></i>Mail</h4>
                                    <p>yourmail@domain.com houserent@domain.com</p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-phone-square"></i>Call</h4>
                                    <p>+99 0215469875 <br/>666 35874692050</p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                    <div class="social-icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div><!-- /.Social-icon -->
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.map-right-content -->
                </div><!-- /.col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div><!-- /.contact-area -->

@stop