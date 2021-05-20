@extends('Front.Layout.master')
@include('Front.Widgets.nav')
@section('content')
<div class="divider-md" style="height: 78px;"></div>
<div id="page-content">

<div class="container-fluid classes">
    <div class="row">
        <div class="class-holder">
            <div class="image-wrapper">
                <img src="/front/images/econom.jpg" alt="">
            </div>
            <p class="class-title">
                Econom
            </p>

        </div>
        <div class="class-holder">

            <div class="image-wrapper">
                <img src="/front/images/eco.jpg" alt="">
            </div>
            <p class="class-title">
                Business
            </p>

        </div>
        <div class="class-holder">

            <div class="image-wrapper">
                <img src="/front/images/premium.jpg" alt="">
            </div>
            <p class="class-title">
                Premium
            </p>

        </div>
        <div class="class-holder">

            <div class="image-wrapper">
                <img src="/front/images/bus.jpg" alt="">
            </div>
                <p class="class-title">
                    Buses&minivans
                </p>
       
        </div>
        <div class="class-holder">

            <div class="image-wrapper">
                <img src="/front/images/cattouch.jpg" alt="">
            </div>
                <p class="class-title">
                    Crossovers & SUVs
                </p>
            
        </div>

    </div>
</div>
<div class="divider-sm"></div>
<div class="container cars-list mb-4">
    <div class="row site-breadcrumbs justify-content-flex-start " >
            <a href="#"  class="single-breadcrumb">Home</a> / <a href="#" class="single-breadcrumb active">Rental Cars</a>
    </div>
    <div class="row title-holder text-center
        justify-content-center ">
        <h1 class="title-text">
            Rent a Car: Econom Class
        </h1>
    </div>

    <div class="row tags-row">
        <div class="tags">
            <a href="#" class="tag"> All classes </a>/
            <a href="#" class="tag active"> Econom </a>/
            <a href="#" class="tag"> Bussines </a>/
            <a href="#" class="tag"> Premium </a>/
            <a href="#" class="tag"> Crossovers&SUVs </a>/
            <a href="#" class="tag">Buses&minivans</a>
        </div>
    </div>
</div>

<div class="container products-list">
    <div class="row">
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
                <a href="#!" class="btn primary-action-button">
                    Rent a Car
                </a>
            </div>
        </div>
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
                <a href="#!" class="btn primary-action-button">
                    Rent a Car
                </a>
            </div>
        </div>
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
                <a href="#!" class="btn primary-action-button">
                    Rent a Car
                </a>
            </div>
        </div>
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
                <a href="#!" class="btn primary-action-button">
                    Rent a Car
                </a>
            </div>
        </div>
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
                <a href="#!" class="btn primary-action-button">
                    Rent a Car
                </a>
            </div>
        </div>
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
                <a href="#!" class="btn primary-action-button">
                    Rent a Car
                </a>
            </div>
        </div>
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
                <a href="#!" class="btn primary-action-button">
                    Rent a Car
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="divider-md"></div>
@endsection