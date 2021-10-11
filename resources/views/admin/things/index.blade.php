@extends('layouts.admin.admin_layout')
@section('title', 'Речі')
@section('content')
    <section class="content ">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-column text-center background-img">
                    <h1 class="card-title fs-1" style="color:#FFFFFF; font-family:Montserrat; font-size:5vw">Речі</h1>
                    <div><a href="{{route('things.create')}}" class="nav-link font-size-for-create" >
                        <i class="far fa-calendar-plus"></i></div>
                        <p>Додати нову</p>
                    </a>
                </div>
            </div>
            <div class="card  mt-2" style="width: 100%;">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">№ {{$thing->id}}</li>
                  <li class="list-group-item">Назва: {{$thing->name}}</li>
                  <li class="list-group-item">Категорія: {{$thing->thing_category->name}}</li>
                  <li class="list-group-item">Події:
                        @foreach ($thing->events()->whereDate('start_date', '>=', $currentDate)->get() as $thing){{$thing->name}} @endforeach </li>
                </ul>
        </div>
        <a href="{{url()->previous()}}"  class="btn btn-secondary btn col-sm-2 col-md-2 mb-4 mt-2">Назад</a>
        @include('inc.delete_confirm')
    </section>
@endsection
