@foreach ($econom as $eco)
<li class="splide__slide">
    <div class="product-cardbox" >
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