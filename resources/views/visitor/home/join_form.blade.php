@extends('layouts.visitor.layout')

@section('title', 'Home page')
@section('content')
<div class="background-img">
    <div class="container-fluid">
        <div class="row">
            <a href="/enterprise/{{$event->enterprise_id}}"  class="mb-4" ><img src="/img/arrow.png"></a>
            <div class="col-lg-5 col-md-6 form_frame mb-4">
                <form method="POST" action="{{route('visitors.store')}}">
                    @csrf
                    <h2 style="font-family: Montserrat;
                font-style: normal; font-weight: 500;font-size: 36px;line-height: 44px; color: #FFFFFF;
                    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.35);">
                        Підтвердження замовлення </h2>
                    <input value="{{old('name', isset($visitor) ? $visitor->name : null)}}" type="text" id="name" name="name" class="input_frame mb-2 placeholder_style mx-auto"
                        placeholder="Ім'я"><br>
                    <input value="{{old('phone', isset($visitor) ? $visitor->phone : null)}}" type="text" id="phone" name="phone" class="input_frame mb-2 placeholder_style"
                        placeholder="Номер телефону"><br>
                    <input value="{{old('email', isset($visitor) ? $visitor->email : null)}}" type="email" id="email" name="email" class="input_frame mb-2 placeholder_style"
                        placeholder="E-mail"><br>
                    <input disabled type="text" id="enterprise_name" name="enterprise_name"
                        class="input_frame mb-2 placeholder_style" value="{{$enterprises[$event->enterprise_id-1]->name}}" style="color:#000000"><br>
                    <input readonly value="{{old('event_id', isset($visitor) ? $visitor->event_id : $event->id)}}"
                    type="text" id="event_id" name="event_id" class="input_frame mb-2 placeholder_style" style="display:none"
                    placeholder="{{$event->name}}">
                    <input disabled value="{{$event->name}}" type="text" id="event_id" name="event_id" class="input_frame mb-2 placeholder_style"
                    placeholder="{{$event->name}}" style="color:#000000"><br>
                    <div class="input_frame justify-content-between"
                        style="height:fit-content;border-radius: 16px; width:40%">
                        <div class="event" style="color:#000000">
                            <div class="event_elements">Start<br>{{( Carbon\Carbon::parse($event->start_date)->format('d F Y'))}}</div>
                            <div class="line" style="color:#000000"></div>
                            <div class="event_elements">Finish<br>{{( Carbon\Carbon::parse($event->finish_date)->format('d F Y'))}}</div>
                        </div>
                        <button type="submit" class="join_button"
                            style="position:absolute; right: 30px; bottom: 30px; ">Приєднатися</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
