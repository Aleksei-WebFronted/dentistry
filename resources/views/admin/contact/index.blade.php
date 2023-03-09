@extends('layouts.admin_layout')

@section('title', 'Тех. Поддержка')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Поддержка</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        
        <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          ID
                      </th>
                      <th>
                          Имя 
                      </th>
                      <th style="width: 30%">
                          Почта
                      </th>
                      <th>
                          Тема
                      </th>
                      <th>
                          Сообщение
                      </th>
                      <th>
                          Дата отправки сообщения
                      </th>
                  </tr>
              </thead>
              <tbody>

              
                  


              @foreach ($contacts as $contact)
                  <tr>
                      <td>
                      {{ $contact['id'] }} 
                      </td>
                      <td>
                          {{ $contact['name'] }} 
                      </td>
                      <td class="project_progress">
                          <div>
                          {{ $contact['email'] }} 
                              </div>
                          </div>
                      </td>
                      <td class="project_progress">
                          <div>
                          {{ $contact['subject'] }} 
                              </div>
                          </div>
                      </td>
                      <td class="project_progress">
                          <div>
                          {{ $contact['message'] }} 
                              </div>
                          </div>
                      </td>
                      <td class="project_progress">
                          <div>
                          {{ $contact['created_at'] }} 
                              </div>
                          </div>
                      </td>
                      <td class="project-actions text-right">

                          <!-- <a class="btn btn-info btn-sm" href="{{ route('contact.edit', $contact['id']) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a> -->
                          <form action="{{ route('contact.destroy', $contact['id']) }}" method="POST" style="display: inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                              Удалить
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
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection