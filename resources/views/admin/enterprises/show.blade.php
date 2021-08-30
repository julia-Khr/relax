@extends('layouts.admin.admin_layout')

@section('title', isset($enterprise) ? 'Update Enterprise: ' . $enterprise->name : 'Create enterprise')

@section('content')
    <section class="content">
        {{-- {{dd($enterprise)}} --}}

        <div class="row flex-xxl-row d-flex justify-content-center">
            <div class="card col-4">
                <img src="/image_url/{{ $enterprise->image_url }}" class="card-img-top "
                    alt="{{ $enterprise->image_url }}">
                <div class="card-body">
                    <h2 class="fs-1 text-center">{{ $enterprise->name }}</h2><br>
                    <div class="row d-flex justify-content-center">

                        <a href="{{ route('enterprises.index') }}" class="btn btn-primary btn-sm mr-2">Переглянути всі</a>
                        <a class="btn btn-info btn-sm " href="{{ route('enterprises.edit', $enterprise) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редагувати
                        </a>
                        <form method="POST" action="{{ route('enterprises.destroy', $enterprise) }}" class="btn ">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm ">
                                <i class="fas fa-trash">
                                    Видалити</i>
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
