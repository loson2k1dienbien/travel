@extends('User/layout/main')
@section('content')
    <!-- tour-banner start-->
    <section id="tour-packes-deatils">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="common-banner-text  wow zoomIn" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>Tour Details</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="index.html">Home</a>
                                <span>/</span>
                                <a href="#!">Tour Details</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour-banner end-->

    <!-- tour-details info-->
    <section id="tour-detailes-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="all-details-tour">

                        <div class="all-price">
                            <div class="tour-heading-detailse">

                                <h6>{{ $tour->category->CatName}}</h6>

                                <h2>Special <span>{{ $tour->Name }}</span></h2>

                                <div class="start-text-details">
                                    <div class="start-icon-deta">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                    <div class="revews">
                                        <h6>21 Review</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="price-tour">
                                <h2><span>$</span>150</h2>
                            </div>
                        </div>
                        <div class="tour-main-informa">
                            <h6>5 Day <span>|</span></h6>
                            <h6>18+ <span>|</span></h6>
                            <h6>20 People <span>|</span></h6>
                            <h6>Adventure <span>|</span></h6>
                            <h6>25 September</h6>
                        </div>
                        <div class="det-asor-img">
                            <section class="slide-wrapper">
                                <div class="container">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                  <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                  </ol>
                                                  <div class="carousel-inner">
                                                      @foreach($tour->tourimage as $val)
                                                    <div class="carousel-item active">

                                                      <img class="d-block w-100" src="{{ url('public/upload/tourimage')}}/{{ $val->Images }}" alt="First slide">
                                                    </div>
                                                      @endforeach
                                                    <div class="carousel-item">
                                                      <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                                                    </div>
                                                  </div>
                                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                  </a>
                                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                  </a>
                                                </div>
                                           {{--  <div class="carousel-item active">
                                                <div id="owl-demo" class="owl-carousel owl-theme">
                                                    @foreach($tour->tourimage as $val)
                                                  <div class="item"><img src="{{ url('public/upload/tourimage')}}/{{ $val->Images }}" alt="The Last of us"></div>
                                                   @endforeach
                                                </div>
                                            </div> --}}


                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="rweal-reat">
                            <h5>Tour Overview</h5>
                            <p>{!! $tour->Content !!}  </p>
                        </div>

                        <div class="packages-includ">
                            <h5>Package Included / Excluded</h5>
                            <div class="all-ul-includ">
                                <div class="right-includ">
                                    <ul>
                                        <li>
                                            <i class="far fa-check-circle"></i> Pick and Drop Service
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i> Car rental Service
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i> Party and Music Event
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i> Visit Most Best Palces
                                        </li>
                                    </ul>
                                </div>
                                <div class="right-includ left-includ">
                                    <ul>
                                        <li>
                                            <i class="fas fa-times-circle"></i> Insurance Service
                                        </li>
                                        <li>
                                            <i class="fas fa-times-circle"></i>Drinks
                                        </li>
                                        <li>
                                            <i class="fas fa-times-circle"></i>Mountaining
                                        </li>
                                        <li>
                                            <i class="fas fa-times-circle"></i> Race or any Sports Event
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="map-inclid">
                            <h5>Tour Location</h5>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"
                                width="600" height="450" allowfullscreen=""></iframe>
                        </div>
                        <div class="client-revews">
                            <h5>Our Clients Review</h5>
                            <div class="client-info-rev">
                                <div class="cliennt-img">
                                    <img src="img/cla-1.png" alt="">
                                </div>
                                <div class="clients-desnigation">
                                    <h5>Jessica Ana</h5>
                                    <p>Ut accumsan lorem scelerisque mauris congue posuere. Aliquam elementum fermentum
                                        accumsan. Mauris id blandit eros. Nullam in convallis dui. Nunc sit amet justo
                                        porta, euismod nisi at, vehicula ligula. Pellentesque ante orci, </p>
                                </div>
                            </div>
                            <div class="client-info-rev">
                                <div class="cliennt-img">
                                    <img src="img/cla-2.png" alt="">
                                </div>
                                <div class="clients-desnigation">
                                    <h5>Marry Smith</h5>
                                    <p>Ut accumsan lorem scelerisque mauris congue posuere. Aliquam elementum fermentum
                                        accumsan. Mauris id blandit eros. Nullam in convallis dui. Nunc sit amet justo
                                        porta, euismod nisi at, vehicula ligula. Pellentesque ante orci, </p>
                                </div>
                            </div>
                        </div>
                        <div class="client-start-comment">
                            <div class="all-women-heading">
                                <h3>Write a Review</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dtart-one">
                                        <div class="start-one-ras">
                                            <h6>Services</h6>
                                            <div class="stat-serv">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="start-one-ras">
                                            <h6>Hospitality</h6>
                                            <div class="stat-serv">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="start-one-ras">
                                            <h6>Cleanliness</h6>
                                            <div class="stat-serv">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="dtart-one">
                                        <div class="start-one-ras">
                                            <h6>Rooms</h6>
                                            <div class="stat-serv">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="start-one-ras">
                                            <h6>Comfort</h6>
                                            <div class="stat-serv">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="start-one-ras">
                                            <h6>Satisfaction</h6>
                                            <div class="stat-serv">
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
                            <div class="revs-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name:"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name:"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group nessage-text">
                                                <textarea name="message" id="message" rows="6" class="form-control"
                                                    placeholder="Enter Your Message:" required=""></textarea>
                                            </div>
                                            <div class="contact-sub-btn">
                                                <a href="#!" class="btn submit">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="bookoing-secrty">
                        <div class="all-pacj-dfgh">
                            <h6>Package Details</h6>
                        </div>
                        <div class="bookk0-natd-form">
                            <form action="#">
                                <div class="form-group">
                                    <label for="name">First name</label>
                                    <input type="text" class="form-control" placeholder="First Name" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" id="last-name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="date" class="form-control" placeholder="Email Address"
                                        id="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="date" class="form-control" placeholder="Phone Number"
                                        id="phone">
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
                                        <div class="serv-ivmf-2 book-in">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="travel-tyepe">
                                    <div class="flex-type">
                                        <label for="text">Total Price:</label>
                                    </div>
                                    <div class="check-box-many">
                                        <div class="total-price">
                                            <h3>$150</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="sunb-btn-naple">
                                    <a href="#!" class="btn submit widet">Submit</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour-details end-->
 <!-- Scroll to top-->
    <div class="to-top pos-rtive">
        <a onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Scroll to top-->

@endsection

