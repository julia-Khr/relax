@extends('layouts.admin.admin_layout')

@section('title', isset($enterprise) ? 'Update Enterprise: ' . $enterprise->name : 'Create enterprise')

@section('content')
    <section class="content">
        {{-- {{dd($enterprise)}} --}}
        <div class="card card-primary ">
            <div class="card-header">
                <h3 class="card-title">{{ isset($enterprise) ? 'Оновити захід' : 'Створити захід' }}</h3>
            </div>

            <form method="POST" enctype="multipart/form-data" @if (isset($enterprise))
                action="{{ route('enterprises.update', $enterprise) }}";

            @else
                action="{{ route('enterprises.store') }}";
                @endif>
                @csrf
                @isset($enterprise)
                    @method('PUT')
                @endisset

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Назва заходу</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Введіть назву"
                            value="{{ isset($enterprise) ? $enterprise->name : null }}">
                    </div>
                    <div class="form-group">
                        <input type="file" name="image_url" class="file-input" id="chooseFile" placeholder="image">

                    </div>
                    @if (isset($enterprise->image_url))
                        <div class="container">
                            <img src="/image_url/{{ $enterprise->image_url }}" width="300px">
                        </div>
                    @endif

                    <div class="card-footer">
                        <button type="submit"
                            class="btn btn-primary">{{ isset($enterprise) ? 'Оновити' : 'Створити' }}</button>
                    </div>
            </form>
        </div>
    </section>

@endsection
