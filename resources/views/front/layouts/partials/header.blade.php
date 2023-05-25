<div class="tt-parent-box entypo-export">
    <i class="fa fa-comments"  type="1"></i>
    <!-- icon-g-80 -->
    <div class="social">
        <div class="icons-social">
            <a href="{{ App\Models\System::getProperty('facebook') }}" class="fa fa-facebook"></a>
            <a href="{{ App\Models\System::getProperty('twitter') }}" class="fa fa-twitter"></a>
            <a href="{{ App\Models\System::getProperty('instagram') }}" class="fa fa-instagram"></a>
            <a href="{{ App\Models\System::getProperty('youtube') }}" class="fa fa-youtube"></a>
            <a href="https://wa.me/{{ App\Models\System::getProperty('whatsapp') }}" class="fa fa-whatsapp"></a>
            <a href="{{ App\Models\System::getProperty('telegram') }}" class="icon-g-34 fa fa-telegram"></a>

        </div>
    </div>
</div>
<div class="dropdown">
    <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        {{-- LaravelLocalization::getCurrentLocaleName() --}}
        <img src="{{asset('images/'.app()->getLocale().'-flag.png')}}" class="lang-active"  alt="">

    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

            @if($localeCode === App::getLocale())


            @else
                <li>
                    <a class="a-lang dropdown-item" style="display: inline-flex;" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <div class="tt-item-img">
                            <img class="lang-item"  src="{{asset('images/'.$localeCode.'-flag.png')}}"  alt="">
                        </div>
                        <div class="tt-item-descriptions">
                            <h2 class="tt-title p-1">{{ $properties['native'] }}</h2>
                        </div>
                    </a>
                </li>

            @endif
        @endforeach

    </ul>
</div>
