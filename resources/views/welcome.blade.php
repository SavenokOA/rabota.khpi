@extends('layouts.app')

@section('title')
@lang('main.title')
@endsection

@section('content')
<div class="container">
    <div class="row main-row">
        <div class="col-md">
            <div class="container mail-top">
                <p class="mail-top">@lang('main.find_a_job_mail')</p>
                <p class="mail-top-subscription">@lang('main.you_can_mail')</p>
                <div class="input-group mb-3" style="margin-bottom: 20px">
                    @csrf
                    <input type="text" class="form-control" placeholder="@lang('main.enter_email')" aria-label="@lang('main.enter_email')" aria-describedby="button-addon2">
                    <button class="btn button-" style="background-color: #BF1812;color:#ffffff;" type="button" id="button-email">@lang('main.subscribe')</button>
                </div>

            </div>

        </div>
        <div class="col-md-6">
           <center> <img class="main-photo"   src="/image/Main pic2 (2).png"></center>
        </div>
    </div>
</div>
@endsection
