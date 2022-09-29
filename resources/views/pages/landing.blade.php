@extends('layouts.master')

@section('title','Hotel goeSyip')

@section('LandingPage')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="/assets/img/banner.png" style="width:100%; height: 500px;" alt="First slide" alt="Second slide">
      <div class="carousel-caption">
              <img src="../assets/img/logo.png" alt="logo" width="90" style="margin-top:-580px" class=" rounded-circle">
        <h1 class="font" style="margin-top:-250px;font-size:75px">Hotel Goesyip</h1>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/banner2.png" style="width:100%; height: 500px;" alt="First slide" alt="Second slide">
      <div class="carousel-caption">
      <img src="../assets/img/logo.png" alt="logo" width="90" style="margin-top:-580px" class=" rounded-circle">
      <h1 class="font" style="margin-top:-250px;font-size:75px">Vacation & Spa</h1>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/banner3.png" style="width:100%; height: 500px;" alt="First slide" alt="Second slide">
      <div class="carousel-caption">
      <img src="../assets/img/logo.png" alt="logo" width="90" style="margin-top:-580px" class=" rounded-circle">
      <h1 class="font" style="margin-top:-250px;font-size:75px">Relax & Chill</h1>
    </div>
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

<section class="service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="assets/img/wifi.png">
                                </div>
                                <h4><a style="font:18px lato,sans-serif;">FREE WIFI</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="assets/img/key.png">
                                </div>
                                <h4><a style="font:18px lato,sans-serif;">ROOM SERVICE</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="assets/img/car.png">
                                </div>
                                <h4><a style="font:18px lato,sans-serif;">FREE PARKING</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="assets/img/user.png">
                                </div>
                                <h4><a style="font:18px lato,sans-serif;">CUSTOMER SUPPORT</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection