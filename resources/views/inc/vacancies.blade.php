
<div class="container">
    <h2 class="red-h2" id="vacancies">@lang('main.vacancies')</h2>
    <div class="row vac-row" style="margin-top: 50px">
        @for($i=0; $i<5; $i++)

        <div class="col-md-4" style="margin-top: 20px">
            <div class=" container cont-vacancy">
                <div class="row">
                    <div class="container logo-vacancy-cont col-6">
                        <img class="logo-vacancy center-block" src="{{$vacancy[$i]->LogoCompany}}" alt=""></div>
                    <div class="cont-vac-name col-6">
                        <h4><a class="link-job"  href="{{route('this_vacancy', $id = $vacancy[$i]->id)}}">{{$vacancy[$i]->NameVacancy}}</a></h4>
                        <p>{{$vacancy[$i]->NameCompany}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endfor



    <div class="col-md-4" id="view-all">
        <div class=" container" >
           <center> <a href="{{route('all-vacancies')}}">@lang('main.view_all')</a></center>
        </div>
    </div>
</div>

</div>
