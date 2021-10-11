@extends('layouts.admin.admin_layout')
@section('title', 'Категорії речей')
@section('content')
    <section class="content ">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-column text-center background-img">
                    <h1 class="card-title fs-1" style="color:#FFFFFF; font-family:Montserrat; font-size:5vw">Речі</h1>
                    <div><a href="{{route('thingCategories.create')}}" class="nav-link font-size-for-create" >
                        <i class="far fa-calendar-plus"></i></div>
                        <p>Додати нову категорію</p>
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Назва категорії
                            </th>
                            <th>
                                Картинка категорії
                            </th>
                            <th>
                                Речі категорії
                            </th>
                            <th class="text-center">
                                Панель керування
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($thingCategories as $thingCategory)
                            <tr>
                                <td>
                                    {{ $thingCategory->id }}
                                </td>
                                <td>
                                    {{ $thingCategory->name }}
                                </td>
                                <td>
                                <img alt="{{ $thingCategory->name }}" class="table-avatar"
                                        src="/thing_img_url/{{ $thingCategory->thing_img_url }}">
                                </td>

                                <td>
                                    @foreach($thingCategory->things()->get() as $thing)
                                          {{$thing->name}}<br>
                                    @endforeach
                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-info" href="{{ route('thingCategories.edit', $thingCategory) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редагувати
                                    </a>
                                    <form method="POST" action="{{ route('thingCategories.destroy', $thingCategory) }}"
                                        class="btn ">
                                        @csrf
                                        @method('DELETE')

                                        <button class='btn btn-danger' type='button' data-toggle="modal"
                                            data-target="#confirmDelete" data-title="Видалення Категорії Речей"
                                            data-message='Ви впевнені, що хочете видалити категорію речей {{ $thingCategory->name }}?'>
                                            <i class="fas fa-trash">
                                                Видалити</i>
                                        </button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('inc.delete_confirm')
    </section>
    {!! $thingCategories->links('pagination::pagination') !!}
@endsection
