@extends('layouts.admin.admin_layout')

@section('title', 'Відгуки')

@section('content')
<div class="card-header">
    <div class="d-flex flex-column text-center background-img">
        <h1 class="card-title fs-1" style="color:#FFFFFF; font-family:Montserrat; font-size:5vw">Відгуки</h1>
        <div>
            <a href="{{route('responses.create')}}" class="nav-link font-size-for-create">
                <i class="fas fa-plus-square"></i>
                <p>Додати новий</p>
              </a>
        </div>
    </div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Подія</th>
        <th scope="col">Автор</th>
        <th scope="col">Аватар</th>
        <th scope="col">Текст</th>
        <th scope="col">Дата</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($responses as $response)
      <tr>
        <th scope="row">{{$response->id}}</th>
        <td>{{$response->event->name}}</td>
        <td>{{$response->author_name}}</td>
        <td>
            <img alt="{{ $response->author_name }}" class="table-avatar", width="100"
            src="/author_avatar_url/{{$response->author_avatar_url}}">
        </td>
        <td>{{$response->text}}</td>
        <td>{{$response->date}}</td>
        <td><a class="btn btn-primary" href="{{route('responses.edit', $response)}}">Редагувати</a></td>
        <td> <form method="POST" action="{{route('responses.destroy', $response)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" href="{{route('responses.destroy', $responses)}}">Видалити</button>

        </form></td>
        </tr>

        @endforeach
        </tbody>
  </table>
  @endsection
