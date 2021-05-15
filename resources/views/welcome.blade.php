@extends('layouts.app')

@section('title')
@lang('main.title')
@endsection

@section('content')
<div class="container">
    @include('inc.subscribe')
    @include('inc.about-us')
    @include('inc.vacancies')
    @include('inc.add-vacancy')

</div>
@endsection
