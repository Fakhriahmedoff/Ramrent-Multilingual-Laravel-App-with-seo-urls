@foreach ($locations as $location)
<div class="location-card">
    <img src="/front/images/locationicon.png" alt="">
    <p class="text">
        {{$location->getTranslatedAttribute('name',App::GetLocale(), 'en')}}
    </p>
</div>
@endforeach