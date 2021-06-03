@extends('layouts.app')
@section ('title')
    @lang('all_vac.title')
@endsection


@section('content')
    <div class="container">
    <center><h2 class="red-h2" id="vacancies">@lang('main.job_fair')</h2></center>
    @foreach($fairs as $fair)


                <div class="row"style="margin-top: 50px" >
                    <div class="col-md-6" style="padding-top: 50px">
                        <div class="container">
                            <h2 class="fair-topic " id="fair">{{$fair->title}}</h2>
                            <p class="fair-text">{{$fair->short_desc}}</p>
                            <br>
                            <p class="contact-data">{{$fair->created_at}}</p>


                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 50px">
                        <img class="fair-photo"   src="{{$fair->img}}">
                    </div>
                </div>


                    @endforeach

   </div>
@endsection
