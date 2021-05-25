@extends('Front.Layout.master')
@section('content')
<div id="page-content">


    <div class="divider-md" style="height: 78px;"></div>
    <div class="divider-sm" style="height: 40px;"></div>
    <div class="container">
        <div class="row site-breadcrumbs justify-content-flex-start">
            @include('Front.Widgets.breadcrumb')
        </div>
        <div class="divider-sm"></div>
        <div class="row text-center justify-content-center">
            <h1 class="title-text">
                Contacts
            </h1>
        </div>
    </div>
    <div class="container-fluid contact-links">
        <div class="row">
            <div class="contact-link">
                <img src="/front/images/Location.png" alt="">
                <p class="content-link">
                    Visit Us
                </p>
            </div>
            <div class="contact-link">
                <img src="/front/images/whatsapp.png" alt="">
                <p class="content-link">
                    Write us via Whatsapp
                </p>
            </div>
            <div class="contact-link">
                <img src="/front/images/Message.png" alt="">
                <p class="content-link">
                    Email Us
                </p>
            </div>
        </div>
    </div>
    <div class="divider-md"></div>
    <div class="container-fluid contact-map">
        <div class="row">
            <div class="col-lg-6 contact-details">
                <div class="detail-card">
                    <ul>
                        <li class="detail-link">
                            <a href=""> <img src="/front/images/phone.svg" alt=""> +994
                                (70) 700 44 44</a>
                        </li>
                        <li class="detail-link">
                             <a href=""><img src="/front/images/phone.svg" alt=""> +994
                                (70) 700 44 44</a>
                        </li>
                        <li class="detail-link">
                             <a href=""><img src="/front/images/phone.svg" alt=""> +994
                                (70) 700 44 44</a>
                        </li>
                        <li class="detail-link">
                           <a href=""> <img src="/front/images/phone.svg" alt=""> +994
                                (70) 700 44 44</a>
                        </li>
                        <li class="detail-link">
                           <a href=""> <img src="/front/images/mail.svg" alt=""> info@ramservis.az</a>
                        </li>
                        <li class="detail-link">
                            <a
                                href=""><img src="/front/images/location.svg" alt=""> 27/A Akhmad Rajabli, "Сhomerd
                                Business Center" </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="/front/images/mep.png" alt="">
            </div>
        </div>
    </div>
    <div class="divider-md"></div>
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
</div>
@endsection