    <h2 class="trips">З собою потрібно мати:</h2>
    <div class="container display_md mb-2">
        <div class="row  justify-content-center mx-auto">
            @foreach($thingCategories as $thingCategory)
            <div class="col-xl-2 col-lg-3 col-md-3 col-4 mx-auto align-items-center">
                        <img src="/thing_img_url/{{$thingCategory->thing_img_url}}" class="mx-auto d-block advantages mb-3">
                        <div class="things__wrapper">
                    <ul>
                         @foreach($event_things as $event_thing)
            @foreach ($thingCategory->things()->where('id',$event_thing->thing_id )->get() as $thing)
                                <li>{{$thing->name}}</li>
                            @endforeach
            @endforeach
                    </ul>
                        </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="container">
        <div id="myCarousel" class="carousel slide d-xxl-none d-xl-none d-lg-none d-md-none d-block" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active d-none" ></li>
            </ol>
            <div class="carousel-inner">
                @foreach($thingCategories as $key => $thingCategory)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <div class=" col-10 col-sm-8 mx-auto ">
                        <img src="/thing_img_url/{{$thingCategory->thing_img_url}}" class="d-block advantages mx-auto" alt="...">
                                <div class="things__wrapper">
                            <ul>
                                @foreach($event_things as $event_thing)
                                @foreach ($thingCategory->things()->where('id',$event_thing->thing_id )->get() as $thing)
                                                    <li>{{$thing->name}}</li>
                                                @endforeach
                                @endforeach
                            </ul>
                                </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>

