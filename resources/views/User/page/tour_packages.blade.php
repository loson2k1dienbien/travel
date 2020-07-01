@extends('User/layout/main')
@section('content')

    <!-- tour-banner start-->
    <section id="tour-packes">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-text  wow zoomIn" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>Tour Packges</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="index.html">Home</a>
                                <span>/</span>
                                <a href="#!">Tour Packges</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  tour-banner end-->


    <!-- Ab start-->
    <section id="ab-home" class="travel-pac">
        <div class="heading">
            <h2>ab-section</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 main-com">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Search Tour</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">
                                <i class="fas fa-city amr"></i> Hotel
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="select-box">
                                            <span class="sec-po"><i class="fas fa-map-marker-alt"></i></span>
                                            <select>
                                                <option value="0"> Destination</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                            </select>
                                            <i class="fas fa-angle-down map-io"></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="booking-info">
                                            <div id="datepicker-2" class="input-group date"
                                                data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" placeholder="Check In">
                                                <span class="input-group-addon sec-po"><i
                                                        class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <i class="fas fa-angle-down map-io"></i>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <input class="form-control" type="text" placeholder="Check Out">
                                            <span class="input-group-addon sec-po"><i
                                                    class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <i class="fas fa-angle-down map-io"></i>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="select-box">
                                            <span class="sec-po"><i class="fas fa-bed"></i></span>
                                            <select>
                                                <option value="0"> Hotel</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                            </select>
                                            <i class="fas fa-angle-down map-io"></i>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="book-ctn">
                                        <a href="#!" class="btn btn-2 pad">Search Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="select-box">
                                            <span class="sec-po"><i class="fas fa-map-marker-alt"></i></span>
                                            <select>
                                                <option value="0"> Destination</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                            </select>
                                            <i class="fas fa-angle-down map-io"></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="booking-info">
                                            <div id="datepicker-3" class="input-group date"
                                                data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" placeholder="Check In">
                                                <span class="input-group-addon sec-po"><i
                                                        class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <i class="fas fa-angle-down map-io"></i>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div id="datepicker-4" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <input class="form-control" type="text" placeholder="Check Out">
                                            <span class="input-group-addon sec-po"><i
                                                    class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <i class="fas fa-angle-down map-io"></i>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="booking-info">
                                        <div class="select-box">
                                            <span class="sec-po"><i class="fas fa-bed"></i></span>
                                            <select>
                                                <option value="0"> Hotel</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                            </select>
                                            <i class="fas fa-angle-down map-io"></i>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="all-class">
                                        <div class="bugest-info">
                                            <span>
                                                Budget Now:
                                            </span>
                                        </div>
                                        <div class="buget">
                                            <span class="ranger-1"></span>
                                            <span class="ranger-2"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="book-ctn">
                                        <a href="#!" class="btn btn-2 pad">Search Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Ab end-->

    <!-- tour start-->
    <section id="tour-des">
        <div class="content-box can-if">
            <h6>Travel Express Provide</h6>
            <h2>Select your <span>Destination</span></h2>
            <p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin
                sed augue sed neque ultricies condimentum. </p>
        </div>
        <div class="container">
            <div class="row">
                @foreach($tour as $model)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="des-cov-1">

                        <div class="des-img-1" >
                            <a href="{{ route('User.tour_details',['id'=>$model->id]) }}"><img src="{{ url('public/upload/tour')}}/{{ $model->Image }}" alt="" ></a>
                        </div>

                        <div class="des-para">
                            <div class="dayt">

                                <h6><a href="tour-details.html">{{ $model->Name }}</a></h6>
                                <p><a href="#!">{{ $model->Duration }}day{{ $model->Price }}$</a></p>
                            </div>
                            <div class="real-dat-para">
                                <p>{!! $model->Content !!}</p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn">
                                    <a href="#!" class="btn btn-3" data-toggle="modal" data-target="#myModal">Book
                                        Now</a>
                                </div>
                                <div class="start-icon-des">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="des-cov-1">
                        <div class="des-img-1">
                            <a href="#!"><img src="img/d-2.png" alt=""></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6><a href="tour-details.html">Bhutan</a></h6>
                                <p><a href="#!">1day 160$</a></p>
                            </div>
                            <div class="real-dat-para">
                                <p>Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis
                                    sed</p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn">
                                    <a href="#!" class="btn btn-3" data-toggle="modal" data-target="#myModal">Book
                                        Now</a>
                                </div>
                                <div class="start-icon-des">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="des-cov-1">
                        <div class="des-img-1">
                            <a href="#!"><img src="img/d-3.png" alt=""></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6><a href="tour-details.html">Australia</a></h6>
                                <p><a href="#!">1day 160$</a></p>
                            </div>
                            <div class="real-dat-para">
                                <p>Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis
                                    sed</p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn">
                                    <a href="#!" class="btn btn-3" data-toggle="modal" data-target="#myModal">Book
                                        Now</a>
                                </div>
                                <div class="start-icon-des">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="des-cov-1 ">
                        <div class="des-img-1">
                            <a href="#!"><img src="img/d-4.png" alt=""></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6><a href="tour-details.html">Nepal</a></h6>
                                <p><a href="#!">1day 160$</a></p>
                            </div>
                            <div class="real-dat-para">
                                <p>Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis
                                    sed</p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn">
                                    <a href="#!" class="btn btn-3" data-toggle="modal" data-target="#myModal">Book
                                        Now</a>
                                </div>
                                <div class="start-icon-des">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="des-cov-1 ">
                        <div class="des-img-1">
                            <a href="#!"><img src="img/d-5.png" alt=""></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6><a href="tour-details.html">Span</a></h6>
                                <p><a href="#!">1day 160$</a></p>
                            </div>
                            <div class="real-dat-para">
                                <p>Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis
                                    sed</p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn">
                                    <a href="#!" class="btn btn-3" data-toggle="modal" data-target="#myModal">Book
                                        Now</a>
                                </div>
                                <div class="start-icon-des">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="des-cov-1">
                        <div class="des-img-1">
                            <a href="#!"><img src="img/d-6.png" alt=""></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6><a href="tour-details.html">Malaysia</a></h6>
                                <p><a href="#!">1day 160$</a></p>
                            </div>
                            <div class="real-dat-para">
                                <p>Proin nec efficitur nibh. Curabitur posuere aliquam arcu, et euismod felis sagittis
                                    sed</p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn">
                                    <a href="#!" class="btn btn-3" data-toggle="modal" data-target="#myModal">Book
                                        Now</a>
                                </div>
                                <div class="start-icon-des">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!--Model box-->

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="model-details">
                                    <h5>Travel Booking Form</h5>
                                    <div class="mdel-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="name">First name</label>
                                                <input type="text" class="form-control" placeholder="First Name"
                                                    id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="last-name">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name"
                                                    id="last-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="duse">Departure Date</label>
                                                <input type="text" name="date" class="form-control" id="duse">
                                            </div>
                                            <div class="form-group">
                                                <label for="deate-area-2">Return Date</label>
                                                <input type="text" name="date" class="form-control xDateContainer"
                                                    id="deate-area-2">
                                            </div>
                                            <div class="form-group mainm-sel">
                                                <label for="text" id="form-control">Guest:</label>
                                                <div class="select-box">
                                                    <span class="sec-po"></span>
                                                    <select id="text">
                                                        <option value="0">Number of Guest</option>
                                                        <option value="1">2</option>
                                                        <option value="2">3</option>
                                                        <option value="3">4</option>
                                                    </select>
                                                    <div class="serv-ivmf-2">
                                                        <i class="fas fa-angle-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="travel-tyepe">
                                                <div class="flex-type">
                                                    <label for="text">Travel Type</label>
                                                </div>
                                                <div class="check-box-many">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="defaultChecked1">
                                                        <label class="custom-control-label"
                                                            for="defaultChecked1">Economy</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="defaultChecked2">
                                                        <label class="custom-control-label"
                                                            for="defaultChecked2">Premium</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="defaultChecked3">
                                                        <label class="custom-control-label"
                                                            for="defaultChecked3">Business</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="defaultChecked4">
                                                        <label class="custom-control-label" for="defaultChecked4">High
                                                            Class</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sunb-btn-mod">
                                                <a href="#!" class="btn btn-3 widet-2">BOOKING NOW</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour start-->



    <!-- summery start-->
    <section id="summery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="all-space-to  wow zoomIn" data-wow-duration="1.5s">
                        <div class="summery-cover">
                            <h6>Summer Spcial</h6>
                            <p><span>25%</span> off</p>
                            <h6>Spend The best vaction with us</h6>
                            <h2>The nights of Thailand</h2>
                        </div>
                        <div class="all-spance">
                            <span>4days / 5nights</span>
                        </div>
                        <div class="all-span-btn-com">
                            <a href="tour-details.html" class="btn btn-2 mar-top">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- summery end-->

    <!-- team start-->
    <section id="home-team">
        <div class="content-box">
            <h6>Travel Guides, Tips & Advice</h6>
            <h2>Travel <span>Agents</span></h2>
            <p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin
                sed augue sed neque ultricies condimentum. </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="team-opa wow fadeIn" data-wow-duration="1s">
                        <div class="coa-app">
                            <img src="img/t-1.png" alt="">
                            <div class="team-overlay">
                                <div class="team-contact">
                                    <a href="#!" class="btn btn-4">HIRE ME</a>
                                    <h6>Jhon Doe</h6>
                                    <p>Turist Advisture</p>
                                    <div class="team-icon">
                                        <a href="#!"><i class="fab fa-facebook-f team-over no-te"></i></a>
                                        <a href="#!"><i class="fab fa-twitter team-over"></i></a>
                                        <a href="#!"><i class="fab fa-linkedin-in team-over"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="team-opa wow fadeIn" data-wow-duration="1.5s">
                        <div class="coa-app">
                            <img src="img/t-2.png" alt="">
                            <div class="team-overlay">
                                <div class="team-contact">
                                    <a href="#!" class="btn btn-4">HIRE ME</a>
                                    <h6>Jhon Doe</h6>
                                    <p>Turist Advisture</p>
                                    <div class="team-icon">
                                        <a href="#!"><i class="fab fa-facebook-f team-over no-te"></i></a>
                                        <a href="#!"><i class="fab fa-twitter team-over"></i></a>
                                        <a href="#!"><i class="fab fa-linkedin-in team-over"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="team-opa wow fadeIn" data-wow-duration="2s">
                        <div class="coa-app">
                            <img src="img/t-3.png" alt="">
                            <div class="team-overlay">
                                <div class="team-contact">
                                    <a href="#!" class="btn btn-4">HIRE ME</a>
                                    <h6>Jhon Doe</h6>
                                    <p>Turist Advisture</p>
                                    <div class="team-icon">
                                        <a href="#!"><i class="fab fa-facebook-f team-over no-te"></i></a>
                                        <a href="#!"><i class="fab fa-twitter team-over"></i></a>
                                        <a href="#!"><i class="fab fa-linkedin-in team-over"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="team-opa wow fadeIn" data-wow-duration="2.5s">
                        <div class="coa-app">
                            <img src="img/t-4.png" alt="">
                            <div class="team-overlay">
                                <div class="team-contact">
                                    <a href="#!" class="btn btn-4">HIRE ME</a>
                                    <h6>Jhon Doe</h6>
                                    <p>Turist Advisture</p>
                                    <div class="team-icon">
                                        <a href="#!"><i class="fab fa-facebook-f team-over no-te"></i></a>
                                        <a href="#!"><i class="fab fa-twitter team-over"></i></a>
                                        <a href="#!"><i class="fab fa-linkedin-in team-over"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team end-->

    <!-- testimonial-top start-->
    <section id="home-testimonial-top">
        <div class="content-box">
            <h6 class="color-1">Motion</h6>
            <h2 class="color-2">Watch Our <span> Video Tour</span></h2>
        </div>
    </section>
    <!-- testimonial-top end-->

    <!-- testimonial start-->
    <section id="home-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vt-img">
                        <img src="img/v-t.png" alt="">
                    </div>
                    <div class="video-play-test">
                        <a href="https://www.youtube.com/embed/Kb8CW3axqRE" data-width="800" data-height="880"
                            class="video-play-btn video-link"><i class="fas fa-play"></i></a>
                    </div>

                </div>
            </div>
            <div class="test-slider-home-1 owl-carousel owl-theme">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="test-monial-item ">
                                    <div class="test-heading">
                                        <h6>Lots of Smiles </h6>
                                        <h2>More Than 960+ People <span>Are Happy With Us.</span></h2>
                                    </div>
                                    <div class="test-flex">
                                        <p>“Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus
                                            alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum
                                            reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque
                                            dicta adipisci architecto culpa amet.”</p>
                                        <h6>Carry Bradshow</h6>
                                        <div class="start-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-5">
                                <div class="qyaty">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="test-moinal-ing-left">
                                    <img src="img/tytt.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="test-monial-item ">
                                    <div class="test-heading">
                                        <h6>Lots of Smiles </h6>
                                        <h2>More Than 960+ People <span>Are Happy With Us.</span></h2>
                                    </div>
                                    <div class="test-flex">
                                        <p>“Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus
                                            alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum
                                            reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque
                                            dicta adipisci architecto culpa amet.”</p>
                                        <h6>Lady Anais Torres</h6>
                                        <div class="start-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-5">
                                <div class="qyaty">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="test-moinal-ing-left">
                                    <img src="img/tv.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="test-monial-item ">
                                    <div class="test-heading">
                                        <h6>Lots of Smiles </h6>
                                        <h2>More Than 960+ People <span>Are Happy With Us.</span></h2>
                                    </div>
                                    <div class="test-flex">
                                        <p>“Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.
                                            Eos cumque dicta adipisci architecto culpa amet.”</p>
                                        <h6>Helen Park (Lena)</h6>
                                        <div class="start-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-5">
                                <div class="qyaty">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="test-moinal-ing-left">
                                    <img src="img/lol.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- testimonial end-->

    <!-- contact start-->
    <section id="home-contact">
        <div class="map-inner">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"
                width="600" height="450" allowfullscreen=""></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="contact-cover">
                        <div class="contact-heading">
                            <h2>Do You Have Any Questions?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula volutpat porta. Cras
                                in vulputate est</p>
                        </div>
                        <div class="info-office">
                            <div class="phone-deta">
                                <div class="phone-info">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                <div class="sams">
                                    <p>+124 (2486) 444</p>
                                    <p>+133 (4444) 878</p>
                                </div>
                            </div>
                            <div class="email-deta">
                                <div class="phone-info">
                                    <i class="flaticon-paper-plane"></i>
                                </div>
                                <div class="sams">
                                    <p>mail@example.com</p>
                                    <p>info@mail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name:" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Email:" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group nessage-text">
                                            <textarea name="message" id="message" rows="6" class="form-control"
                                                placeholder="Enter Your Message:" required></textarea>
                                        </div>
                                        <div class="contact-sub-btn">
                                            <a href="#!" class="btn submit contactsuccess">Submit</a>
                                        </div>
                                        <div class="sending-gif" style="display: none">
                                            <img src="img/loading.gif" alt="send-gif">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="success-msg alert alert-success" style="display: none">
                                <strong>Success!</strong> Email Send Succesfully.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end-->

   <!-- Scroll to top-->
    <div class="to-top pos-rtive">
        <a onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Scroll to top-->

@endsection
