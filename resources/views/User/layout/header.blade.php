    <!-- preloader-->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader-->
    <!-- top header-->
    <div class="header-most-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-8 col-12">
                    <div class="main-flex-top">
                        <div class="email sel d-flex">
                            <div class="main-email-text d-flex">
                              <i class="fas fa-envelope" aria-hidden="true"></i>
                                <p>infp@a2z.com</p>
                            </div>
                            <div class="main-loc-text d-flex">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>78 5th Ave, New York, Ny 10011, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 col-12">
                    <div class="login-area">

                        <div class="User-log">
                            <i class="far fa-User-circle"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header end-->

    <!-- navber start-->
    <header id="top-heder-nav">
        <nav class="navbar navbar-expand-lg" data-toggle="sticky-onscroll">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link  active" href="{{ Route('User.home') }} ">Home</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link ">Trip Package</a>

                            <div class="dropdown-content">
                                <a href="{{ Route('User.tour_packages') }}">Tour-Packages</a>
                                <a href="">Tour-Details</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('User.service') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('User.gallery') }}">Gallery </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ Route('User.blog') }}">Blog</a>

                            <div class="dropdown-content">
                                <a href="{{ Route('User.blog_single') }}">Blog-single</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" >Pages</a>

                            <div class="dropdown-content">
                                <a href="{{ Route('User.about') }}">About</a>
                                <a href="{{ Route('User.faq') }}">Faqs</a>
                                <a href="{{ Route('User.contact') }}">Contact</a>
                                <a href="{{ Route('User.erro') }}">404 page</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="left-menu-pho">
                    <div class="icon-phon-men">
                       <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="phone-number-idel">
                        <h6><a href="tel:01994992011">1-1235-536-5896</a></h6>
                        <p>Toll Free & 24/7 Available</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- navber end-->
    <div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="model-details">
          <h5>Login Form</h5>
          <div class="mdel-form">
            <form action="" method= "POST"  enctype="multipart/form-data">
                {!! csrf_field() !!}
              <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" placeholder="Email" id="Email" name="Email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password"
                id="password" name="Password">
              </div>
              <div>
               <input type="checkbox" id="remember" name="remember" value="remember">
               <label for="remember"> Remember me</label><br>
             </div>
             <div class="sunb-btn-mod">
              <button type="submit" name="submit" class="btn btn-3 widet-2">Login</button>

            </div><br/>
            <div>
              <a style="padding-right: 5px">Don't have account?</a>
              <a href="#" data-toggle="modal" data-target="#myModal3">Sign up now!</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!--Modal sign up-->
<div class="modal fade" id="myModal3" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="model-details">
          <h5>Sign up Form</h5>
          <div class="mdel-form">
            <form action="#">
              <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" placeholder="Email" id="email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password"
                id="password">
              </div>
              <div>
                <label for="confirm-password">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm password"
                id="confirmpassword">
              </div><br/>
              <div class="sunb-btn-mod">
                <a href="#!" class="btn btn-3 widet-2">Sign up</a>
              </div><br/>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

