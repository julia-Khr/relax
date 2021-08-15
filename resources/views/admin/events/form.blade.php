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
                      <input value="{{ old('title', isset($event) ? $event->name : null)}}"
                      class="form-control form-control-md" type="text" name="name"
                      placeholder="Введіть назву">
                      @error('name')
                      <div class='alert alert-danger'>
                      {{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="description">Опис події</label>
                      <textarea name="description" id="description" cols="154" rows="10">{{old('description', isset($event) ? $event->description:null)}}</textarea>
                      @error('description')
                      <div class='alert alert-danger'>
                      {{$message}}</div>
                      @enderror
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="start_date">Дата початку</label>
                        <input value="{{ old('start_date', isset($event) ? $event->name : null)}}"
                        class="form-control form-control-md" type="date" name="start_date"
                        placeholder="Введіть назву">
                        @error('start_date')
                        <div class='alert alert-danger'>
                        {{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                          <label for="finish_date">Дата закінчення</label>
                          <input value="{{ old('finish_date', isset($event) ? $event->name : null)}}"
                          class="form-control form-control-md" type="date" name="finish_date"
                          placeholder="Введіть назву">
                          @error('finish_date')
                          <div class='alert alert-danger'>
                          {{$message}}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="enterprise_id">ID заходу</label>
                          <input value="{{ old('enterprise_id', isset($event) ? $event->enterprise_id : null)}}"
                          class="form-control form-control-md" type="text" name="enterprise_id"
                          placeholder="Введіть назву">
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

