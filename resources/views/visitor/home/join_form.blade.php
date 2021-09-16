<style>
    @media (max-width:767.98px) {
        nav.navbar{
            display:none;
        }
        div.background-img{
            border-radius: 0;
            padding-top: 0;
        }
    }
</style>


@extends('layouts.visitor.layout')
@section('title', 'Home page')
@section('content')
<div class="background-img">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-row justify-content-between">
            <a href="/event/{{$event->id}}"  class="col-sm-2 col-md-2 mb-4 mt-2" ><img src="/img/arrow.png"></a>
            <img src="/img/Logoright.png" style="width: 108px; height: 58px;" class="logo_join col-sm-2 col-xs-2" >
            </div>
                <form method="POST" action="{{route('visitors.store')}}">
                <div class="col-xl-6 col-lg-7 col-md-8 form_frame mb-4">
                    @csrf
                    <h2 style="font-family: Montserrat;
                font-style: normal; font-weight: 500;font-size: 36px;
                line-height: 44px; color: #FFFFFF;
                    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.35);">
                        Підтвердження замовлення </h2>
                    <input value="{{old('name', isset($visitor) ? $visitor->name : null)}}" type="text" id="name" name="name" class="input_frame mb-2 placeholder_style mx-auto"
                        placeholder="Ім'я"><br>

                    <input value="{{old('phone', isset($visitor) ? $visitor->phone : null)}}" type="text" id="phone" name="phone" class="input_frame mb-2 placeholder_style"
                        placeholder="Номер телефону"><br>
                    <input value="{{old('email', isset($visitor) ? $visitor->email : null)}}" type="email" id="email" name="email" class="input_frame mb-2 placeholder_style"
                        placeholder="E-mail"><br>
                    <input disabled type="text" id="enterprise_name" name="enterprise_name"
                        class="input_frame mb-2 placeholder_style" value="{{$event->enterprise->name}}" style="color:#000000"><br>
                        <input readonly value="{{old('event_id', isset($visitor) ? $visitor->event_id : $event->id)}}"
                    type="text" id="event_id" name="event_id" class="input_frame mb-2 placeholder_style" style="display:none"
                    placeholder="{{$event->name}}">
                    <input disabled value="{{$event->name}}" type="text" id="event_id" name="event_id" class="input_frame mb-2 placeholder_style"
                    placeholder="{{$event->name}}" style="color:#000000"><br>
                    <div class="join_to_event">
                    <div class="input_frame justify-content-between"
                        style="height:fit-content;border-radius: 16px; width:40%">
                        <div class="event" style="color:#000000">
                            <div class="event_elements">Старт<br>{{ Carbon\Carbon::parse($event->start_date)->translatedFormat('j F Y') }}</div>
                            <div class="line" style="color:#000000"></div>
                            <div class="event_elements">Фініш<br>{{ Carbon\Carbon::parse($event->finish_date)->translatedFormat('j F Y') }}</div>
                        </div>
                    </div>
                    <button type="submit" class="join_button_laptop join_button" style="margin-top: 50px">Приєднатися</button>
                    </div>
                </div>
                <div style="text-align: center;margin: 0 auto;">
                    <button type="submit" class="col-10 join_button_mobile join_button mb-4"  >Приєднатися</button>
                </div>
                </form>
        </div>
    </div>
</div>
@endsection
