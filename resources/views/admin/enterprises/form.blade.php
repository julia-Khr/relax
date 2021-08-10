@extends('layouts.admin_layout')

@section('title', isset($enterprise) ? 'Update Enterprise: ' . $enterprise->name : 'Create enterprise')

@section('content')
<section class="content">
{{-- {{dd($enterprise)}} --}}
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{isset($enterprise) ? 'Оновити захід' : 'Створити захід'}}</h3>
              </div>

              <form method="POST"
                @if (isset($enterprise))
                action="{{route('enterprises.update', $enterprise)}}";

                @else
                action="{{route('enterprises.store')}}";
                @endif>
                @csrf
                @isset($enterprise)
                    @method('PUT')
                @endisset

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Назва заходу</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Введіть назву"
                    value="{{isset($enterprise) ? $enterprise->name : null}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">image_url</label>
                    <input type="text" name="image_url" class="form-control" id="image_url" placeholder="image"
                    value="{{isset($enterprise) ? $enterprise->image_url: null}}">
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
                  <button type="submit" class="btn btn-primary">{{isset($enterprise) ? 'Оновити' : 'Створити'}}</button>
                  {{-- {{dd($_POST)}} --}}
                </div>
              </form>
            </div>
</section>

@endsection

