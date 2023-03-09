@extends('layouts.admin_layout')

@section('title', 'Редактирование')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование: {{ $category['title'] }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
              <div class="card card-primary">

              <!-- form start -->
              <form action=" {{ route ('category.update', $category['id']) }}" method="POST">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Имя сотрудника</label>
                    <input type="text" value="{{ $category['title'] }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Имя клиента" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Сообщение</label>
                    <input type="text" name="job" class="form-control" id="exampleInputPassword1" placeholder="Сообщение"required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
              </form>
            </div>
              </div>
          </div>
      </div>
    </section>

@endsection