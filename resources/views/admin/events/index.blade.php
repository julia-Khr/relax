@extends('layouts.admin.admin_layout')
@section('title', 'Події')
@section('content')
    <section class="content ">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-column text-center background-img">
                    <h1 class="card-title fs-1" style="color:#FFFFFF; font-family:Montserrat; font-size:5vw">Події</h1>
                    <div><a href="{{route('events.create')}}" class="nav-link font-size-for-create" >
                        <i class="far fa-calendar-plus"></i></div>
                        <p>Створити нову</p>
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
                                Назва події
                            </th>
                            <th>
                                Опис події
                            </th>
                            <th>
                                Дата початку
                            </th>
                            <th>
                                Дата закінчення
                            </th>
                            <th>
                                Назва заходу
                            </th>
                            <th class="text-center">
                                Панель керування
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>
                                    {{ $event->id }}
                                </td>
                                <td>
                                    {{ $event->name }}
                                </td>
                                <td>
                                    {{ $event->description }}
                                </td>
                                <td>
                                    {{ $event->start_date }}
                                </td>
                                <td>
                                    {{ $event->finish_date }}
                                </td>
                                <td>
                                    {{ $event->enterprise->name }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        Переглянути
                                    </a>
                                    <a class="btn btn-info" href="{{ route('events.edit', $event) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редагувати
                                    </a>
                                    <form method="POST" action="{{ route('events.destroy', $event) }}"
                                        class="btn ">
                                        @csrf
                                        @method('DELETE')

                                        <button class='btn btn-danger' type='button' data-toggle="modal"
                                            data-target="#confirmDelete" data-title="Видалення Події"
                                            data-message='Ви впевнені, що хочете видалити подію {{ $event->name }}?'>
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
    {!! $events->links() !!}
@endsection
