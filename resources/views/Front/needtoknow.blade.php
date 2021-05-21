@extends('Front.Layout.master')
@section('content')
<div id="page-content">
<div class="divider-md" style="height: 78px;"></div>
<div class="divider-sm" style="height: 40px;"></div>
<div class="container">
    <div class="row site-breadcrumbs justify-content-flex-start">
        <a href="#" class="single-breadcrumb">Home</a> / <a href="#"
            class="single-breadcrumb active">Need to Know</a>
    </div>
    <div class="divider-sm"></div>
    <div class="row text-center justify-content-center">
        <h1 class="title-text">
            Need to Know
        </h1>
    </div>
</div>
<div class="container-fluid about-text company-page ndn no-borders">

    <div class="row">
        <div class="col-lg-6 second">
            <div class="main-content">
                <p>To rent a car from Ram Rent, you have to meet the
                    following conditions:<br />&bull; Your age must
                    be 24 or more;<br />&bull; You must have a
                    driving license and passport;<br />&bull; You
                    should have at least 2 years of driving
                    experience;<br />&bull; You have to do a payment
                    for the full rent period (prepayment)<br />&bull;
                    Deposit amount for car rental is 150 AZN;</p><br /><br />
                <p>You will get a discount to the daily rent price
                    if you rent a car for:<br />5-10 days 10%
                    discount<br />10-15 days 20% discount<br />15-30
                    days 30% discount<br /><br />If you meet all
                    condition specified above, Rent a Car by
                    clicking the button specified below</p> 
                </div>
                <div class="btn-wrapper mt-5">
                    <a href="#!" class="primary-action-button btn">Rent a Car Online</a>
                </div>
        </div>
        <div class="col-lg-6 first" style="padding-right: 0px
            !important;">
            <img src="/front/images/ndn.png" alt="">
        </div>
    </div>
</div>

<div class="divider-md" style="height: 78px;"></div>
<div class="divider-sm" style="height: 40px;"></div>
@endsection