<div class="row main-row">
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li class="my-alerts">{{$error}}</li>
            @endforeach
        </div>
    @endif
    <div class="col-md">
        <div class="container mail-top">
            <p class="mail-top" style="margin-left: 12px">@lang('main.find_a_job_mail')</p>
            <p class="mail-top-subscription">@lang('main.you_can_mail')</p>
            <div class="input-group mb-3" style="margin-bottom: 20px">
                <form action="{{route('subscribe.store')}}" style="border-color: transparent" class="form-control"  method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="email" class="form-control button-email" placeholder="@lang('main.enter_email')" aria-label="@lang('main.enter_email')" aria-describedby="button-addon2">
                    <br>
                <button class="btn button-" style="background-color: #BF1812;color:#ffffff;" type="submit" id="button-email">@lang('main.subscribe')</button>
                </form>
            </div>

        </div>

    </div>
    <div class="col-md-6">
        <center> <img class="main-photo"   src="/image/Main pic2 (2).png"></center>
    </div>
</div>
