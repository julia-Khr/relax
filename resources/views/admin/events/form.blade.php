@extends('layouts.admin.admin_layout')

@section('title', isset($event) ? 'Update event: ' . $event->name : 'Create event')

@section('content')
<section class="content">
<div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title">{{isset($event) ? 'Оновити подію' : 'Створити подію'}}</h3>
              </div>

              <form method="POST"
                @if (isset($event))
                action="{{route('events.update', $event)}}";
                @else
                action="{{route('events.store')}}";
                @endif>
                @csrf
                @isset($event)
                    @method('PUT')
                @endisset

                <div class="card-body">
                    <div class="form-group">
                      <label for="name">Назва події</label>
                      <input value="{{isset($event) ? $event->name : null}}"
                      class="form-control form-control-md" type="text" name="name"
                      placeholder="Введіть назву">
                      @error('name')
                      <div class='alert alert-danger'>
                      {{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="description">Опис події</label>
                      <textarea name="description" id="description" cols="154" rows="10">{{isset($event) ? $event->description:null}}</textarea>
                      @error('description')
                      <div class='alert alert-danger'>
                      {{$message}}</div>
                      @enderror
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="start_date">Дата початку</label>
                        <input value="{{isset($event) ? $event->start_date : null}}"
                        class="form-control form-control-md" type="date" name="start_date">
                        @error('start_date')
                        <div class='alert alert-danger'>
                        {{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                          <label for="finish_date">Дата закінчення</label>
                          <input value="{{isset($event) ? $event->finish_date : null}}"
                          class="form-control form-control-md" type="date" name="finish_date">
                          @error('finish_date')
                          <div class='alert alert-danger'>
                          {{$message}}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="enterprise_id">ID заходу</label>
                          <select class="form-control" name="enterprise_id" >
                            <option>Вибрати захід</option>
                            @foreach ($enterprises as $enterprise)
                            <option value="{{$enterprise->id}}">{{$enterprise->name}}</option>
                            @endforeach
                        </select>
                          @error('enterprise_id')
                          <div class='alert alert-danger'>
                          {{$message}}</div>
                          @enderror
                        </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{isset($event) ? 'Оновити' : 'Створити'}}</button>
                </div>
              </form>
            </div>
</section>

@endsection

