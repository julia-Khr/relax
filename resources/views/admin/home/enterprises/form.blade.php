@extends('layouts.admin_layout')

@section('title', isset($enterprise) ? 'Update Enterprise: '.$enterprise->name : 'Create enterprise')

@section('content')
 @if (session('success'))
        <div class="alert alert-success"> {{session('success')}} </div>
        @endif
         @if (session('danger'))
        <div class="alert alert-danger">{{session('danger')}}</div>
        @endif
<div class="container">


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Створити захід</h3>
              </div>

              <form method="POST" action="{{route('enterprises.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Назва заходу</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Введіть назву">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">image_url</label>
                    <input type="text" name="image_url" class="form-control" id="image_url" placeholder="image">
                  </div>
                  {{-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body --> --}}

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  {{-- {{dd($_POST)}} --}}
                </div>
              </form>
            </div>



{{-- <form  method="POST"
    @if (isset($enterprise))
    action="{{route('enterprises.update', $enterprise)}}";

    @else
    action="{{route('enterprises.store')}}";
    @endif>
    @csrf
    @isset($enterprise)
        @method('PUT')
    @endisset
    <div class="form-group">
       <input class="form-control" type="text"  name="name" id="name" placeholder="name"
        value="{{isset($enterprise) ? $enterprise->name : null}}">
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input class="form-control mt-3" type="text"  name="image_url" id="image_url" placeholder="image_url"
        value="{{isset($enterprise) ? $enterprise->image_url: null}}">
        @error('image_url')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="d-flex justify-content-end">
            <button class="btn btn-success mt-3 " type="submit"> Create</button>
        </div>
    </div>
</form> --}}
</div>

@endsection

