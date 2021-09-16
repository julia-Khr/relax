<style>

    @media (max-width:767.98px) {

        nav.navbar{
            display:none;
        }

    }
    @media (max-width:425px) {
        .event_elements {
            font-weight: normal;
            font-size: 13px;
        }
        h4.event_header_sec {
            font-size: 18px;
            font-weight: normal;
        }
    }
</style>
@extends('layouts.visitor.layout')
@section('title', 'Home page')
@section('content')
<div style="background: rgba(160, 160, 160, 0.2); backdrop-filter: blur(20px); border-radius: 16px;">
    <div class="container-fluid">
         <div class="col-12 d-flex flex-row justify-content-between">
            <a href="/event/{{$event->id}}"  class="col-sm-2 col-md-2 mb-4 mt-2" ><img src="/img/arrow.png"></a>
            <img src="/img/Logoright.png" style="width: 108px; height: 58px;" class="logo_join col-sm-2 col-xs-2" >
            </div>
        <div class="row">
            @foreach($allEvents as $allEvent)
            <div class="col-6">
            <a href="/event/{{$allEvent->id}}" class="wrap" style="background: #FF931E; backdrop-filter: blur(20px);">
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
               </div>
        @endforeach





        </div>
    </div>
</div>
@endsection
