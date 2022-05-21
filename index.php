<?php include 'send.php';?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zecodein</title>
        <link type="text/css" rel="stylesheet" href="/css/materialize.min.css" media="screen,projection" />
        <link type="text/css" rel="stylesheet" href="/css/style.css" media="screen,projection" />
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
    </head>

    <body>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper" style="background-color: #313a46;">
                    <a href="/" class="brand-logo center">ze<span style="color: #38a4c4;">code</span>in</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i
                            class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Главная</a></li>
                        <li><a href="#aboutus">О Нас</a></li>
                        <li><a href="#contacts">Контакты</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="/">Главная</a></li>
            <li><a href="#aboutus">О Нас</a></li>
            <li><a href="#contacts">Контакты</a></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3 class="center-align">Разработка сайтов и веб-сервисов</h3>

                </div>
                <div class="col s12">
                    <p class="center-align flow-text">Создание сайтов любой сложности под нужды вашего бизнеса.</p>
                </div>
                <div class="col s6 offset-s5">
                    <a href="#request" class="btn btn-large cyan accent-4">Записаться</a>
                </div>
            </div>
            
        </div>

        <section style="background-image: linear-gradient(to bottom, #38a4c4, #313a46);">
            <div style="margin-top: 100px;" class="container white-text">
                <br>
                <h3>Веб разработка</h3>
                <div class="row">
                    <div class="col s12 m12 l4">
                        <i class="material-icons small">photo</i>
                        <blockquote>
                            <p class="flow-text">Мы используем самые передовые методы веб-дизайна, включая адаптивность,
                                мобильную
                                оптимизацию
                            </p>
                        </blockquote>
                    </div>
                    <div class="col s12 m12 l4">
                        <i class="material-icons small">devices</i>
                        <blockquote>
                            <p class="flow-text">Наши веб-сайты созданы для бесперебойной работы на всех устройствах.
                            </p>
                        </blockquote>
                    </div>
                    <div class="col s12 m12 l4">
                        <img style="height:30px" src="img/icons8-golang.svg" alt="">
                        <blockquote>
                            <p class="flow-text">Создание серверов на одном из самых быстрых языков программирования.
                            </p>
                        </blockquote>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l4">
                        <i class="material-icons small">forum</i>
                        <blockquote>
                            <p class="flow-text">От веб-сайтов до решений для электронной коммерции, мы
                                обеспечиваем превосходный пользовательский опыт.</p>
                        </blockquote>
                    </div>
                    <div class="col s12 m12 l4">
                        <i class="material-icons small">headset_mic</i>
                        <blockquote>
                            <p class="flow-text">Обратная связь на всех этапах разработки.
                            </p>
                        </blockquote>
                    </div>
                    <div class="col s12 m12 l4">
                        <i class="material-icons small">sentiment_very_satisfied
                        </i>
                        <blockquote>
                            <p class="flow-text">Поддержка и сопровождение ПО при необходимости.</p>
                        </blockquote>
                    </div>
                </div>
                <br>
            </div>
        </section>

        <section style="background-color: #313a46;">
            <div class="container white-text">
                <h3 style="margin-top:0">Наши проекты</h3>
                <div class="row">
                    <div class="col s12 l6 ">
                        <div onclick="location.href='https://thegarage.kz/'" class="card z-depth-3 blue-grey darken-3"
                            style="cursor: pointer;">
                            <div class="card-image">
                                <img style="height: 250px;" src="img/garage.svg">

                            </div>
                            <div class="card-content ">
                                <span class="card-title">THE GARAGE</span>
                                <p>Система бронирования мест в автомойки.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div onclick="location.href='https://sber-invest.kz/'" class="card z-depth-3 blue-grey darken-3"
                            style="cursor: pointer;">
                            <div class="card-image">
                                <br>
                                <img style="height: 228px;" class="" src="img/sber.svg">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Сбережения и инвестиции</span>
                                <p>Платформа финансовой грамотности.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l6 grey-text text-darken-2">
                        <h4 id="request">Связаться с нами</h4>
                        <form action="" method="POST">
                            <div class="input-field">
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" name="fio" id="exampleFormControlInput1" required class="validate">
                                <label for="exampleFormControlInput1" class="active">Ваше ФИО*</label>
                                <span class="helper-text" data-error="Введите свое имя." data-success=""></span>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">phone</i>
                                <input type="tel" pattern="[8]{1}[0-9]{10}" name="tel" id="exampleFormControlInput1"
                                    required class="validate" placeholder="8 (777) 123 4567">
                                <label for="exampleFormControlInput1" class="active">Номер телефона*</label>
                                <span class="helper-text" data-error="Номер не заполнен" data-success=""></span>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input type="email" name="email" id="exampleFormControlInput1" class="validate">
                                <label for="exampleFormControlInput1" class="active">Электронная почта</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">list</i>
                                <select name="category">
                                    <option value="" disabled selected>Выберите категорию</option>
                                    <option value="Веб-сайт">Веб-сайт</option>
                                    <option value="Программное обеспечение и веб сервисы">Программное обеспечение и веб сервисы</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">create</i>
                                <textarea id="exampleFormControlTextarea1" name="comm"
                                    placeholder="Расскажите нам о своем запросе"
                                    class="materialize-textarea"></textarea>
                                <label for="exampleFormControlTextarea1" class="active">Комментарий</label>
                            </div>
                            <div>
                                <span class="helper-text" data-error="<?php echo $failed;  ?>"
                                    data-success="<?php echo $success;  ?>"></span>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="submit">Отправить
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                    <div id="contacts" class="col s12 m12 l6 grey-text text-darken-2">
                        <h4>Контакты</h4>
                        <h6>Тел: +7 (771) 513 5555</h6>
                        <h6>Email: <a href="sales@zecodein.kz">sales@zecodein.kz</a></h6>
                        <h6>г.Нур-Султан, проспект Мангилик Ел, ​С4.5</h6>
                    </div>
                </div>
            </div>
        </section>

        <footer class="page-footer white ">
            <div class="footer-copyright">
                <div class="container black-text">
                    powered by ze<span style="color: #38a4c4;">code</span>in
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="/js/materialize.js"></script>
        <script type="text/javascript" src="/js/scripts.js"></script>
    </body>

</html>
