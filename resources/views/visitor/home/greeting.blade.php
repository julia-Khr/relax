@extends('layouts.visitor.layout')

@section('title', 'Home page')
@section('content')
<div class="background-img">
    <div class="container-fluid box " id="myElement">
    <div class="events">
        <div class="row">
            <div class="col-lg-7 col-md-7  mx-auto justify-content-start">
                <h1 class="enterprise_name" style="color:#FFFFFF;font-size: 7vw;">IT Campaign</h1>

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

            <div  id="myElement" class="col-xl-2 col-lg-3 col-md-3 mx-auto handle">
                @foreach($events as $event)
                 <a href="/enterprise/{{$event->enterprise_id}}" class="wrap">
                    <h4 class="event_header_sec">{{$event->enterprise->name}}</h4>
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
    <div class="row d-xxl-none d-xl-none d-lg-none d-md-none" style="margin-top: 100vw;" id="myElement">
        <button type="button" class="closest_event_button col-10 mx-auto mb-2">Найближча подія</button>
        <button type="button" class="all_events_button col-10 mx-auto mb-4">Переглянути усі події</button>
    </div>
    </div>
</div>

<h2 class="trips">Подорожі</h2>
@include('inc.carousel')
    <h2 class="trips">Наші переваги</h2>
    <div id="myElement" class="row  justify-content-center mx-auto" style="width:80%">
        <div class="col-lg-2 col-md-2 col-4 mx-auto ">
            <img src="/img/Map.png" class="mx-auto d-block advantages">
            <h5 class="advantage_name">Досвідчені екскурсоводи</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-4 mx-auto justify-content-center">
            <img src="/img/bus.png" class="mx-auto d-block advantages">
            <h5 class="advantage_name">Транспорт</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-4 mx-auto justify-content-center">
            <img src="/img/medicina.png" class="mx-auto d-block advantages">
            <h5 class="advantage_name">Медичне страхування</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-4 mx-auto justify-content-center">
            <img src="/img/Photo.png" class="mx-auto d-block advantages">
            <h5 class="advantage_name">Фото на згадку</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-4 mx-auto justify-content-center">
            <img src="/img/Group.png" class="mx-auto d-block advantages">
            <h5 class="advantage_name">Фото на згадку</h5>
        </div>
    </div>

@endsection

