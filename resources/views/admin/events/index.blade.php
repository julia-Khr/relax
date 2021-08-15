@extends('layouts.admin.admin_layout')
@section('title', 'Події')
@section('content')
<section class="content ">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-center background-img">
                <h1 class="card-title fs-1" style="color:#FFFFFF; font-family:Montserrat; font-size:5vw">Події</h1>
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
                            ID заходу
                        </th>
                        <th class="text-end">
                            Панель керування
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                    <tr>
                        <td>
                            {{$event->id}}
                        </td>
                        <td>
                            {{$event->name}}
                        </td>
                        <td>
                            {{$event->description}}
                        </td>
                        <td>
                            {{$event->start_date}}
                        </td>
                        <td>
                            {{$event->finish_date}}
                        </td>
                        <td>
                            {{$event->enterprise_id}}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm mb-2" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Переглянути
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('events.edit', $event)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редагувати
                            </a>
                            <form method="POST" action="{{route('events.destroy', $event)}}" class="btn ">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm ">
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
</section>
@endsection
