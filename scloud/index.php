<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devise-width, initial-scale=1">
        <title>Title</title>
        <link rel="stylesheet" href="http://test.flower-bottle.ru/scloud/style/pc_style.css" type="text/css">
        <link rel="stylesheet" href="http://test.flower-bottle.ru/scloud/style/bootstrap.css" type="text/css">
        <script src="http://test.flower-bottle.ru/scloud/script/script.js"></script>
        <script src="http://test.flower-bottle.ru/scloud/script/bootstrap.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
                integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
                crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="style/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <div class="header_content container">

                <div class="logo header_content_element" id="header-element-1">
                    <a href="http://test.flower-bottle.ru/scloud"><?php include "img/logo.php" ?></a>
                </div>

                <nav class="header_content_nav header_content_element" id="header-element-2">
                    <ul>
                        <li class="nav-bottom">
                            <p class="nav-bottom_element"><a href="#" class="header-link">Решения</a></p>
                            <p class="vector nav-bottom_element">❯</p>
                        </li>
                        <li class="nav-bottom">
                            <p class="nav-bottom_element"><a href="#" class="header-link">Тарифы</a></p>
                        </li>
                        <li class="nav-bottom">
                            <p class="nav-bottom_element"><a href="#" class="header-link">Помощь</a></p>
                            <p class="vector nav-bottom_element">❯</p>
                        </li>
                        <li class="nav-bottom">
                            <p class="nav-bottom_element"><a href="#" class="header-link">Компания</a></p>
                            <p class="vector nav-bottom_element">❯</p>
                        </li>
                        <li class="nav-bottom">
                            <p class="nav-bottom_element"><a href="#" class="header-link">Партнёрам</a></p>
                        </li>
                    </ul>
                </nav>

                <div class="search-bottom header_content_element" id="header-element-3"><?php include"img/magnifying_glass.php"?></div>

                <input type="search" class="search">

                <p class="header_content_element" id="header-element-4">8 (800) 555-91-15</p>

                <div class="header_content_element" id="header-element-5">
                    <div class="header_content_element entrance-img"><?php include_once("img/entrance.php") ?></div>
                    <div class="header_content_element"><a href="#" class="entrance header-link">Вход</a></div>
                    <a href="#"><input type="button" name="" value="Регистрация" class="registration-bottom header_content_element"></a>
                    <p class="mobile-menu header_content_element" type="button" onclick="$('.header_content_nav').slideToggle();" name="☰" content="☰">☰</p>
                </div>
            </div>
        </header>
        <section class="section container">
            <div class="section_content container-1 row">
                <div class="section_container-1_element container-1_info col-md-12 col-lg-7">
                    <h1 class="fat-text">1С: Зарплата и управление персоналом 8</h1>
                    <h2 class="fat-text">Цена - от 760 ₽ в месяц*</h2>
                    <p class="text">
                        Программа позволяет эффективно организовать комплексный учет кадров,
                        а также автоматизировать процесс подсчета зарплаты и других выплат сотрудникам
                    </p>
                    <a href="#"><input type="button" name="" value="Попробовать 14 дней бесплатно" class="section-bottom"></a>
                    <p class="postscript">*входит в тарифы</p>
                </div>
                <div class="section_container-1_element container-1_img col-md-5">
                    <?php include_once("img/svg1.php")?>
                </div>
            </div>
            <h2 class="fat-text">Основные возможности</h2>
            <div class="section_content container-2">
                <div class="row">
                    <ul class="section_container-2_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                            <p class="text">Учёт заработной платы</p>
                        </li>
                    </ul>
                    <ul class="section_container-2_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                            <p class="text">Учет кадров и анализ кадрового состава</p>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="section_container-2_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                            <p class="text">Исчисление налогов и взносов с фонда оплаты труда</p>
                        </li>
                    </ul>
                    <ul class="section_container-2_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                            <p class="text">Автоматизация кадрового делопроизводства</p>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="section_container-2_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                            <p class="text">Управление компетенциями и аттестация работников</p>
                        </li>
                    </ul>
                    <ul class="section_container-2_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                            <p class="text">Возможность сдачи отчетов по каждому из сотрудников</p>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="section_container-2_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                            <p class="text">Отражение начисленной зарплаты и налогов в затратах предприятия</p>
                        </li>
                    </ul>
                    <ul class="section_container-2_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                            <p class="text">Управление денежными расчетами с персоналом, включая депонирование</p>
                        </li>
                    </ul>
                </div>
            </div>
            <h2 class="fat-text">Преимущества аренды 1С в облаке</h2>
            <div class="section_content container-3 container-6 row">
                <div class="section_container-3 col-lg-4 col-md-6 col-xs-1">
                    <div class="section_container-3_wrapper">
                        <a href="#" class="text-link">
                            <p class="section_container-3_img"><?php include("img/img_for_table/kube.php")?></p>
                            <p class="section_container-3_text text-link">Бесплатные консультации по работе в 1С</p>
                        </a>
                    </div>
                </div>
                <div class="section_container-3 col-lg-4 col-md-6 col-xs-1">
                    <div class="section_container-3_wrapper">
                        <a href="#" class="text-link">
                            <p class="section_container-3_img"><?php include("img/img_for_table/headphones.php")?></p>
                            <p class="section_container-3_text text-link">Поддержка 24/7 настоящих профи 1С</p>
                        </a>
                    </div>
                </div>
                <div class="section_container-3 col-lg-4 col-md-6 col-xs-1">
                    <div class="section_container-3_wrapper">
                        <a href="#" class="text-link">
                            <p class="section_container-3_img"><?php include("img/img_for_table/rub.php")?></p>
                            <p class="section_container-3_text text-link">Уникальные финансовые гарантии</p>
                        </a>
                    </div>
                </div>
                <div class="section_container-3 col-lg-4 col-md-6 col-xs-1">
                    <div class="section_container-3_wrapper">
                        <a href="#" class="text-link">
                            <p class="section_container-3_img"><?php include("img/img_for_table/home.php")?></p>
                            <p class="section_container-3_text text-link">Возможность работать в 1С из дома и офиса</p>
                        </a>
                    </div>
                </div>
                <div class="section_container-3 col-lg-4 col-md-6 col-xs-1">
                    <div class="section_container-3_wrapper">
                        <a href="#" class="text-link">
                            <p class="section_container-3_img"><?php include("img/img_for_table/clock.php")?></p>
                            <p class="section_container-3_text text-link">Круглосуточный доступ в 1С</p>
                        </a>
                    </div>
                </div>
                <div class="section_container-3 col-lg-4 col-md-6 col-xs-1">
                    <div class="section_container-3_wrapper">
                        <a href="#" class="text-link">
                            <p class="section_container-3_img"><?php include("img/img_for_table/plus-circle.php")?></p>
                            <div class="section_container-3_text">
                                <p class="text-link">Попробуйте 1С: ЗУП 8</p>
                                <a class="section_container-3_link">Попробовать бесплатно</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="fat-text">Кому подойдет 1С: ЗУП 8?</h2>
            <div class="section_content container-4">
                <p class="text">В качестве дополнительного функционала данный программный продукт позволяет довести до
                    автоматизма большинство процессов управления персоналом, например, составление планов потребности в
                    новых кадрах, подбор и управление финансовой заинтересованностью персонала, а также автоматизация
                    кадрого учета.
                </p>
            </div>
            <div class="section_content container-5">
                <label for="container-5_button-1" class="section_container-5_submit first" oninput id="first">Руководителям</label>

                <input type="radio" name="radio" class="section_container-5_radio" id="container-5_button-1" value="Руководителям" checked oninput="showSlides(1)">

                <input type="radio" name="radio" class="section_container-5_radio" id="container-5_button-2" value="Бухгалтерам и отделу кадров" oninput="showSlides(2)">

                <label for="container-5_button-2" class="section_container-5_submit">Бухгалтерам и отделу кадров</label>

                <input type="radio" name="radio" class="section_container-5_radio" id="container-5_button-3" value="Сотрудникам" oninput="showSlides(3)">

                <label for="container-5_button-3" class="section_container-5_submit">Сотрудникам</label>

                <input type="radio" name="radio" class="section_container-5_radio" id="container-5_button-4" value="HR" oninput="showSlides(4)">

                <label for="container-5_button-4" class="section_container-5_submit">HR</label>
            </div>
            <div class="section_content container-6">
                <div class="section_container-6_element row" for="slider1">
                    <div class="col-lg-6 col-sm-12">
                        <h4 class="fat-text">Руководство компании</h4>
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Качество персонала</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Эффективность процессов управления персоналом</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Затраты на персонал</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Производительность труда и выполнение KPI</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h4 class="fat-text">Руководство подразделений</h4>
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Квалификация персонала</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Загрузка сотрудников</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Эффективность системы мотивации</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Предложения по изменению мотивации</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Заявки на обучение</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Заявки на подбор</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="section_container-6_element row" for="slider2">
                    <div class="col-lg-6 col-sm-12">
                        <h4 class="fat-text">Бухгалтерия</h4>
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Структура начисления зарплаты</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Данные для расчета налогов и выплат в фонды</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Начисление и выплата зарплаты, налогов</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Бюджет затрат на персонал</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Исполнение бюджета</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Отклонения от бюджета</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h4 class="fat-text">Отдел кадров</h4>
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Качетственный состав работников</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Данные о сотрудниках</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Перемещение кадров</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="section_container-6_element multiple-items row" for="slider3">
                    <div class="col-lg-6 col-sm-12">
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Начисленная зарплата</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Оставшиеся дни отпуска</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Заявки на отпуск</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Заявки на обучение</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Отработанное время</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Заявки на отпуск</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="section_container-6_element row" for="slider4">
                    <div class="col-lg-6 col-sm-12">
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Потребность в кадрах</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Квалификация персонала</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Кадровый резерв</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Затраты на персонал</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Загрузка сотрудников</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Кадровый план</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Информация о кандидатах</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Планы обучения</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("img/vector-oring.php") ?></p>
                                <p class="text">Результаты обучения</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <h2 class="fat-text container-7_title">Сравнение функционала версий ПРОФ и КОРП</h2>
            <h3 class="fat-text container-7_title_mobile-table">Отличия функционала версий ПРОФ и КОРП</h3>
            <div class="section_content container-7">
                <div class="section_container-7_wrapper row" id="hearer-table">
                    <div class="section_container-7_element colon1 col-12 col-md-8" id="colon1_hearer-table">
                        <h4 class="fat-text">Возможности</h4>
                    </div>
                    <div class="section_container-7_element colon2 col-12 col-md-4 row" id="colon1_hearer-table">
                        <div class="colon2 col-12 col-md-6">
                            <h4 class="fat-text">ПРОФ</h4>
                        </div>
                        <div class="colon3 col-12 col-md-6">
                            <h4 class="fat-text">КОРП</h4>
                        </div>
                    </div>
                </div>

                <div class="section_container-7_wrapper-for-slider">
                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Кадровый резерв и управление талантами</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Поддержка грейдов</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Адаптация, обучение и развитие</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Анализ расходов на персонал по проектам и направлениям деятельности</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Удаленный доступ для линейных руководителей и сотрудников</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Финансовая мотивация с использованием показателей эффективности (KPI)</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Импорт значений показателей из 1С:Управление торговлей и 1С:Розница</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Учет деятельности нескольких организаций</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Возможность изменения (конфигурирования) прикладного решения</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Учет кадров и анализ кадрового состава</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Расчет и учет заработной платы</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Управление денежными расчетами, включая депонирование</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Исчисление налогов и страховых взносов (в т.ч. для УСН и ЕНВД)</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="section_container-7_wrapper row">
                        <div class="section_container-7_element colon1 col-12 col-md-8">
                            <p>Подготовка регламентированной отчетности</p>
                        </div>
                        <div class="section_container-7_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("img/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_content container-7_mobil">
                <div class="container-7_mobil_wrapper">
                    <h5 class="fat-text">Возможности</h5>
                    <div class="7_mobil_title">
                        <p class="container-7_mobil_title">Кадровый резерв и управление талантами</p>
                        <p class="container-7_mobil_title">Поддержка грейдов</p>
                        <p class="container-7_mobil_title">Адаптация, обучение и развитие</p>
                        <p class="container-7_mobil_title">Анализ расходов на персонал по проектам и направлениям деятельности</p>
                    </div>
                    <div class="delimiter-mini"></div>
                    <h5 class="fat-text">ПРОФ</h5>
                    <div class="7_mobil_prof">
                        <p class="container-7_mobil_prof"><?php include("img/minus.php") ?></p>
                        <p class="container-7_mobil_prof"><?php include("img/minus.php") ?></p>
                        <p class="container-7_mobil_prof"><?php include("img/minus.php") ?></p>
                        <p class="container-7_mobil_prof"><?php include("img/minus.php") ?></p>
                    </div>
                    <h5 class="fat-text">КОРП</h5>
                    <div class="7_mobil_corp">
                        <p class="container-7_mobil_corp"><?php include("img/vector-green.php") ?></p>
                        <p class="container-7_mobil_corp"><?php include("img/vector-green.php") ?></p>
                        <p class="container-7_mobil_corp"><?php include("img/vector-green.php") ?></p>
                        <p class="container-7_mobil_corp"><?php include("img/vector-green.php") ?></p>
                    </div>
                </div>
                <div class="section_container-7_element container-7_element-inputs">
                    <label for="container-7_button-1" class="section_container-7_submit first" oninput ></label>
                    <input type="radio" name="table" class="section_container-7_radio" id="container-7_button-1" value="Руководителям" checked oninput="table(1)">
                    <label for="container-7_button-2" class="section_container-7_submit"></label>
                    <input type="radio" name="table" class="section_container-7_radio" id="container-7_button-2" value="Руководителям" oninput="table(2)">
                    <label for="container-7_button-3" class="section_container-7_submit"></label>
                    <input type="radio" name="table" class="section_container-7_radio" id="container-7_button-3" value="Руководителям" oninput="table(3)">
                    <label for="container-7_button-4" class="section_container-7_submit"></label>
                    <input type="radio" name="table" class="section_container-7_radio" id="container-7_button-4" value="Руководителям" oninput="table(4)">
                </div>
            </div>
            <div class="section_content container-8">
                <div class="section_container-8_element container-8_element-img">
                    <p class="section_container-8_img"><?php include("img/svg2.php") ?></p>
                    <p class="section_container-8_img"><?php include("img/svg2.php") ?></p>
                    <p class="section_container-8_img"><?php include("img/svg2.php") ?></p>
                    <p class="section_container-8_img"><?php include("img/svg2.php") ?></p>
                    <p class="section_container-8_img"><?php include("img/svg2.php") ?></p>
                </div>

                <div class="arrow" id="arrow_left">
                    <a class="previous" onclick="previousSlide()"><?php include("img/arrow_left.php") ?></a>
                </div>
                <div class="arrow" id="arrow_right">
                    <a class="next" onclick="nextSlide()"><?php include("img/arrow_right.php") ?></a>
                </div>
                <div class="section_container-8_element container-8_element-inputs">
                    <label for="container-8_button-1" class="section_container-8_submit first" oninput id="first"></label>

                    <input type="radio" name="radio" class="section_container-8_radio" id="container-8_button-1" value="Руководителям" checked oninput="timework(1)">

                    <input type="radio" name="radio" class="section_container-8_radio" id="container-8_button-2" value="Бухгалтерам и отделу кадров" oninput="timework(2)">

                    <label for="container-8_button-2" class="section_container-8_submit"></label>

                    <input type="radio" name="radio" class="section_container-8_radio" id="container-8_button-3" value="Сотрудникам" oninput="timework(3)">

                    <label for="container-8_button-3" class="section_container-8_submit"></label>

                    <input type="radio" name="radio" class="section_container-8_radio" id="container-8_button-4" value="HR" oninput="timework(4)">

                    <label for="container-8_button-4" class="section_container-8_submit"></label>

                    <input type="radio" name="radio" class="section_container-8_radio" id="container-8_button-5" value="HR" oninput="timework(5)">

                    <label for="container-8_button-5" class="section_container-8_submit"></label>
                </div>
            </div>
            <h2 class="fat-text"><p class="title_container-9">Цена на 1С: ЗУП 8 онлайн от&#160;</p><p class="fat-text highlighter">760 ₽ в месяц</p></h2>
            <div class="section_content container-9">
                <form class="section_container-9_element container-9_form">
                    <div class="container-9_form_element">
                        <input type="text" placeholder="&#160;&#160;&#160;&#160;Имя*">
                    </div>
                    <div class="container-9_form_element">
                        <input type="tel" placeholder="&#160;&#160;&#160;&#160;RU* &#160;&#160;+7">
                    </div>
                    <div class="container-9_form_element">
                        <input type="email" placeholder="&#160;&#160;&#160;&#160;E-mail*">
                    </div>
                </form>
                <p>* Поля обязательные для заполнения</p>
                <div class="section_container-9_element wrapper-for-14-free-days">
                    <div class="section_container-9_wrapper-for-button">
                        <input type="button" value="Попробовать 14 дней бесплатно" class="section_container-9_button">
                    </div>
                    <p class="section_container-9_text minitext">
                        Начиная работу, я принимаю условия
                        <a class="section_container-3_link">
                            Оферты
                        </a>
                        <br>
                        и соглашаюсь на обработку персональных данных в соответствии с
                        <a class="section_container-3_link">
                            Политикой конфиденциальности
                        </a>
                    </p>
                </div>

            </div>
            <h2 class="title-for-container-10 fat-text">С какими отчетами Вы можете работать?</h2>
            <div class="section_content container-10 container-2">
                <ul class="section_container-2_element row">
                    <li class="col-lg-8">
                        <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                        <p class="text">Формирование списков кандидатов на работу, работников компании и ее подразделений;</p>
                    </li>
                    <li class="col-lg-8">
                        <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                        <p class="text">Составление диаграмм, графиков отпусков с фактическим использованием отпусков работников компании и ее подразделений;</p>
                    </li>
                    <li class="col-lg-8">
                        <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                        <p class="text">Составление диаграмм планируемой занятости работников компании;</p>
                    </li>
                    <li class="col-lg-8">
                        <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                        <p class="text">Отчеты по планируемым фондам зарплаты работников компании;</p>
                    </li>
                    <li class="col-lg-8">
                        <p class="jackdaw"><?php include("img/jackdaw.php") ?></p>
                        <p class="text">Отчеты по плановому и фактическому состоянию штатного расписания и многие другие.</p>
                    </li>
                </ul>

            </div>
            <h2 class="fat-text">Почему пользователи выбирают Scloud?</h2>
            <div class="section_content container-11 row">
                <div class="section_container-11_element col-12 col-lg-6 row">
                    <div class="col-12 col-md-6">
                        <h3 class="section_container-11_part-title fat-text">24/7</h3>
                        <p class="text">
                            круглосуточная техническая
                            поддержка клиентов
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="section_container-11_part-title fat-text">> 32 000</h3>
                        <p class="text">
                            пользователей доверяют свою
                            1С нашему сервису
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="section_container-11_part-title fat-text">8 лет</h3>
                        <p class="text">
                            предоставления доступа к 1С
                            онлайн в России
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="section_container-11_part-title fat-text">> 200</h3>
                        <p class="text">
                            высококвалифицированных специалистов в штате
                        </p>
                    </div>
                    <a class="section_container-3_link">Узнать больше о нас&#160;&#160;❭</a>
                </div>
                <div class="section_container-11_element col-12 col-lg-6 container-11_img">
                    <p><?php include("img/svg3.php") ?></p>
                </div>
            </div>
            <h2 class="fat-text">Возможно вас заинтересует</h2>
            <div class="section_content container-12 row">
                <div class="section_container-12_element wrapper-for-content-container-12 col-12 col-lg-4 col-md-6">
                    <div class="section_container-12_wrapper container-12_wrapper_1">
                        <div class="section_container-12_title">
                            <p class="container-12_title_img"><?php include("img/interested/union.php") ?></p>
                            <h5 class="your_interes_header fat-text">
                                1С: Бухгалтерия <br>
                                ПРОФ/КОРП
                            </h5>
                        </div>
                        <p class="container-12_text your_interes_text">
                            Конфигурация разработана в соответствии с
                            нормами действующего законодательства.
                            Учет хозяйственной деятельности, заработной
                            платы, сдача отчетности в электронном виде.</p>
                        <a class="section_container-3_link duplicate" id="link_1">Подробнее&#160;&#160;❭</a>
                    </div>
                </div>
                <div class="section_container-12_element wrapper-for-content-container-12 col-12 col-lg-4 col-md-6">
                    <div class="section_container-12_wrapper container-12_wrapper_2">
                        <div class="section_container-12_title">
                            <p class="container-12_title_img"><?php include("img/interested/book.php") ?></p>
                            <h5 class="your_interes_header fat-text">
                                Информационно-справочная система 1С
                            </h5>
                        </div>
                        <p class="container-12_text your_interes_text">В системе представлены новости, комментарии
                            и консультации по вопросам бухгалтерского,
                            налогового и кадрового учета, рекомендации
                            по налогообложению, пошаговые инструкции
                            по их отражению в программе.</p>
                        <a class="section_container-3_link duplicate" id="link_2">Подробнее&#160;&#160;❭</a>
                    </div>
                </div>

                <div class="section_container-3_link md-links-first-2-blocks col-6">
                    <a>Подробнее&nbsp;&nbsp;❭</a>
                </div>
                <div class="section_container-3_link md-links-first-2-blocks col-6">
                    <a>Подробнее&nbsp;&nbsp;❭</a>
                </div>

                <div class="section_container-12_element wrapper-for-content-container-12 col-12 col-lg-4 col-md-6">
                    <div class="section_container-12_wrapper container-12_wrapper_3">
                        <div class="section_container-12_title">
                            <p class="container-12_title_img"><?php include("img/interested/files.php") ?></p>
                            <h5 class="your_interes_header fat-text">
                                1С: Отчетность
                            </h5>
                        </div>
                        <p class="container-12_text your_interes_text">Позволяет сдавать отчётность со своего ПК
                            прямо из 1С в контролирующие органы: ФНС,
                            ПФР, ФСС, Федеральная служба государственной
                            статистики, Росалкогольрегулирование.</p>
                        <a class="section_container-3_link duplicate" id="link_3">Подробнее&#160;&#160;❭</a>
                    </div>
                </div>
            </div>
            <div class="section_content container-12 wrapper-for-links row">
                <div class="section_container-12_element col-12 col-lg-4 col-md-6">
                    <a class="section_container-3_link orig">Подробнее&#160;&#160;❭</a>
                </div>
                <div class="section_container-12_element col-12 col-lg-4 col-md-6">
                    <a class="section_container-3_link orig">Подробнее&#160;&#160;❭</a>
                </div>
                <div class="section_container-12_element col-12 col-lg-4 col-md-6">
                    <a class="section_container-3_link orig">Подробнее&#160;&#160;❭</a>
                </div>
            </div>
            <h2 class="fat-text">Начните пользоваться 1С прямо сейчас</h2>
            <div class="section_content container-13 container-9">
                <form class="section_container-9_element">
                    <div class="container-9_form_element">
                        <input type="text" placeholder="&#160;&#160;&#160;&#160;Имя*">
                    </div>
                    <div class="container-9_form_element">
                        <input type="tel" placeholder="&#160;&#160;&#160;&#160;RU* &#160;&#160;+7">
                    </div>
                    <div class="container-9_form_element">
                        <input type="email" placeholder="&#160;&#160;&#160;&#160;E-mail*">
                    </div>
                </form>
                <p>* Поля обязательные для заполнения</p>
                <div class="section_container-9_element wrapper-for-14-free-days">
                    <div class="section_container-9_wrapper-for-button">
                        <input type="button" value="Попробовать 14 дней бесплатно" class="section_container-9_button">
                    </div>
                    <p class="section_container-9_text minitext">
                        Начиная работу, я принимаю условия
                        <a class="section_container-3_link">
                            Оферты
                        </a>
                        <br>
                        и соглашаюсь на обработку персональных данных в соответствии с
                        <a class="section_container-3_link">
                            Политикой конфиденциальности
                        </a>
                    </p>
                </div>
            </div>
            <div class="delimiter"></div>
            <div class="section_content container-14 row">
                <div class="selection_container-14_element col-12 col-md-3">
                    <h6 class="fat-text" id="container-14_title-1 ">Типовые решения</h6>
                </div>
                <div class="selection_container-14_element col-12 col-md-3">
                    <h6 class="fat-text" id="container-14_title-2">Отраслевые решения</h6>
                </div>
                <div class="selection_container-14_element col-12 col-md-3">
                    <h6 class="fat-text" id="container-14_title-3">Сервисы</h6>
                </div>
                <div class="selection_container-14_element col-12 col-md-3">
                    <h6 class="fat-text" id="container-14_title-4">Доп.возможности</h6>
                </div>

                <div class="selection_container-14_element col-12 col-md-3 container-14_duplicate">
                    <h6 class="fat-text" onclick="$('#container-14_text-1').slideToggle();">Типовые решения</h6>
                </div>

                <div class="selection_container-14_element col-12 col-lg-3" id="container-14_text-1">
                    <p class="container-14_text">1C: Бухгалтерия ПРОФ/КОРП</p>
                    <p class="container-14_text">1С: Зарплата и управление персоналом ПРОФ/КОРП</p>
                    <p class="container-14_text">1C: Комплексная автоматизация</p>
                    <p class="container-14_text">1С: Управление нашей фирмой</p>
                    <div class="selection_container-14_element section_container-3_links">
                        <a href="#" class="section_container-3_link container-14_float">Показать больше <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="selection_container-14_element col-12 col-md-3 container-14_duplicate">
                    <h6 class="fat-text" onclick="$('#container-14_text-2').slideToggle();">Отраслевые решения</h6>
                </div>
                <div class="selection_container-14_element col-12 col-lg-3" id="container-14_text-2">
                    <p class="container-14_text">1C: CRM ПРОФ</p>
                    <p class="container-14_text">1С: Учет в управляющих компаниях ЖКХ, ТСЖ и ЖСК</p>
                    <p class="container-14_text">1C: Автосервис</p>
                    <p class="container-14_text">1С: Салон красоты</p>
                    <div class="selection_container-14_element section_container-3_links">
                        <a href="#" class="section_container-3_link container-14_float">Показать больше <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="selection_container-14_element col-12 col-md-3 container-14_duplicate">
                    <h6 class="fat-text" onclick="$('#container-14_text-3').slideToggle(); ">Сервисы</h6>
                </div>
                <div class="selection_container-14_element col-12 col-lg-3" id="container-14_text-3">
                    <p class="container-14_text">1C: Контрагент</p>
                    <p class="container-14_text">1С: СтартЭДО</p>
                    <p class="container-14_text">1C: Отчетность</p>
                    <p class="container-14_text">1С: Контрагент</p>
                    <p class="container-14_text">1CПАРК Риски</p>
                </div>
                <div class="selection_container-14_element col-12 col-md-3 container-14_duplicate">
                    <h6 class="fat-text" onclick="$('#container-14_text-4').slideToggle();">Доп.возможности</h6>
                </div>
                <div class="selection_container-14_element col-12 col-lg-3" id="container-14_text-4">
                    <p class="container-14_text">ФГИС Меркурий</p>
                    <p class="container-14_text">ЕГАИС</p>
                    <p class="container-14_text">Клиент-банк</p>
                    <p class="container-14_text">Директор-банк</p>
                    <p class="container-14_text">Торговое оборудование</p>
                    <div class="selection_container-14_element section_container-3_links">
                        <a href="#" class="section_container-3_link container-14_float">Показать больше <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="section_content container-15">
                    <div class="wrapper_container-15_element" id="wrapper_container-15_1">
                        <div class="logo-footer section_container-15_element">
                            <a href="http://test.flower-bottle.ru/scloud"><?php include("img/logo_footer.php") ?></a>
                        </div>
                        <div class="section_container-15_element contact-info">
                            <p>
                                <h5 class="contact-info_tel-1 fat-text">8 800 555-91-15</h5>
                                <h5 class="contact-info_tel-2 fat-text">&#160;| +7 (495) 786-59-15</h5>
                                111024, г. Москва, ул. Авиамоторная, 69 <br>
                                300028, г. Тула, ул. Болдина, 98
                            </p>
                        </div>
                    </div>
                    <div class="wrapper_container-15_element row" id="wrapper_container-15_2">
                        <nav class="section_container-15_element container-15_element1 col-12 col-md-6">
                            <div class="container-15_img_1"><?php include "img/img_net/inst.php" ?></div>
                            <div class="container-15_img_1"><?php include "img/img_net/fb.php" ?></div>
                            <div class="container-15_img_1"><?php include "img/img_net/vk.php" ?></div>
                            <div class="container-15_img_1"><?php include "img/img_net/ok.php" ?></div>
                            <div class="container-15_img_1"><?php include "img/img_net/youtube.php" ?></div>
                        </nav>
                        <div class="section_container-15_element container-15_element2 col-12 col-md-6">
                            <div class="container-15_img_2" id="apple"><?php include("img/apple.php") ?></div>
                            <div class="container-15_img_2" id="googl"><?php include("img/googl_play.php") ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer_content container-fluid row">
                    <div class="footer_content_element footer-element1 col-md-6">
                        <p><a href="#" class="footer-link">Оферта </a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="#" class="footer-link"> Политика конфиденциальности</a></p>
                    </div>
                    <div class="footer_content_element footer-element2 col-12 col-md-6">
                        <p>© 2019 scloud.ru ООО "СервисКлауд"</p>
                </div>
            </div>
        </footer>
    </body>
</html>
