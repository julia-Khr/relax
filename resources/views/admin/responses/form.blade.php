@extends('layouts.admin.admin_layout')

@section('title', isset($response) ? 'Update response: ' . $response->author_name : 'Create response')

@section('content')
<section class="content">
    <form method="POST"
    enctype="multipart/form-data"
    @if (isset($response))
    action="{{route('responses.update', $response)}}"
    @else
    action="{{route('responses.store')}}"
    @endif>
    @csrf
    @isset($response)
    @method('PUT')
    @csrf
    @endisset

    <div class="row">
        <div class="col-8">
        <div class="form-group mb-3">
              <label for="image">Завантажити аватар</label><br>
              <div class="form-group">
                <input type="file" name="author_avatar_url" class="file-input" placeholder="image">

            </div>
            @if (isset($response->author_avatar_url))
                <div class="container">
                    <img src="/author_avatar_url/{{ $response->author_avatar_url }}" width="300px">
                </div>
            @endif
              @error('image')<div class="panel alert-danger">{{$message}}</div>

               @enderror

        </div>
        <div class="mb-3">
        <input name="author_name"
               value="{{isset($response) ? $response->author_name : null}}"
               type="text" id="Author" class="form-control" placeholder="Автор" aria-label="author_name">
               @error('author_name')<div class="panel alert-danger">{{$message}}</div>

               @enderror
        </div>
        <div class="mb-3">
            <select class="form-control" name="event_id" >
                <option>Вибрати подію</option>
                @foreach ($events as $event)
                <option value="{{$event->id}}">{{$event->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
        <textarea name="text"
               type="text" id="Text" class="form-control" placeholder="Введіть відгук" aria-label="text">{{isset($response) ? $response->text : null}}</textarea>
               @error('text')<div class="panel alert-danger">{{$message}}</div>

               @enderror
        </div>
        <div class="mb-3">
        <input name="date"
               value="{{isset($response) ? $response->date : null}}"
               type="date" class="form-control" placeholder="Date" aria-label="date">
               @error('author_name')<div class="panel alert-danger">{{$message}}</div>

               @enderror
        </div>
               <button type="submit" class="btn btn-warning" >{{ isset($response) ? 'Оновити' : 'Створити' }}</button>

            </div>
        </div>
    </form>

</section>
@endsection
