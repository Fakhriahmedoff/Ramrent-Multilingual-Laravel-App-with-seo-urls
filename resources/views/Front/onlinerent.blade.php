@extends('Front.Layout.master')
@section('content')

<div id="page-content">
    <div class="divider-md" style="height: 78px;"></div>
    <div class="divider-sm" style="height: 40px;"></div>
    <div class="container">
        <div class="row site-breadcrumbs justify-content-flex-start">
            <a href="#" class="single-breadcrumb">Home</a> / <a href="#"
                class="single-breadcrumb active">Online Rent</a>
        </div>
        <div class="divider-sm"></div>
        <div class="row text-center justify-content-center">
            <h1 class="title-text">
                Online Rent
            </h1>
        </div>
    </div>
    <div class="container rent-form">
        <div class="form-wrapper">
            <form action="" class="rent-form-online">
                <input placeholder="Car brand" type="text" class="width-md rent-input">
                <input placeholder="Car brand" type="text" class="width-md rent-input">
                <input placeholder="Car brand" type="text" class="width-lg rent-input">
                <input placeholder="Car brand" type="datetime" class="datetime rent-input">
                <input placeholder="Car brand" type="datetime" class="datetime rent-input">
                <input placeholder="Car brand" type="text" class="width-sm rent-input">
                <input placeholder="Car brand" type="text" class="width-sm rent-input">
                <input placeholder="Car brand" type="text" class="width-sm rent-input">
                <textarea  placeholder="Car brand" name="" id="" class="width-lg rent-textarea" cols="30" rows="10"></textarea>
               </form>
        </div>
       
    </div>

    <div class="divider-md" style="height: 78px;"></div>
    <div class="divider-sm" style="height: 40px;"></div>

@endsection
