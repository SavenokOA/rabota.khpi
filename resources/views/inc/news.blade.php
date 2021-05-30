<div class="row" style="margin-top: 50px">
    <div class="col-md-6" style="padding-top: 50px">
        <div class="container">
            <h2 class="red-h2" id="news">@lang('main.news_and_projects_navbar')</h2>
        </div>
    </div>
</div>

<div class="row" style="padding-top: 50px">
    <div class="col-md-5  left-item">
        <div class="container news-item">
            <div class="container" style="height: 300px">
                <img id="left-news-photo" src="{{$post[0]->img}}">
            </div>
            <div class="container">
                <h3 class="news-title">{{$post[0]->title}}</h3>
                <p class="news-desc">{{$post[0]->short_desc}}</p>
            </div>

        </div>

    </div>
    <div class="col-md-7  ">
        <div class="container news-item right-item">
            <div class="row">
                <div class="col-md-7" >
                    <h3 class="news-title">{{$post[1]->title}}</h3>
                    <p class="news-desc">{{$post[1]->short_desc}}</p>
                </div>
                <div class="col-md-5">
                    <div class="container mini-photo">
                        <img class="mini-photo-news" src="{{$post[1]->img}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container news-item right-item" >
            <div class="row">
                <div class="col-md-7 mini-photo">
                    <h3 class="news-title">{{$post[2]->title}}</h3>
                    <p class="news-desc">{{$post[2]->short_desc}}</p>
                </div>
                <div class="col-md-5 mini-photo">
                    <div class="container ">
                        <img class="mini-photo-news" src="{{$post[2]->img}}" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

