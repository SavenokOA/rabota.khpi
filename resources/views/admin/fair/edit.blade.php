@extends('layouts.admin-layout')
@section('title', 'Редактировать ярмарку')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактируйте ярмарку</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->


            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Внесите корректные данные для изменения ярмарки № {{$fairs['id']}} в форму</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('fair.update', $fairs['id'])}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Название ярмарки</label>
                            <input type="text" value="{{$fairs['title']}}" class="form-control" id="title" name="title" placeholder="Введите назвавние">
                        </div>
                        <div class="form-group">
                            <label >Краткое описание</label>
                            <input type="text" value="{{$fairs['short_desc']}}" class="form-control" id="short_desc" name="short_desc" placeholder="Опишите событие в кратце">
                        </div>
                        <div class="form-group">
                            <label>Полное описание</label>
                            <textarea rows="3" type="text"  class="form-control" id="text" name="text" placeholder="Введите полный отредактированный текст ярмарки">{{$fairs['text']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Выберите новое изображение для ярмарки</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo">
                                    <label class="custom-file-label" for="exampleInputFile">Открыть файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
s
