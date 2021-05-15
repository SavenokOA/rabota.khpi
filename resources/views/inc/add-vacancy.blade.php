<div class="container">
    <h2 class="red-h2">@lang('main.add_vacancy')</h2>
    <br>
    <form class="needs-validation" novalidate="">
        <div class="row g-3">
            <div class="col-sm-6 form-fields">

                <input type="text" class="form-control" id="NameVacancy" placeholder="@lang('main.name_of_vac')" value="" required="">
                <div class="invalid-feedback">
                    Требуется действительное имя.
                </div>
            </div>

            <div class="col-sm-6 form-fields">

                <input type="text" class="form-control" id="NameCompany" placeholder="@lang('main.company_name')" value="" required="">
                <div class="invalid-feedback">
                    Требуется действительная фамилия.
                </div>
            </div>

            <div class="col-sm-6 form-fields">

                <input type="text" class="form-control" id="ScopeCompany" placeholder="@lang('main.scope_of_comp')" value="" required="">
                <div class="invalid-feedback">
                    Требуется действительное имя.
                </div>
            </div>


            <div class="col-sm-6 form-fields">

                <input type="text" class="form-control" id="ActivityCompany" placeholder="@lang('main.kind_of_activity')" value="" required="">
                <div class="invalid-feedback">
                    Требуется действительное имя.
                </div>
            </div>
            <div class="col-sm-6 form-fields">

                <input type="text" class="form-control" id="WebsiteCompany" placeholder="@lang('main.your_website')" value="" required="">
                <div class="invalid-feedback">
                    Требуется действительное имя.
                </div>
            </div><div class="col-sm-6 form-fields">

                <input type="text" class="form-control" id="NumberCompany" placeholder="@lang('main.contact_number')" value="" required="">
                <div class="invalid-feedback">
                    Требуется действительное имя.
                </div>
            </div>

            <div class="col-sm-6 form-fields">

                <input type="text" class="form-control" id="EmailCompany" placeholder="@lang('main.your_email')" value="" required="">
                <div class="invalid-feedback">
                    Требуется действительное имя.
                </div>
            </div>

            <div class="col-sm-6 form-fields">
                <label class="btn btn-info">
                    @lang('main.browse') <input type="file" hidden>
                </label>
                <label class="form-label browse-logo">@lang('main.choose_logo')</label>

            </div>


        <br>
        <div class="col-sm-12 form-fields">
            <textarea type="text" class="form-control" rows="5" id="VacancyDescriptionCompany"  placeholder="@lang('main.vacancy_description')" value="" required=""></textarea>
            <div class="invalid-feedback">
                Требуется действительное имя.
            </div>
            <br>
            <div class="col-sm-12">
                <button class="my-form-button" type="submit">@lang('main.add_vacancy')</button>
            </div>
        </div>

        </div>
   </form>
</div>
