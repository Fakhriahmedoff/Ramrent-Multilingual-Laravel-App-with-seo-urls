@extends('Front.Layout.master')
@section('content')
<div id="page-content" class="single-car-page">
<div class="divider-md" style="height: 78px;"></div>
<div class="divider-lg"></div>

<div class="container single-car">
    <div class="row">
        <div class="col-lg-6">
            <div
                style="--swiper-navigation-color: #fff;
                --swiper-pagination-color: #fff"
                class="swiper-container mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/storage/{{$car->thumbnail}}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/front/images/aveo.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/front/images/aveo.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/front/images/aveo.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/front/images/aveo.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/front/images/aveo.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/front/images/aveo.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/front/images/aveo.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/front/images/aveo.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/front/images/aveo.png" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper-container mySwiper">
                <div class="swiper-wrapper" id="gapped">
                    <div class="swiper-slide">
                        <button class="btn single-car-slider-btn"
                            style="background-image: url('/storage/{{$car->thumbnail}}');"> </button>
                    </div>
                    <div class="swiper-slide">
                        <button class="btn single-car-slider-btn"
                            style="background-image:
                            url('/storage/cars/May2021/K0OGM9mxnaeU7I27prg9.jpg');"> </button>
                    </div>
                    <div class="swiper-slide">
                        <button class="btn single-car-slider-btn"
                            style="background-image:
                            url('/front/images/aveo.png');"> </button>
                    </div>
                    <div class="swiper-slide">
                        <button class="btn single-car-slider-btn"
                            style="background-image:
                            url('/front/images/aveo.png');"> </button>
                    </div>
                 
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <h1 class="car-name">
                {{$car->model}}
            </h1>
            <h2 class="car-price">
                {{$car->price}} AZN / day
            </h2>
            <p class="context">
                Price for 2-3-day rent
            </p>
            <ul class="discounts">
                <li class="discount">
                   <span>5-10 day rent - 40 AZN/day (10% discount)</span>
                </li>
                <li class="discount">
                    <span>5-10 day rent - 40 AZN/day (10% discount)</span>
                </li>
                <li class="discount">
                    <span>5-10 day rent - 40 AZN/day (10% discount)</span>
                </li>
            </ul>
            <div class="divider-sm" style="height: 35px;"></div>
            <a href="#!" class="btn primary-action-button">
                Rent in Now!
            </a>
        </div>
    </div>
</div>
<div class="divider-md"></div>
<div class="divider-sm"></div>
<div class="container specs">
    <div class="row">
        <div class="single-spec">
            <img src="/front/images/calendar.png" alt=""> Year: {{$car->year}}
        </div>
        <div class="single-spec">
            <img src="/front/images/car2.png" alt=""> Class: {{$car->class}}
        </div>
        <div class="single-spec">
            <img src="/front/images/gas-station.png" alt=""> Fuel: {{$car->fuel}}
        </div>
        <div class="single-spec">
            <img src="/front/images/transmission.png" alt=""> Transmission:{{$car->transmission}}
            
        </div>
        <div class="single-spec">
            <img src="/front/images/motor.png" alt=""> Engine: {{$car->engine}} L
        </div>
        <div class="single-spec">
            <img src="/front/images/dollar-tag.png" alt=""> Price: {{$car->price}}/AZN day
        </div>
    </div>
</div>
<div class="divider-md"></div>
<div class="container requirements">
    <div class="row">
        <div class="single-requirement">
            <span>•</span> Depost: 24
        </div>
        <div class="single-requirement">
            <span>•</span> Minimum age: 24
        </div>
        <div class="single-requirement">
            <span>•</span> Passport
        </div>
        <div class="single-requirement">
            <span>•</span> Driving License
        </div>
        <div class="single-requirement">
            <span>•</span> Prepayment for rent
        </div>
        <div class="single-requirement">
            <span>•</span> Driving experience: 2 years
        </div>
    </div>
</div>
<div class="divider-md"></div>
<div class="car-class-wrapper">
    <div class="container">
        <div class="row title-holder text-center
            justify-content-flex-start">
            <h1 class="title-text">
                Rent a Car: Econom Class
            </h1>
        </div>

    </div>

</div>

<div class="splide products-slider" id="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <div class="product-cardbox">
                    <div class="image">
                        <img src="/front/images/aveo.png" alt="">
                    </div>
                    <div class="content">
                        <p class="car-title">
                            Chervrolet Aveo
                        </p>
                        <p class="car-year">
                            2020 year
                        </p>
                        <p class="car-price">
                            45 AZN / day
                        </p>
                        <a href="#" class="primary-action-button">
                            Rent a Car
                        </a>
                    </div>
                </div>
            </li>

        </ul>
        <br>
        <a href="#" class="more-action-button">
            Show All
        </a>
    </div>
</div>
<div class="divider-md"></div>
@endsection