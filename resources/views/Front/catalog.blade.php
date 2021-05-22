@extends('Front.Layout.master')
@include('Front.Widgets.nav')
@section('content')
<div class="divider-md" style="height: 78px;"></div>
<div id="page-content">

@include('Front.Widgets.classes')
<div class="divider-sm"></div>
<div class="container cars-list mb-4">
    <div class="row site-breadcrumbs justify-content-flex-start " >
            <a href="#"  class="single-breadcrumb">Home</a> / <a href="#" class="single-breadcrumb active">Rental Cars</a>
    </div>
    <div class="row title-holder text-center
        justify-content-center ">
        <h1 class="title-text" id="content">
            Rent a Car: Econom Class
        </h1>
    </div> 
    <div class="row tags-row">
        <div class="tags">
          @include('Front.Widgets.tags')
        </div>
    </div>
</div>

<div class="container products-list" >
    <div class="row" >
        @foreach ($cars as $car)

        <div class="product-cardbox">
            <div class="image">
                <img width="100%" src="/storage/{{$car->thumbnail}}" alt="">
            </div>
            <div class="content">
                <p class="car-title">
                    {{$car->model}}
                </p>
                <p class="car-year">
                    {{$car->year}} year
                </p>
                <p class="car-price">
                    {{$car->price}} AZN / day
                </p>
                
                <a href="/{{App::getLocale()}}/{{$carseo}}/{{$car->slug}}" class="btn primary-action-button">
                    @lang('translate.rent-button')
                </a>
            </div>
        </div>

        @endforeach
        
        
        </div>
    </div>
</div>
<div class="divider-md"></div>
@endsection