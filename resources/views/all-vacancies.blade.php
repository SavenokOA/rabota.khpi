@extends('layouts.app')
@section ('title')
    @lang('all_vac.title')
@endsection


@section('content')
    <div class="container">
        <center><h2 class="red-h2" id="vacancies">@lang('main.vacancies')</h2></center>
        <div class="row vac-row" style="margin-top: 50px">
            @foreach($vacancies as $vacancy)

                <div class="col-md-4" style="margin-top: 20px">
                    <div class=" container cont-vacancy">
                        <div class="row">
                            <div class="container logo-vacancy-cont col-6">
                                <img class="logo-vacancy center-block" src="{{$vacancy->LogoCompany}}" alt=""></div>
                            <div class="cont-vac-name col-6">
                                <h4><a class="link-job"  href="{{route('this_vacancy', $id = $vacancy->id)}}">{{$vacancy->NameVacancy}}</a></h4>
                                <p>{{$vacancy->NameCompany}}</p>
                            </div>
                        </div>
                    </div>
                </div>
    @endforeach
@endsection
