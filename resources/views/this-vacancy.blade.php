@extends('layouts.app')
@section ('title')
    @lang('all_vac.title')
@endsection


@section('content')
<div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li class="my-alerts">{{$error}}</li>
            @endforeach
        </div>
        @endif
    @if(session('success'))
        <div class="my-alerts container alert alert-success">{{session('success')}}</div>
    @endif
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="container cont-this-vacancy">
                <div class="row">
                    <div class="container logo-vacancy-cont  col-6">

                        <img class="logo-vacancy logo-vacancy-cont-this center-block" src="{{$vacancy->LogoCompany}}" alt=""></div>
                    <div class="name-this-vac col-6">
                        <p class="this-vacancy-company">{{$vacancy->NameCompany}}</p>
                    </div>
                </div>
            </div>

            <div class="vac-desc">
                <p class="contact-data">{{$vacancy->created_at}}</p>
                <h2 class="this-vacancy-topic">{{$vacancy->NameVacancy}}</h2>
                <br>
                <div class="container visit-card">
                    <ul>
                        <li class="visit-list">@lang('this_vac.email')<p class="contacts-vacancy">{{$vacancy->EmailCompany}}</p></li>
                        <li class="visit-list">@lang('this_vac.number')<p class="contacts-vacancy">{{$vacancy->NumberCompany}}</p></li>
                    </ul>
                </div>

                <hr>

                <p class="br">{{$vacancy->VacancyDescription}}</p>
                <br>

                <form class="needs-validation" action="{{@route('response.store')  }}" enctype="multipart/form-data" novalidate="" method="post">
                @csrf
                    <div class="row">
                    <div class="col-sm-6 form-fields">
                        <input type="text" class="form-control" id="NumberCompany" name="number-response" placeholder="@lang('main.contact_number')" value="" required="">
                    </div>
                    <div class="col-sm-6 form-fields">
                        <input type="text" class="form-control" id="EmailCompany" name="email-response" placeholder="@lang('main.your_email')" value="" required="">
                    </div>
                        <input type="hidden" name="vac_id" value="{{$vacancy->id}}">

                </div>
                    <br>
                <button class="btn btn-learn" style="background-color: #BF1812;color:#ffffff;" type="submit" id="button-fair">@lang('this_vac.respond')</button>
                </form>




            </div>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">

        </aside><!-- /.blog-sidebar -->

    </div>
</div>
@endsection
