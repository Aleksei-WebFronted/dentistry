<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/tooth-health/154/tooth-round-health-stomatology-white-512.png" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Главная</title>
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/tooth-health/154/tooth-round-health-stomatology-white-512.png" type="image/x-icon">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="/main.css">
   </head>
   <body class="bg-light text-dark">
      <!-- Header -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
         <div class="container">
            <a class="navbar-brand" href="#">
            <img src="https://wg-up.ru/wp-content/uploads/ne-delajte-etogo.-inache-u-vas-vypadut-zuby.png" width="40" height="40" alt=""> Стоматология 32</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"> <a class="nav-link" href="/">Главная
                     <span class="sr-only">(current)</span>
                     </a> 
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="/aboutus">О нас</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="/price">Цены</a> </li>
                  <li class="nav-item dropdown indent-to-the-right indenting-text">
                     <a class="nav-link dropdown-toggle" href="/clinic" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Клиника</strong></a>
                     <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="/clinic">О клинике</a>
                        <a class="dropdown-item" href="/requisites">Реквизиты</a>
                     </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="/category">Отзывы</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="/contact">Контакты</a> </li>
                  <li class="nav-item dropdown indent-to-the-right indenting-text">
                     <a class="nav-link dropdown-toggle" href="/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Пациентам</strong></a>
                     <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="/ourservice">Наш сервис</a>
                        <a class="dropdown-item" href="/healomc">Лечение по ОМС</a>
                        <a class="dropdown-item" href="/healdmc">Лечение по ДМС</a>
                        <a class="dropdown-item" href="/privacypolicy">Политика конфиденциальности сайта стоматологии</a>
                        <a class="dropdown-item" href="/rights">Права и обязанности пациентов</a>
                     </div>
                  </li>
                  <li class="nav-item"> <a  href="/login"><button type="button" class="btn btn-outline-success">Мой кабинет</button></a></li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- carousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators ">
            <li data-target="#carouselExampleIndicators " data-slide-to="0" class="active bg-danger"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-danger"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-danger"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active col-12 " style="background-image: url('https://luberdent.ru/wp-content/uploads/2020/11/microscop-1.png')">
               <div class="carousel-caption d-none d-md-block">
                  <h3 class="display-4 text-primary">
                     <ya-tr-span data-index="5-0" data-value="First Slide" data-translation="Первый Слайд" data-type="trSpan">Инновационное лечение под микроскопом</ya-tr-span>
                  </h3>
                  <p class="lead text-primary">
                     <ya-tr-span data-index="6-0" data-value="This is a description for the first slide." data-translation="Это описание для первого слайда." data-type="trSpan">Новейшие технологии теперь доступны всем!</ya-tr-span>
                  </p>
               </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('https://luberdent.ru/wp-content/uploads/2020/11/implanti-1.png')">
               <div class="carousel-caption d-none d-md-block">
                  <h3 class="display-4 text-primary">
                     <ya-tr-span data-index="7-0" data-value="Second Slide" data-translation="Второй Слайд" data-type="trSpan">Самые современные системы имплатации</ya-tr-span>
                  </h3>
                  <p class="lead text-primary">
                     <ya-tr-span data-index="8-0" data-value="This is a description for the second slide." data-translation="Это описание для второго слайда." data-type="trSpan">Импланты OSSTEM и NOBEL BLOCARE
                        <br>Лучшие предложения клиники! 
                     </ya-tr-span>
                  </p>
               </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('https://luberdent.ru/wp-content/uploads/2020/11/konsult.png')">
               <div class="carousel-caption d-none d-md-block">
                  <h3 class="display-4 text-primary">
                     <ya-tr-span data-index="9-0" data-value="Third Slide" data-translation="Третий Слайд" data-type="trSpan">Бесплатная консультация передовых врачей</ya-tr-span>
                  </h3>
                  <p class="lead text-primary">
                     <ya-tr-span data-index="10-0" data-value="This is a description for the third slide." data-translation="Это описание для третьего слайда." data-type="trSpan">Составление плана лечения и фотопротокол в подарок!</ya-tr-span>
                  </p>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only ">
               <ya-tr-span data-index="11-0" data-value="Previous" data-translation="Предыдущий" data-type="trSpan">Предыдущий</ya-tr-span>
            </span>
         </a>
         <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon " aria-hidden="true"></span>
            <span class="sr-only">
               <ya-tr-span data-index="11-0" data-value="Next" data-translation="Следующий" data-type="trSpan">Следующий</ya-tr-span>
            </span>
         </a>
      </div>
      <hr class="featurette-divider">
      <!-- Server -->
      <div class="mt-5 container marketing">
         <div class="row">
            <div class="col-md-6">
               <div class="mt-1 pb-2 media">
                  <img class="mr-3" width="125" src="https://luberdent.ru/wp-content/uploads/2020/05/ico1.png" alt="Generic placeholder image">
                  <div class="media-body">
                     <h5 class="mt-0">Высокий сервис<br> качества работы.</h5>
                     Наши врачи разбираются во всех технологических новинках и методах лечения и протезирования зубов, регулярно совершенствуют свои навыки на семинарах и симпозиумах. Поэтому в нашей клинике вы можете рассчитывать на высокое качество оказываемых услуг 
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="media">
                  <div class="media-body">
                     <h5 class="mt-0 mb-1">Инновационные технологии<br> в лечении</h5>
                     Клиника оснащена самым современным оборудованием, позволяющим проводить диагностику высокой точности и выполнять операции любого уровня сложности. Мы используем материалы самого высокого качества для красоты вашей улыбки и здоровья зубов
                  </div>
                  <img class="ml-3" src="https://luberdent.ru/wp-content/uploads/2020/05/ico2.png" width="125" alt="Generic placeholder image">
               </div>
            </div>
         </div>
         <hr class="featurette-divider">
         <!-- words --> 
         <h3><span class="mt-2 mb-2 pb-2 badge badge-pill badge-info">Примеры выполненных работ</span></h3>
         <div class="row">
            <div class="col ml-3 mb-2">
               <h4>До</h4>
            </div>
            <div class="col ml-2 mb-2">
               <h4>После</h4>
            </div>
         </div>
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item aboba active"> <img src="https://luberdent.ru/wp-content/uploads/2019/03/3-1.jpg" class="d-block w-100" alt="Words"> </div>
               <div class="carousel-item aboba"> <img src="https://luberdent.ru/wp-content/uploads/2018/01/chichua1.jpg" class="d-block w-100" alt="Words"> </div>
               <div class="carousel-item aboba"> <img src="https://luberdent.ru/wp-content/uploads/2018/01/chichua2-1.jpg" class="d-block w-100 " alt="Words"> </div>
            </div>
         </div>
         <hr class="featurette-divider">
         <!-- Doctor -->
         <h3><span class="mt-2 mb-2 pb-2 badge badge-pill badge-info">Наши врачи</span></h3>
         <div class="row">
            @foreach ($words as $word)
            <div class="col-md-4 col-sm-6 col-md-3 p-2">
               <div class="card">
                  <div><img class="card-img-top img-thumbnail" src="/img/{{ $word->photo }}" alt=""> </div>
                  <div class="card-body">
                     <h5 class="card-title">{{ $word->name }} </h5>
                     <p class="card-text">{{ $word->des }} </p>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         <hr class="featurette-divider">
         <!-- maps -->
         <h3><span class="mt-2 mb-2 pb-2 badge badge-pill badge-info">Мы находимся тут</span></h3>
         <div style="width: 100%">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d958.750572890227!2d61.444499644182955!3d55.14292366760246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c5f2a5350307f3%3A0x8ca910620d48c42d!2z0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQuNC5INC60L7QvNC_0LvQtdC60YEg0K7QttC90L4t0KPRgNCw0LvRjNGB0LrQvtCz0L4g0LPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3QvtCz0L4g0YLQtdGF0L3QuNGH0LXRgdC60L7Qs9C-INC60L7Qu9C70LXQtNC20LA!5e0!3m2!1sru!2sru!4v1622043005669!5m2!1sru!2sru" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <a href="https://www.maps.ie/route-planner.html"></a>
         </div>
         <div class="container contacts-block mt-5">
            <div class="company-main-cont company-main-cont-scnd">
               <h3 class="title">Контакты</h3>
               <div class="row company-main-cont-after-header">
                  <div class="col-md-6 col-xs-12 no-padding">
                     <div class="row">
                        <div class="col-md-3 no-padding-left"><img src="/img/phone.svg" alt="" style="width: 65px;height:65px"></div>
                        <div class="col-md-9 no-padding text-decoration-none company-font-info">Бесплатно по России<br>
                           <span><a href="tel:88007000707" class="text-decoration-none">8 800 000-0000</a></span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-xs-12 no-padding-left">
                     <div class="row">
                        <div class="col-md-3 no-padding-left"><img src="/img/letter.svg" alt="" style="width: 65px; height:65px"></div>
                        <div class="col-md-9 no-padding company-font-info">Написать через<br>
                           <a style="opacity: 1; " href="/contact" class="text-decoration-none">форму обратной связи</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Укажите ваши данные</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="/index/store" method="POST">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Имя </label>
                           <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ваше имя" required>
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Телефон</label>
                           <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Ваш телефон"required>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Отправить</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
               </div>
            </div>
         </div>
      </div>
      <div id="zap">
         <a href="#top" type="button" class="btn btn-primary"   data-toggle="modal" data-target="#exampleModal">Записаться на прием </a>
      </div>
      <div id="up">
         <a href="#top">Наверх</a>
      </div>
      <!-- Footer -->
      <footer class="text-center text-lg-start bg-light text-muted">
         <!-- Section: Social media -->
         <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
            >
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
               <span>Общайтесь с нами в социальных сетях:</span>
            </div>
            <!-- Left -->
            <!-- Right -->
            <div>
               <a href="" class="me-4 text-reset">
               <i class="fa fa-facebook" aria-hidden="true"></i>
               </a>
               <a href="" class="me-4 text-reset">
               <i class="fa fa-twitter" aria-hidden="true"></i>
               </a>
               <a href="" class="me-4 text-reset">
               <i class="fa fa-google" aria-hidden="true"></i>
               </a>
               <a href="" class="me-4 text-reset">
               <i class="fa fa-instagram" aria-hidden="true"></i>
               </a>
               <a href="" class="me-4 text-reset">
               <i class="fa fa-linkedin" aria-hidden="true"></i>
               </a>
               <a href="" class="me-4 text-reset">
               <i class="fa fa-github" aria-hidden="true"></i>
               </a>
            </div>
            <!-- Right -->
         </section>
         <!-- Section: Social media -->
         <!-- Section: Links  -->
         <section class="">
            <div class="container text-center text-md-start mt-5">
               <!-- Grid row -->
               <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                     <!-- Content -->
                     <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Стоматологическая клиника 32
                     </h6>
                     <p>
                        Наша стоматология самая лучшая
                     </p>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <p>
                        <a href="/" class="text-reset">Главная</a>
                     </p>
                     <p>
                        <a href="/aboutus" class="text-reset">О нас</a>
                     </p>
                     <p>
                        <a href="/price" class="text-reset">Цены</a>
                     </p>
                     <p>
                        <a href="/category" class="text-reset">Отзывы</a>
                     </p>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <p>
                        <a href="/contact" class="text-reset">Поддержка</a>
                     </p>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                     <!-- Links -->
                     <h6 class="text-uppercase fw-bold mb-4">
                        КОНТАКТЫ
                     </h6>
                     <p><i class="fa fa-home" aria-hidden="true"></i> Челябинск, Гагарина 7</p>
                     <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        info@example.com
                     </p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> + 01 234 567 88</p>
                     <p><i class="fa fa-print" aria-hidden="true"></i> + 01 234 567 89</p>
                  </div>
                  <!-- Grid column -->
               </div>
               <!-- Grid row -->
            </div>
         </section>
         <!-- Section: Links  -->
         <!-- Copyright -->
         <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="#">dentistry.ru</a>
         </div>
         <!-- Copyright -->
      </footer>
      <!-- Footer -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
   </body>
</html>