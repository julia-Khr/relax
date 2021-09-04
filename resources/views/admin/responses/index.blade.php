@extends('layouts.admin.admin_layout')

@section('title', 'Відгуки')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Подія</th>
        <th scope="col">Автор</th>
        <th scope="col">Аватар</th>
        <th scope="col">Текст</th>
        <th scope="col">Дата</th>
        <th scope="col">Action</th>
        <th scope="col">Action</th>
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
