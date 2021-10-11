@extends('layouts.admin.admin_layout')

@section('title', 'Заходи')

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-column text-center background-img">
                    <h1 class="card-title fs-1" style="color:#FFFFFF; font-family:Montserrat; font-size:5vw">Заходи</h1>
                    <div><a href="{{route('enterprises.create')}}" class="nav-link font-size-for-create">
                        <i class="far fa-calendar-plus"></i></div>
                      <p>Створити новий</p>
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
                                Назва заходу
                            </th>
                            <th>
                                Фото заходу
                            </th>

                            <th class="text-center">
                                Панель керування
                            </th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($enterprises as $enterprise)
                            <tr>
                                <td>
                                    {{ $enterprise->id }}
                                </td>
                                <td>
                                    <a>
                                        {{ $enterprise->name }}
                                    </a>
                                    <br>
                                    <small>
                                        <span>Створено:{{ $enterprise->created_at }}</span>
                                    </small>
                                </td>
                                <td>

                                    <img alt="{{ $enterprise->name }}" class="table-avatar"
                                        src="{{ $enterprise->image_url }}">

                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-primary" href="{{ route('enterprises.show', $enterprise) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Переглянути
                                    </a>
                                    <a class="btn btn-info" href="{{ route('enterprises.edit', $enterprise) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редагувати
                                    </a>
                                    <form method="POST" action="{{ route('enterprises.destroy', $enterprise) }}"
                                        class="btn">
                                        @csrf

                                        @method('DELETE')

                                        <button class='btn btn-danger' type='button' data-toggle="modal"
                                            data-target="#confirmDelete" data-title="Видалення Заходу"
                                            data-message='Ви впевнені, що хочете видалити захід {{ $enterprise->name }}?'>
                                            <i class="fas fa-trash">Видалити</i>
                                               </button>


                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        @include('inc.delete_confirm')
    </section>

    {!! $enterprises->links('pagination::pagination') !!}



@endsection
