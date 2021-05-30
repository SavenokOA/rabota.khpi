@extends('layouts.admin-layout')

@section('title', 'Редактировать вакансию')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать вакансию: {{ $vacancy['NameVacancy'] }}</h1>
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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('vacancies.update', $vacancy['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название вакансии</label>
                                    <input type="text" value="{{ $vacancy['NameVacancy'] }}" name="NameVacancy" class="form-control"
                                           id="exampleInputEmail1" placeholder="Введите название вакансии" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название компании</label>
                                    <input type="text" value="{{ $vacancy['NameCompany'] }}" name="NameCompany" class="form-control"
                                           id="exampleInputEmail1" placeholder="Введите название компании" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Деятельность компании</label>
                                    <input type="text" value="{{ $vacancy['ScopeCompany'] }}" name="ScopeCompany" class="form-control"
                                           id="exampleInputEmail1" placeholder="Укажите в кратце" required>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Направление компании</label>
                                    <input type="text" value="{{ $vacancy['ActivityCompany'] }}" name="ActivityCompany" class="form-control"
                                           id="exampleInputEmail1" placeholder="Укажите в кратце" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Контактный телефон</label>
                                    <input type="text" value="{{ $vacancy['NumberCompany'] }}" name="NumberCompany" class="form-control"
                                           id="exampleInputEmail1" placeholder="Впишите номер" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Вебсайт компании</label>
                                    <input type="text" value="{{ $vacancy['WebsiteCompany'] }}" name="WebsiteCompany" class="form-control"
                                           id="exampleInputEmail1" placeholder="Укажите адресс" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Єлектронная почта компании</label>
                                    <input type="text" value="{{ $vacancy['EmailCompany'] }}" name="EmailCompany" class="form-control"
                                           id="exampleInputEmail1" placeholder="Укажите адресс" required>
                                </div>


                                <div class="form-group">
                                    <textarea name="VacancyDescription" class="editor">{{ $vacancy['VacancyDescription'] }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Укажите изображение, иначе будет указано стандартное</label>
                                    <img src="{{ $vacancy['LogoCompany'] }}" alt="" class="img-uploaded"
                                         style="display: block; width: 300px">
                                    <input type="text" value="{{ $vacancy['LogoCompany'] }}" name="LogoCompany" class="form-control"
                                           id="feature_image"  value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
