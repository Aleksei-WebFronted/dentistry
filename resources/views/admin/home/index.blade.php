@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')
@php 
    use App\Models\User;
    use App\Models\Record;
    use App\Models\Contact;
    use App\Models\Category;
    use App\Models\Word;
@endphp
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Главная</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
           <div class="col-lg-3 col-6"> 
            <!-- small box -->
             <div class="small-box bg-info">
              <div class="inner">
                <h3>{{Contact::count()}}</h3>

                <p>Тех. поддержка</p>
              </div>
              <div class="icon">
              <i class="far fa-envelope"></i>
              </div>
              <a href="{{ route('contact.index') }}" class="small-box-footer">Все  <i class="fas fa-arrow-circle-right"></i></a>
            </div> 
          </div>
          <!-- ./col -->
           <div class="col-lg-3 col-6"> 
            <!-- small box -->
             <div class="small-box bg-success">
              <div class="inner">
                <h3>{{Category::count()}}<sup style="font-size: 20px"></sup></h3>

                <p>Отзывы на сайте</p>
              </div>
              <div class="icon">
              <i class="far fa-comment-alt"></i>
              </div>
              <a href="{{ route('category.index') }}" class="small-box-footer">Перейти к списку <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3>{{Word::count()}}</h3>

                <p>Все врачи</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-md"></i>
              </div>
              <a href="{{ route('word.index') }}" class="small-box-footer">Все врачи <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{User::count()}}</h3>

                <p>Зарегистрировано пользователей</p>
              </div>
              <div class="icon">
              <i class="fas fa-users"></i></i>
              </div>
              <a href="{{ route('user.index') }}" class="small-box-footer">Все пользователи <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box bg-danger">
              <div class="inner">
                 <h3>{{Record::count()}}</h3>

                <p>Оставленно заявок</p>
              </div>
              <div class="icon">
              <i class="fas fa-phone-alt"></i>
              </div>
              <a href="{{ route('record.index') }}" class="small-box-footer">Все заявки <i class="fas fa-arrow-circle-right"></i></a>
            </div> 
          </div> 
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection