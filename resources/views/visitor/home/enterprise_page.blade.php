<style>

.background_img {
    background: url('{{$event->enterprise->image_url}}') no-repeat center center;
    background-attachment: scroll;
    background-size: cover;
    width: 100%;
    height: fit-content;
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
    .join_button{
        display:none;
    }

}
</style>
@extends('layouts.visitor.layout')

@section('title', 'Enterprise page')
@section('content')
<div class="background_img">
    <div class="container-fluid box" id="myElement">
        <div class="row">
            <div class="col-lg-7 col-md-7 mx-auto justify-content-start">
                <h1 class="enterprise_name" style="color:#FFFFFF;">{{$event->enterprise->name}}</h1>
                <div class="closest_event" style="width:300px">
                    <div class="wrap">
                  <h3 class="event_header">{{$event->name}}</h3>
                <div class="event justify-content-start">
                    <div class="event_elements">Старт<br>
                         {{ Carbon\Carbon::parse($event->start_date)->translatedFormat('j F Y') }}
                    </div>
                    <div class="line"></div>
                    <div class="event_elements">Фініш<br>
                        {{ Carbon\Carbon::parse($event->finish_date)->translatedFormat('j F Y') }}
                    </div>
                </div>
                </div>
                <button onclick="document.location='/joinEvent/{{$event->id}}'"
                    type="button" class="join_button">Приєднатися</button>
            </div>
            </div>
            <div class="all_events col-xl-2 col-lg-3 col-md-3 mx-auto">
               {!! $allEvents->links('pagination::simple-bootstrap-4') !!}
                     @foreach($allEvents as $allEvent)
                        <a href="/event/{{$allEvent->id}}" class="wrap">
                           <h4 class="event_header_sec">{{$allEvent->name}}</h4>
                           <div class="event">
                               <div class="event_elements mb-4">Старт<br>
                                   {{ Carbon\Carbon::parse($allEvent->start_date)->translatedFormat('j F Y') }}
                               </div>
                               <div class="line"></div>
                               <div class="event_elements mb-4">Фініш<br>
                                   {{ Carbon\Carbon::parse($allEvent->finish_date)->translatedFormat('j F Y') }}
                               </div>
                           </div>
                           </a>
                    @endforeach
                  </div>
                </div>

    <div class="row d-xxl-none d-xl-none d-lg-none d-md-none" style="margin-top: 25vw;">
        <button onclick="document.location='/joinEvent/{{$event->id}}'" type="button"
            class="closest_event_button col-10 mx-auto mb-2">Приєднатися</button>
        <button onclick="document.location='/all_events/{{$event->id}}'" type="button"
            class="all_events_button col-10 mx-auto mb-4">Обрати іншу подію</button>

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
