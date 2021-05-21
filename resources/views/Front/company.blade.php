@extends('Front.Layout.master')
@section('content')
<div id="page-content">
<div class="divider-md" style="height: 78px;"></div>

    <div class="container">
     
    </div>
    <div class="satisfaction-container-wrapper">
        
        <div class="container satisification">
            <div class="row site-breadcrumbs justify-content-flex-start " >
              @include('Front.Widgets.breadcrumb')
        </div>
        <div class="divider-sm"></div>
            <div class="row text-center justify-content-center">
                <h1 class="title-text">
                    Rent a Car Baku Ram Servis
                </h1>
            </div>
          
            <div class="row stats">
                <div class="holder">
                    <p class="number">
                        18+
                    </p>
                    <p class="text">
                        years
                    </p>
                </div>
                <div class="holder">
                    <p class="number">
                        18+
                    </p>
                    <p class="text">
                        customer satisfaction
                    </p>
                </div>
                <div class="holder">
                    <p class="number">
                        18+
                    </p>
                    <p class="text">
                        more cars
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider-md"></div>
    <div class="container-fluid about-text company-page">
        <div class="row">
            <div class="col-lg-6 first">
                <img src="/front/images/car.png" alt="">
            </div>
            <div class="col-lg-6 second">             
                <div class="main-content">
                    <p>The company “Ram Servis” – Rent a Car Baku» was founded in 2003 and since inception is taking a niche in the automobile business of Azerbaijan.</p>
                    <p>The company “Ram Servis” – Rent a Car Baku is pleased to offer its services to the citizens and guests of our country.</p>
                    <p>The time to sign a contract takes only 10 minutes. And the car is yours! Park car company  “Ram Servis” – rent a car in Baku presented a full range of cars.</p>
                </div>    
            </div>
        </div>
    </div>
    <div class="container-fluid about-text company-page">
        <div class="row">
            <div class="col-lg-6 second">
                <div class="main-content">
                    <p>The company “Ram Servis” – Rent a Car Baku» was founded in 2003 and since inception is taking a niche in the automobile business of Azerbaijan.</p>
                    <p>The company “Ram Servis” – Rent a Car Baku is pleased to offer its services to the citizens and guests of our country.</p>
                    <p>The time to sign a contract takes only 10 minutes. And the car is yours! Park car company  “Ram Servis” – rent a car in Baku presented a full range of cars.</p>
                </div>
            </div>
            <div class="col-lg-6 first" style="padding-right: 0px !important;">
                <img src="/front/images/cruze.png" alt="">
            </div>
        </div>
    </div>
    <div class="car-class-wrapper locations">
        <div class="container">
            <div class="row title-holder text-center
                justify-content-center">
                <h1 class="title-text">
                    Our Locations
                </h1>
            </div>
            <div class="row">
                <div class="location-card">
                    <img src="/front/images/locationicon.png" alt="">
                    <p class="text">
                        Main office
                    </p>
                </div>
                <div class="location-card">
                    <img src="/front/images/locationicon.png" alt="">
                    <p class="text">
                        Heydar Aliyev International Airport
                    </p>
                </div>
                <div class="location-card">
                    <img src="/front/images/locationicon.png" alt="">
                    <p class="text">
                        Gyandzha Airport
                    </p>
                </div>
                <div class="location-card">
                    <img src="/front/images/locationicon.png" alt="">
                    <p class="text">
                        Gabala <br> International Airport
                    </p>
                </div>
                <div class="location-card">
                    <img src="/front/images/locationicon.png" alt="">
                    <p class="text">
                        Quba city
                    </p>
                </div>
                <div class="location-card">
                    <img src="/front/images/locationicon.png" alt="">
                    <p class="text">
                        Quba city
                    </p>
                </div>
            </div>

        </div>
        <div class="divider-md"></div>
    </div>
@endsection