@extends('layouts.admin.admin_layout')

@section('title', isset($thing) ? 'Update thing: ' . $thing->name : 'Create thing')

@section('content')
<section class="content">
<div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title">{{isset($thing) ? 'Оновити річ' : 'Створити річ'}}</h3>
              </div>
              <form method="POST"
                @if (isset($thing))
                action="{{route('things.update', $thing)}}";
                @else
                action="{{route('things.store')}}";
                @endif>
                @csrf
                @isset($thing)
                    @method('PUT')
                @endisset

                <div class="card-body">

                    <div class="form-group">
                      <label for="name">Назва речі</label>
                      <input value="{{isset($thing) ? $thing->name : null}}"
                      class="form-control form-control-md" type="text" name="name"
                      placeholder="Введіть назву">
                      @error('name')
                      <div class='alert alert-danger'>
                      {{$message}}</div>
                      @enderror
                    </div>

                        <div class="form-group">
                          <label for="thing_category_id">Категорія речі</label>
                          <select class="form-control" name="thing_category_id" >
                            <option>Вибрати категорію</option>
                            @foreach ($thingCategories as $thingCategory)
                            <option value="{{$thingCategory->id}}">{{$thingCategory->name}}</option>
                            @endforeach
                        </select>
                          @error('thing_category_id')
                          <div class='alert alert-danger'>
                          {{$message}}</div>
                          @enderror
                        </div>

                    <div class="card-body">
                        <div class="form-group">
                          <label for="event_id[]">Події</label>
                          <select name="event_id[]"  size="5" id="event_id" multiple="multiple">
                             @foreach ($events as $event)
                            <option class="form-control" value="{{$event->id}}">{{$event->name}}</option>
                            @endforeach
                            </select>
                          @error('event_id')
                          <div class='alert alert-danger'>
                          {{$message}}</div>
                          @enderror
                        </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{isset($thing) ? 'Оновити' : 'Створити'}}</button>
                </div>
              </form>
            </div>
</section>

@endsection


