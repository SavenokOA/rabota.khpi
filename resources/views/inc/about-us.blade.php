<div class="row">
    <h2 class="red-h2">@lang('main.about_us')</h2>
    <p id="text-about-us">@lang('main.about_us_desc')</p>
    <h3 class="team-work">@lang('main.team') </h3>
</div>

<div id="myCarousel" class="carousel slide my-carousel" data-ride="carousel">
    <ol class="carousel-indicators " >
        <li data-target="#myCarousel" data-slide-to="0" class="" style="background-color: #5B0000" ></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active" style="background-color: #5B0000" ></li>
        <li data-target="#myCarousel" data-slide-to="2" class="" style="background-color: #5B0000" ></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="transparent"></rect></svg>

            <div class="container">
                <div class="carousel-caption">
                    @if(session('locale')=='ua')
                        <img class="photo-carousel" src="/image/gIRLS.png" alt="">
                    @elseif(session('locale')=='en')
                        <img class="photo-carousel" src="/image/gIRLSeng.png" alt="">
                    @endif
                </div>
            </div>

        </div>
        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="transparent"></rect></svg>

            <div class="container">
                <div class="carousel-caption">
                    @if(session('locale')=='ua')
                        <img class="photo-carousel" src="/image/team2.png" alt="">
                    @elseif(session('locale')=='en')
                        <img class="photo-carousel" src="/image/team2 eng.png" alt="">
                    @endif
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="transparent"></rect></svg>

            <div class="container">
                <div class="carousel-caption">
                    @if(session('locale')=='ua')
                        <img class="photo-carousel" src="/image/team3.png" alt="">
                    @elseif(session('locale')=='en')
                        <img class="photo-carousel" src="/image/team3 eng.png" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <h3 class="team-work">@lang('main.areas_of_work') </h3>
    </div>
    <div class="col-md-6">
        @if(session('locale')=='ua')
            <center> <img class="adv-photo"   src="/image/Advantages.png"></center>
        @elseif(session('locale')=='en')
            <center> <img class="adv-photo"   src="/image/Advantages eng.png"></center>
        @endif

    </div>
</div>
