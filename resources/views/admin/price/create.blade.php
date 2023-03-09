@extends('layouts.admin_layout')

@section('title', 'Добавить услугу')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить услугу</h1>
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
          <div class="row">
              <div class="col-lg-12">
              <div class="card card-primary">

              <!-- form start -->
              <form action=" {{ route ('price.store') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Название Услуги</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Название Услуги" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Цена</label>
                    <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Цена"required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">фаил</label>
                    <input type="file" name="file" class="form-control" id="exampleInputPassword1" required>
                  </div> -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
              </form>
            </div>
              </div>
          </div>
      </div>
    </section>

@endsection