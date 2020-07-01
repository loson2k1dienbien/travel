@extends('User/layout/main')
@section('content')

   <!-- 404-content start-->
    <section id="for-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="for-img wow fadeIn" data-wow-duration="2.5s">
                        <img src="img/for.png" alt="img">
                    </div>
                    <div class="for-text-btn">
                        <h4>LOOKS LIKE YOU LOST YOUR WAY HOME</h4>
                    </div>
                    <div class="for-btn">
                        <a href="index.html" class="btn for-pag-btn">Go TO HOME PAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404-content end-->

    <!-- Scroll to top-->
    <div class="to-top pos-rtive">
         <a onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Scroll to top-->

@endsection
