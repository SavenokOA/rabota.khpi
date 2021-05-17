
<div class="container">
    <h2 class="red-h2">@lang('main.vacancies')</h2>
    <div class="row vac-row" style="margin-top: 50px">
        @foreach($vacancy as $el)

        <div class="col-md-4" style="margin-top: 20px">
            <div class=" container cont-vacancy">
                <div class="row">
                    <div class="container logo-vacancy-cont col-5">
                        <img class="logo-vacancy center-block" src="{{$el->LogoCompany}}" alt=""></div>
                    <div class="cont-vac-name col-7">
                        <h4>{{$el->NameVacancy}}</h4>
                        <p>{{$el->NameCompany}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach



    <div class="col-md-4" id="view-all">
        <div class=" container" >
           <center> <a href="#">@lang('main.view_all')</a></center>
        </div>
    </div>
</div>

</div>
