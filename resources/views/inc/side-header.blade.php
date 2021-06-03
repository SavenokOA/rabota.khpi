<nav class="navbar navbar-expand-lg navbar-light my_nav">

    @if(session('locale')=='ua')
        <a class="navbar-brand" href="/main"><img class="rounded img-fluid logo" src="\image\Logo3.png" alt=""></a>
    @elseif(session('locale')=='en')
        <a class="navbar-brand" href="/main"><img class="rounded img-fluid logo" src="\image\Logo3 eng.png" alt=""></a>
    @endif

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" style="margin-top: -30px;" id="navbarNav">
        <ul class="navbar-nav my_nav" >
            <li class="nav-item active">
                <a class="nav-link" style="color: #363636;" href="/main/#about_us">@lang('main.about_us')<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="/main/#vacancies">@lang('main.vacancies')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="/main/#add_vacancy">@lang('main.add_vacancy')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="/main/#fair">@lang('main.job_fair_navbar')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="/main/#help_info">@lang('main.helpful_information_navbar')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="/main/#news">@lang('main.news_and_projects_navbar')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="/main/#contacts",>@lang('main.contacts_navbar')</a>
            </li>

            <li class="nav-item" style="margin: 0 30px;">
                @if(session('locale')=='ua')
                    <a сlass="lang-nav disabled" id="lang-off" href="{{route('locale', 'ua')}}">UA |</a>
                    <a сlass="lang-nav" id="lang-on" href="{{route('locale', 'en')}}">EN</a>

                @elseif(session('locale')=='en')
                    <a сlass="lang-nav" id="lang-on" href="{{route('locale', 'ua')}}">UA</a>
                    <a сlass="lang nav disabled" id="lang-off" href="{{route('locale', 'en')}}">| EN</a>

                @endif
            </li>
        </ul>
    </div>

</nav>


