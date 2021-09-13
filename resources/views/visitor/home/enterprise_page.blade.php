<style>

.background_img {
    background: url('/image_url/{{$enterprise->image_url}}') no-repeat center center;
    background-attachment: scroll;
    background-size: cover;
    width: 100%;
    height: auto;
    padding-top: 100px;

}

@media (max-width: 767.98px) {

    .background_img {
        background: url('/img/female_hiker.png') no-repeat center center;
        background-attachment: scroll;
        background-size: cover;
        width: 100%;
        padding-top: 100px;
        border-radius: 0 0 40px 40px;

    }
}
</style>
@extends('layouts.visitor.layout')

@section('title', 'Enterprise page')
@section('content')
<div class="background_img">
    <div class="container-fluid box" id="myElement">
    <div class="events">
        <div class="row">
            <div class="col-lg-7 col-md-7  mx-auto justify-content-start">
                <h1 class="enterprise_name" style="color:#FFFFFF;font-size: 7vw;">{{$enterprise->name}}</h1>
            {{-- </div>
            <div class="col-lg-7 col-md-7  mx-auto"> --}}
                {{-- <h3 class="event_header">{{$event->name}}</h3>
                <div class="event justify-content-start">
                    <div class="event_elements">Start<br>{{( Carbon\Carbon::parse($event->start_date)->format('d F Y'))}}</div>
                    <div class="line"></div>
                    <div class="event_elements">Finish<br>{{( Carbon\Carbon::parse($event->finish_date)->format('d F Y'))}}</div>
                </div> --}}
            {{-- </div>
            <div class="col-lg-7 col-md-7  mx-auto"> --}}
                <button onclick="document.location='/join'" type="button" class="join_button">Приєднатися</button>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3  mx-auto">
                @foreach($events as $event)
                 <a href="/event/{{$event->id}}" class="wrap">
                    <h4 class="event_header_sec">{{$event->name}}</h4>
                    <div class="event">
                        <div class="event_elements mb-4">Start<br>{{( Carbon\Carbon::parse($event->start_date)->format('d F Y'))}}</div>
                        <div class="line"></div>
                        <div class="event_elements mb-4">Finish<br>{{( Carbon\Carbon::parse($event->finish_date)->format('d F Y'))}}</div>
                    </div>
                    </a>
                @endforeach
                </div>
            </div>
        </div>
    <div  class="row d-xxl-none d-xl-none d-lg-none d-md-none" style="margin-top: 100vw;">
        <button type="button" class="closest_event_button col-10 mx-auto mb-2">Приєднатися</button>
        <button type="button" class="all_events_button col-10 mx-auto mb-4">Обрати іншу подію</button>
    </div>
    </div>
</div>

<h2 class="trips">Наша подорож</h2>
<div class="row mx-auto">
    <p
        style="border: 1px solid #66AA69; box-sizing: border-box; border-radius: 16px;
        width:80%; margin: 30px auto;">{{$event->description}}
    </p>
</div>
@include('inc.things_carousel')
@endsection
