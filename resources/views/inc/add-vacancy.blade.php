<div class="container">
    <h2 class="red-h2">@lang('main.add_vacancy')</h2>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li class="my-alerts">{{$error}}</li>
            @endforeach
        </div>
    @endif
    <form class="needs-validation" action="{{@route('send-form')}}" enctype="multipart/form-data" novalidate="" method="post">
        @csrf
        <div class="row g-3">
            <div class="col-sm-6 form-fields">
                <input type="text" class="form-control" name="NameVacancy" id="NameVacancy" placeholder="@lang('main.name_of_vac')" value="" required="">
            </div>

            <div class="col-sm-6 form-fields">
                <input type="text" class="form-control" id="NameCompany" name="NameCompany" placeholder="@lang('main.company_name')" value="" required="">
            </div>

            <div class="col-sm-6 form-fields">
                <input type="text" class="form-control" id="ScopeCompany" name="ScopeCompany" placeholder="@lang('main.scope_of_comp')" value="" required="">
            </div>

            <div class="col-sm-6 form-fields">
                <input type="text" class="form-control" id="ActivityCompany" name="ActivityCompany" placeholder="@lang('main.kind_of_activity')" value="" required="">
            </div>

            <div class="col-sm-6 form-fields">
                <input type="text" class="form-control" id="WebsiteCompany" name="WebsiteCompany" placeholder="@lang('main.your_website')" value="" required="">
            </div>

            <div class="col-sm-6 form-fields">
                <input type="text" class="form-control" id="NumberCompany" name="NumberCompany" placeholder="@lang('main.contact_number')" value="" required="">
            </div>

            <div class="col-sm-6 form-fields">
                <input type="text" class="form-control" id="EmailCompany" name="EmailCompany" placeholder="@lang('main.your_email')" value="" required="">
            </div>

            <div class="col-sm-6 form-fields">
                <label class="btn btn-info">
                    @lang('main.browse') <input id="LogoCompany" name="LogoCompany" type="file" hidden>
                </label>
                <label class="form-label browse-logo">@lang('main.choose_logo')</label>
            </div>

            <br>
            <div class="col-sm-12 form-fields">
                <textarea type="text" class="form-control" rows="5" name="VacancyDescription" id="VacancyDescription"  placeholder="@lang('main.vacancy_description')" value="" required=""></textarea>
            </div>

            <div class="col-sm-12">
                <button   class="my-form-button" type="submit">@lang('main.add_vacancy')</button>
            </div>

        </div>
   </form>
</div>
