<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/tooth-health/154/tooth-round-health-stomatology-white-512.png" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Лечение</title>
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/tooth-health/154/tooth-round-health-stomatology-white-512.png" type="image/x-icon">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                  <li class="nav-item"> <a class="nav-link" href="/">Главная
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
                  <li class="nav-item dropdown indent-to-the-right indenting-text active">
                     <a class="nav-link dropdown-toggle" href="/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Пациентам</strong></a>
                     <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="/ourservice">Наш сервис</a>
                        <a class="dropdown-item" href="/healomc">Лечение по ОМС</a>
                        <a class="dropdown-item active" href="/healdmc">Лечение по ДМС</a>
                        <a class="dropdown-item" href="/privacypolicy">Политика конфиденциальности сайта стоматологии</a>
                        <a class="dropdown-item" href="/rights">Права и обязанности пациентов</a>
                     </div>
                  </li>
                  <li class="nav-item"> <a  href="/login"><button type="button" class="btn btn-outline-success">Мой кабинет</button></a></li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Server -->
      <div class="mt-5 container marketing p-3">
          <h1 class="p-3 mt-3">Лечение по ДМС</h1>
         <div class="col-md-9 col-sm-12 col-xs-12 content-md">
            <p>Добровольное медицинское страхование (ДМС) осуществляется на основе программ ДМС с целью обеспечения гражданам возможности получения дополнительных медицинских и других услуг, не входящих в перечень, установленный программами ОМС.</p>
            <p>Так, платный полис добровольного медицинского страхования является дополнением к полису ОМС, расширяющим его возможности.</p>
            <p>Добровольное медицинское страхование позволяет гражданам получать своевременную и качественную стоматологическую помощь специалистов клиники «32». Работа в рамках программ ДМС позволяет нам обеспечивать комплексную заботу о здоровье каждого пациента. Объём предоставляемых стоматологических услуг определяется программой страхования, предоставляемой вашей страховой компанией.</p>
            <p>Стоматология «32» сотрудничает со страховой компанией ОАО «СОГАЗ».</p>
            <p>Чтобы получить стоматологическую помощь в рамках ДМС в нашей клинике, пациенту необходимо предъявить страховой полис или направление от СК ОАО «СОГАЗ», программу страхования (если имеется), а также документ, удостоверяющий личность.</p>
            <p>Телефон: +7-800-500-60-92. Звонок из любого региона России бесплатный.</p>
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
                  <form action="/healomc/store" method="POST">
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
      </div>
      <div id="zap">
         <a href="#top" type="button" class="btn btn-primary"   data-toggle="modal" data-target="#exampleModal">Записаться на прием </a>
      </div>
      <div id="up">
         <a href="#top">Наверх</a>
      </div>
      <!-- Footer -->
      <footer class="text-center text-lg-start bg-light text-muted" style="margin-top:15%;">
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