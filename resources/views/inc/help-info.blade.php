<div class="row" style="margin-top: 50px">
    <div class="col-md-6" style="padding-top: 50px">
        <div class="container">
            <h2 class="red-h2" id="help_info">@lang('main.help_info')</h2>
        </div>
    </div>
</div>
<div class="row" >
    <div class="col-md-12" style="padding-top: 50px">
       <center>
           @if(session('locale')=='ua')
            <img class="help-photo" src="/image/Корисна инфор.png" alt="">
        @elseif(session('locale')=='en')
            <img class="help-photo" src="/image/Корисна инфор ENG.png" alt="">
        @endif
       </center>

    </div>
</div>
