@extends('layouts.admin.admin_layout')

@section('title', isset($response) ? 'Update response: ' . $response->author_name : 'Create response')

@section('content')
<section class="content">
    <form method="POST"
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
              <input type="file" name="image" class="form-control" id="image">
              @error('image')<div class="panel alert-danger">{{$message}}</div>

               @enderror

        </div>
        <div class="mb-3">
        <input name="author_name"
               value="{{old('author_name',isset($response) ? $response->author_name : null)}}"
               type="text" id="Author" class="form-control" placeholder="Author" aria-label="author_name">
               @error('author_name')<div class="panel alert-danger">{{$message}}</div>

               @enderror
        </div>
        <div class="mb-3">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                  <option selected>Вибрати подію...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
        </div>

        <div class="mb-3">
        <input name="text"
               value="{{old('text',isset($response) ? $response->text : null)}}"
               type="text" id="Text" class="form-control" placeholder="Text" aria-label="text">
               @error('text')<div class="panel alert-danger">{{$message}}</div>

               @enderror
        </div>
        <div class="mb-3">
        <input name="date"
               value="{{old('date',isset($response) ? $response->date : null)}}"
               type="date" class="form-control" placeholder="Date" aria-label="date">
               @error('author_name')<div class="panel alert-danger">{{$message}}</div>

               @enderror
        </div>
               <button type="submit" class="btn btn-warning">Додати</button>

            </div>
        </div>
    </form>

</section>
@endsection
