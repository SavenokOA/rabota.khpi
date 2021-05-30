@extends('layouts.admin-layout')

@section('title', 'Все статьи')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все предложенные вакансии</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

                        @foreach ($vacancies as $vacancy)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-primary card-tabs">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-five-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="custom-tabs-five-overlay-tab{{$vacancy['id']}}" data-toggle="pill" href="#custom-tabs-five-overlay{{$vacancy['id']}}" role="tab" aria-controls="custom-tabs-five-overlay" aria-selected="true">Общая информация</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-five-overlay-dark-tab{{$vacancy['id']}}" data-toggle="pill" href="#custom-tabs-five-overlay-dark{{$vacancy['id']}}" role="tab" aria-controls="custom-tabs-five-overlay-dark" aria-selected="false">Краткое описание</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-five-normal-tab{{$vacancy['id']}}" data-toggle="pill" href="#custom-tabs-five-normal{{$vacancy['id']}}" role="tab" aria-controls="custom-tabs-five-normal" aria-selected="false">Полное описание</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-five-tabContent">
                                                <div class="tab-pane fade active show" id="custom-tabs-five-overlay{{$vacancy['id']}}" role="tabpanel" aria-labelledby="custom-tabs-five-overlay-tab{{$vacancy['id']}}">
                                                    <div class="overlay-wrapper">

                                                        <img class="logo-vacancy center-block" src="{{$vacancy['LogoCompany']}}" alt="">
                                                        <br>
                                                        <p>Наименование вакансии: {{$vacancy['NameVacancy']}} </p>
                                                        <br>
                                                        <p>Название компании: {{$vacancy['NameCompany']}} </p>
                                                        <br>
                                                        <p>Контактный телефон: {{$vacancy['NumberCompany']}}</p>
                                                        <br>
                                                        <p>Электронная почта: {{$vacancy['EmailCompany']}}</p>
                                                        <br>
                                                        <p>Сайт компании: {{$vacancy['WebsiteCompany']}}</p>
                                                        <br>
                                                        <p>Вакансия добавлена: {{$vacancy['created_at']}}</p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-five-overlay-dark{{$vacancy['id']}}" role="tabpanel" aria-labelledby="custom-tabs-five-overlay-dark-tab{{$vacancy['id']}}">
                                                    <div class="overlay-wrapper">
                                                        <p>Сфера компании: {{$vacancy['ActivityCompany']}}</p>
                                                        <br>
                                                        <p>Деятельность компании: {{$vacancy['ScopeCompany']}}</p>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-five-normal{{$vacancy['id']}}" role="tabpanel" aria-labelledby="custom-tabs-five-normal-tab{{$vacancy['id']}}">
                                                    <p>{{$vacancy['VacancyDescription']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>

                            <tr>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" style="margin-left: 25px" href="{{ route('vacancy.edit', $vacancy['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редактировать и одобрить
                                    </a>
                                    <form action="{{ route('vacancy.destroy', $vacancy['id']) }}" method="POST"
                                          style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fas fa-trash">
                                            </i>
                                            Удалить
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            <br>
                            <br>
                            <br>
                        @endforeach




    <!-- /.content -->
@endsection
