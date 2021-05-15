<nav class="navbar navbar-expand-lg navbar-light my_nav">

    <a class="navbar-brand" href="#"><img class="rounded img-fluid logo" src="\image\Logo3.png" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" style="margin-top: -30px;" id="navbarNav">
        <ul class="navbar-nav my_nav" >
            <li class="nav-item active">
                <a class="nav-link" style="color: #363636;" href="#">@lang('main.about_us_navbar')<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="#">@lang('main.vacancies_navbar')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="#">@lang('main.add_vacancy_navbar')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="#">@lang('main.job_fair_navbar')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="#">@lang('main.helpful_information_navbar')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="#">@lang('main.news_and_projects_navbar')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #363636;" href="#">@lang('main.contacts_navbar')</a>
            </li>
        </ul>

        <div class="lang-nav">
            <a сlass="nav-link" href="{{route('locale', 'ua')}}">UA</a>
            <a сlass="btn-outline-success" href="{{route('locale', 'en')}}">EN</a>
        </div>


    </div>
</nav>


