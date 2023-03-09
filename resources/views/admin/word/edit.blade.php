@extends('layouts.admin_layout')
@section('title', 'Редактировать врача')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0">Редактировать услугу: {{ $word['name'] }}</h1>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
      @if (session('success'))
      <div class="alert alert-success" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
      </div>
      @endif
   </div>
   <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="card card-primary">
               <!-- form start -->
               <form action="{{ route('word.update', $word['id']) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Имя врача</label>
                        <input type="text" value="{{ $word['name'] }}" name="name" class="form-control" id="exampleInputEmail1" placeholder="Введите имя врача" required>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <input type="text" value="{{ $word['des'] }}" name="des" class="form-control" id="exampleInputEmail1" placeholder="Введите описание врача" required>
                     </div>
                     <div class="form-group">
                     <!-- <label for="exampleInputPassword1">Фото</label> -->
                     <input type="hidden" name="photo" class="form-control" id="exampleInputPassword1" placeholder="Фото врача" value="{{ $word['photo'] }}">
                  </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     <button type="submit" class="btn btn-primary">Обновить</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- /.row (main row) -->
   </div>
   <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection