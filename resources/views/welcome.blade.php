@extends('layouts.app')

@section('title')
@lang('main.title')
@endsection

@section('content')
<div class="container">
    @if(session('success'))
        <div class="my-alerts container alert alert-success">{{session('success')}}</div>
    @endif

    @include('inc.subscribe')
    @include('inc.about-us')
    @include('inc.vacancies')
    @include('inc.add-vacancy')

</div>
@endsection
