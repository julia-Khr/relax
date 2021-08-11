@extends('layouts.visitor.layout')

@section('title', 'Home page')
@section('content')
  <div class="img__container">
    <img src="/img/tourist.png" class="img-fluid" alt="Описание изображения...">
    <div class="img__description">
      <div class="img__header">Заголовок для текста</div>
      Текст поверх изображения...
    </div>
  </div>

@endsection
