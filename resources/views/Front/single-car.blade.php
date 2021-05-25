@extends('Front.Layout.master')
@section('content')
<div id="page-content" class="single-car-page">
<div class="divider-md" style="height: 120px;"></div>
<div class="container satisification">
    <div class="row site-breadcrumbs justify-content-flex-start " >
        @include('Front.Widgets.breadcrumb')
</div>
</div>
<div class="divider-sm"></div>
@php $images =json_decode($car->images) @endphp

 

<div class="container single-car">
    <div class="row">
        <div class="col-lg-6">
            <div
                style="--swiper-navigation-color: #fff;
                --swiper-pagination-color: #fff"
                class="swiper-container mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{Voyager::image($car->thumbnail)}}" />
                    </div>
                    @if($images == null)
                  
                    @else
                    @foreach ($images as $image)
                    <div class="swiper-slide">
                        <img src="{{Voyager::image($image)}}" />
                    </div>
                    @endforeach
                    
                    @endif
                   
                    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper-container mySwiper" style="margin-top: 10px">
                <div class="swiper-wrapper" id="gapped">
                    <div class="swiper-slide">
                        <button class="btn single-car-slider-btn"
                            style="background-image: url('{{Voyager::image($car->thumbnail)}}');"> </button>
                    </div>
              
                
                  @if($images == null)
                  
                  @else
                  @foreach ($images as $image)
                  <div class="swiper-slide">
                    <button class="btn single-car-slider-btn"
                        style="background-image:
                        url('{{ Voyager::image($image)}}');"> </button>
                    </div>
                  @endforeach
                  
                  @endif
                   
          
                   
                  
                 
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <h1 class="car-name">
              {{$car->category->name}}  {{$car->model}}
            </h1>
            <h2 class="car-price">
                {{$car->price}} AZN / day
            </h2>
            <p class="context">
                Price for 2-3-day rent
            </p>
            <ul class="discounts">
                <li class="discount">
                   <span>5-10 day rent - {{round(($car->price)*0.9)}} AZN/day (10% discount)</span>
                </li>
                <li class="discount">
                    <span>10-15 day rent - {{round(($car->price)*0.8)}} AZN/day (20% discount)</span>
                </li>
                <li class="discount">
                    <span>15-30 day rent - {{round(($car->price)*0.7)}} AZN/day (30% discount)</span>
                </li>
            </ul>
            <div class="divider-sm" style="height: 15px;"></div>
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
                    @foreach ($econom as $eco)
        <li class="splide__slide">
            <div class="product-cardbox">
                <div class="image" style="background-image: url('{{Voyager::image($eco->thumbnail)}}')">
                
                </div>
                <div class="content">
                    <p class="car-title">
                    {{$eco->category->name}} {{$eco->model}}
                    </p>
                    <p class="car-year">
                        {{$eco->year}} year
                    </p>
                    <p class="car-price">
                        {{$eco->price}} AZN / day
                    </p>
                    <a href="/{{App::getLocale()}}/{{$carseo}}/{{$eco->slug}}" class="btn primary-action-button">
                        @lang('translate.rent-button')
                    </a>
                </div>
            </div>
        </li>
        @endforeach
        </ul>
        <br>
        <a href="#" class="more-action-button">
            Show All
        </a>
    </div>
</div>
<div class="divider-md"></div>
@endsection