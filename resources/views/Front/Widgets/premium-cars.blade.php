@foreach ($premium as $pre)
<li class="splide__slide">
    <div class="product-cardbox">
        <div class="image" style="background-image: url('{{Voyager::image($pre->thumbnail)}}')">
         
        </div>
        <div class="content">
            <p class="car-title">
               {{$pre->category->name}} {{$pre->model}}
            </p>
            <p class="car-year">
                {{$pre->year}} year
            </p>
            <p class="car-price">
                {{$pre->price}} AZN / day
            </p>
            <a href="/{{App::getLocale()}}/{{$carseo}}/{{$pre->slug}}" class="btn primary-action-button">
                @lang('translate.rent-button')
            </a>
        </div>
    </div>
</li>
@endforeach