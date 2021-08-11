@extends('layouts.admin.admin_layout')

@section('title', 'Заходи')

@section('content')



    <section class="content ">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-center" ><h1 class="card-title fs-1">Заходи</h1> </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th >
                          ID
                      </th>
                      <th >
                          Назва заходу
                      </th>
                      <th >
                          Фото заходу
                      </th>

                      <th class="text-end">
                          Панель керування
                      </th>
                  </tr>
              </thead>


              <tbody>
                  @foreach ($enterprises as $enterprise)
                      <tr>
                      <td>
                         {{$enterprise->id}}
                      </td>
                      <td>
                          <a>
                               {{$enterprise->name}}
                          </a>
                          <br>
                          <small>
                            <span>Створено:{{$enterprise->created_at}}</span>
                          </small>
                      </td>
                      <td>

                                  <img alt="{{$enterprise->name}}" class="table-avatar" src="{{$enterprise->image_url}}">

                      </td>

                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              Переглянути
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('enterprises.edit', $enterprise)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редагувати
                          </a>
                          <form method="POST" action="{{route('enterprises.destroy', $enterprise)}}" class="btn " >
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
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

@endsection
