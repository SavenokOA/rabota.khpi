@extends('layouts.admin-layout')
@section('title', 'Все новости')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Все ярмарки</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        ID
                    </th>
                    <th style="width: 20%">
                        Название ярмарки
                    <th style="width: 38%">
                        Краткое описание
                    </th>
                    <th>
                        Время добавления
                    </th>

                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($fair as $fairs)
                    <tr>
                        <td>
                            {{$fairs['id']}}
                        </td>

                        <td>
                            {{$fairs['title']}}
                        </td>

                        <td>
                            {{$fairs['short_desc']}}
                        </td>

                        <td>
                            {{$fairs['created_at']}}
                        </td>

                        <td class="project-actions text-right" >


                            <a class="btn btn-info btn-sm " style="margin-bottom: 5px" href="{{route('fair.edit', $fairs['id'])}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редактировать
                            </a>

                            <a class="btn btn-danger btn-sm" style="margin-bottom: 5px" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Удалить
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
