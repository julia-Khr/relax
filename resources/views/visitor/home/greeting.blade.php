@extends('layouts.visitor.layout')

@section('title', 'Home page')
@section('content')
<div class="background-img">
    <div class="container-fluid box">
    <div class="events">
        <div class="row">
            <div class="col-lg-7 col-md-7  mx-auto justify-content-start">
                <h1 class="enterprise_name" style="color:#FFFFFF;font-size: 7vw;">IT Campaign</h1>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3  mx-auto">
                 <a href="" class="wrap">
                    <h4 class="event_header_sec">IT Bug</h4>
                    <div class="event">
                        <div class="event_elements mb-4">Start<br>15<br>July</div>
                        <div class="line"></div>
                        <div class="event_elements mb-4">Finish<br>18<br>2021</div>
                    </div>
                </a>
                {{-- <a href="" class="wrap">
                    @forelse($events->orderBy('start_date', 'desc')->get()  as $event)
                    <h4>{{$event->name}}</h4>
                    <div class="event">
                        <div class="event_elements mb-4">Start<br>{{$event->start_date}}</div>
                        <div class="line"></div>
                        <div class="event_elements mb-4">Finish<br>{{$event->finish_date}}</div>
                    </div>
                  @empty
                  <h3 class="text-center">Події відсутні</h3>
                  @endforelse
                </a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7  mx-auto">
                <h3 class="event_header">Сімейний похід</h3>
                <div class="event justify-content-start">
                    <div class="event_elements">Start<br>07<br>July</div>
                    <div class="line"></div>
                    <div class="event_elements">Finish<br>15<br>2021</div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 mx-auto">
                <a href="" class="wrap">
                    <h4 class="event_header_sec">IT Carpathians</h4>
                    <div class="event">
                        <div class="event_elements">Start<br>20</div>
                        <div class="line"></div>
                        <div class="event_elements">Finish<br>23</div>
                    </div>
                    <p class="event_date">September 2021</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7  mx-auto">
                <button type="button" class="join_button">Приєднатися</button>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3  mx-auto">
                <a href="" class="wrap">
                    <h4 class="event_header_sec">IT Dnister</h4>
                    <div class="event">
                        <div class="event_elements">Start<br>18</div>
                        <div class="line"></div>
                        <div class="event_elements">Finish<br>21</div>
                    </div>
                    <p class="event_date">August 2021</p>
                </a>
            </div>
        </div>
    </div>

    <div class="row d-xxl-none d-xl-none d-lg-none d-md-none" style="margin-top: 100vw;">
        <button type="button" class="closest_event_button col-10 mx-auto">Найближча подія</button>
        <button type="button" class="all_events_button col-10 mx-auto mb-4">Переглянути усі події</button>
    </div>
    </div>
</div>

<h2 class="trips">Подорожі</h2>
@include('inc.carousel')
    <h2 class="trips">Наші переваги</h2>
    <div class="row  justify-content-center mx-auto" style="width:80%">
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
