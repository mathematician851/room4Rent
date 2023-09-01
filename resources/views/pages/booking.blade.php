
@extends('layouts.master')
@section('title')
    Room4Rent - Booking
@stop
@section('content')

    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Choose Hostel</h2>
                    <p class="page-description">Take A Hostel / Room For Booking</p>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area======= --> 
    <div class="breadcrumbs-area bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="/">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Room4Rent</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== Apartments-area ====== --> 
    <div class="apartments-area four bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="apartment-tab-area">
                        <ul role="tablist" class="nav nav-tabs apartment-menu hidden-xs hidden-sm">
                            <li class="{{isset($_GET['desc']) || isset($_GET['asc']) || isset($_GET['low']) || isset($_GET['high'])?'':'active'}}">
                                <a href="{{route('booking')}}" >Rooms</a>
                            </li>
                            <li class="{{isset($_GET['desc'])!="" ?'active':''}}">
                                <a href="{{route('booking')}}?desc=Newest to oldest"  >Date<span>Newest to oldest</span></a>
                            </li>
                            <li class="{{isset($_GET['asc'])!="" ?'active':''}}">
                                <a href="{{route('booking')}}?asc=Older to newest" >Date <span>Older to newest</span> </a>
                            </li>
                            <li  class="{{isset($_GET['low'])!="" ?'active':''}}">
                                <a href="{{route('booking')}}?low=price" >Price<span>Low to high</span></a>
                            </li>
                            <li  class="{{isset($_GET['high'])!="" ?'active':''}}">
                                <a href="{{route('booking')}}?high=price">Price<span>high to low</span></a>
                            </li>
                            <li class="pull-right">
                                <a href="#" role="tab" class="dropdown-toggle" data-toggle="dropdown">Category<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach($locations as $location)
                                        <li><a href="{{route('booking')}}?location={{$location->id}}">{{$location->name}}</a></li>
                                    @endforeach


                                </ul>
                            </li><!-- /.pull-right -->

                            <li class="pull-right">
                                <a href="#" role="tab" class="dropdown-toggle" data-toggle="dropdown">Type<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('booking')}}?type={{1}}">Male</a></li>
                                    <li><a href="{{route('booking')}}?type={{2}}">Female</a></li>

                                </ul>
                            </li><!-- /.pull-right -->
                        </ul>
                        <form class="hidden-md hidden-lg">
                            <select class="apartment-menu-mobile">
                                <option value='{{route('booking')}}'>Rooms</option>
                                <option value='{{route('booking')}}?desc=Newest to oldest"'>Date Newest to oldest</option>
                                <option value='{{route('booking')}}?asc=Newest to oldest"'>Date Older to newest</option>
                                <option value='{{route('booking')}}?low=price'>Price Low to high </option>
                                <option value='{{route('booking')}}?high=price'>Price high to low</option>
                                <optgroup label="Category">
                                    @foreach($locations as $location)
                                        <option value="{{route('booking')}}?location={{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </optgroup>

                                <optgroup label="Type">
                                    <option value="{{route('booking')}}?type={{1}}">{{"Male"}}</option>
                                    <option value="{{route('booking')}}?type={{2}}">{{"Female"}}</option>
                                </optgroup>
                            </select>
                        </form>
                        <div class="tab-content">
                            <div role="tabpanel" id="popular-apartment" class="tab-pane fade in active">

                                  @if(isset($_GET['location']) && $_GET['location'] != "")
                                    <div class="row">
                                        @foreach($loc as $hostel)
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

                                      @elseif(isset($_GET['type']) && $_GET['type'] !="")
                                    <div class="row">
                                        @foreach($type as $hostel)
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

                                @elseif(isset($_GET['desc']) && $_GET['desc'] !="")
                                    <div class="row">
                                        @foreach($desc as $hostel)
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

                                @elseif(isset($_GET['asc']) && $_GET['asc'] !="")
                                    <div class="row">
                                        @foreach($asc as $hostel)
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
                                @elseif(isset($_GET['low']) && $_GET['low'] !="")
                                    <div class="row">
                                        @foreach($low as $hostel)
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

                                @elseif(isset($_GET['high']) && $_GET['high'] !="")
                                    <div class="row">
                                        @foreach($high as $hostel)
                                            <div class="col-md-4 col-sm-6 col-xs-6">
                                                <div class="apartments-content">
                                                    <div class="image-content" style="width: 100% !important; height: 180px !important;">
                                                        <a href="{{route('hostel.details', $hostel->id)}}">
                                                            @foreach($hostel->images->take(1) as $image)
                                                                <img width="100" height="500" src="/photo/{{$image->photo}}" alt="apartment" /></a>

                                                        @endforeach
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
                                @else

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
                                  @endif

                                <a href="#" class="more-link default-template-gradient">Load More</a>
                            </div><!-- /.popular-apartment -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.apartment-tab-area -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.Apartments-area-->

    @stop

