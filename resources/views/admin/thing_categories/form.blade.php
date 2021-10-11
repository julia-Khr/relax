@extends('layouts.admin.admin_layout')

@section('title', isset($thingCategory) ? 'Update thingCategory: ' . $thingCategory->name : 'Create thingCategory')

@section('content')
<section class="content">
<div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title">{{isset($thingCategory) ? 'Оновити категорію' : 'Створити категорію'}}</h3>
              </div>

              <form method="POST"
               enctype="multipart/form-data"
                @if (isset($thingCategory))
                action="{{route('thingCategories.update', $thingCategory)}}";
                @else
                action="{{route('thingCategories.store')}}";
                @endif>
                @csrf
                @isset($thingCategory)
                    @method('PUT')
                @endisset

                <div class="card-body">
                    <div class="form-group">
                      <label for="name">Назва категорії речей</label>
                      <input value="{{isset($thingCategory) ? $thingCategory->name : null}}"
                      class="form-control form-control-md" type="text" name="name"
                      placeholder="Введіть назву">
                      @error('name')
                      <div class='alert alert-danger'>
                      {{$message}}</div>
                      @enderror
                </div>
                <div class="form-group">
                    <label for="thing_img_url">Завантажити картинку категорії</label><br>
                    <input  value="{{isset($thingCategory) ? $thingCategory->thing_img_url : null}}" type="file" name="thing_img_url" class="file-input" id="chooseFile"
                    placeholder="image">
                </div>
                    @if (isset($thingCategory->thing_img_url))
                    {{-- value="{{old('thing_img_url', $thingCategory->thing_img_url ?? '')}}" --}}
                    {{-- value="{{isset($thingCategory) ? $thingCategory->thing_img_url : null}}" --}}
                    <div class="container">
                        <img src="/thing_img_url/{{ $thingCategory->thing_img_url }}" width="300px">
                    </div>
                    @endif
                @error('image')<div class="panel alert-danger">{{$message}}</div>

                @enderror
                </form>
                <a class="btn btn-primary mt-2" href="{{route('things.create')}}">Додати річ</a><br>
                @if (isset($thingCategory))
                    @foreach($things  as $thing)

                    {{$thing->name}}<br>
                     <div class="row">
                    <div class="col-2">
                        <a class="btn btn-warning" href="{{route('things.edit', $thing)}}"> <i class="fas fa-pencil-alt">
                        </i>Редагувати</a>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-primary" href="{{route('things.show', $thing)}}">Переглянути</a>
                      </div>
                    <div class="col-2">
                        <form method="POST" action="{{route('things.destroy',$thing)}}"><br>
                        @csrf
                        @method('DELETE')

                        <button class='btn btn-danger' type='button' data-toggle="modal"
                                            data-target="#confirmDelete" data-title="Видалення Речі"
                                            data-message='Ви впевнені, що хочете видалити {{ $thing->name }}?'>
                                            <i class="fas fa-trash">
                                                Видалити</i>
                                        </button>
                    </div>
                    </form>
                    </div>
                    @endforeach
                @endif

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{isset($thingCategory) ? 'Оновити' : 'Створити'}}</button>
                </div>

</tr>
            </div>
            @include('inc.delete_confirm')
</section>

@endsection
