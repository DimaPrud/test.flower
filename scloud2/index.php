<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devise-width, initial-scale=1">
        <title>Title</title>

        <link href="style/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style/slick.css" type="text/css" />
        <link rel="stylesheet" href="style/slick-theme.css" type="text/css" />
        <link rel="stylesheet" href="style/style.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="script/bootstrap.js"></script>
        <script src="script/slick.min.js"></script>
        <script src="script/script.js"></script>
    </head>
    <body>
        <header class="header">
            <div class="header_content container">

                <div class="header_element logo">
                    <a href="http://test.flower-bottle.ru/scloud">
                        <img src="image/logo.svg" alt="" />
                    </a>
                </div>

                <nav class="header_element mane-nav">
                    <ul>
                        <li class="mane-nav_element">
                            <p><a href="#" class="header-link">Решения&#160;<i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                        </li>
                        <li class="mane-nav_element">
                            <p><a href="#" class="header-link">Тарифы</a></p>
                        </li>
                        <li class="mane-nav_element">
                            <p><a href="#" class="header-link">Помощь&#160;<i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                        </li>
                        <li class="mane-nav_element">
                            <p><a href="#" class="header-link">Компания&#160;<i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                        </li>
                        <li class="mane-nav_element">
                            <p><a href="#" class="header-link">Партнёрам</a></p>
                        </li>
                    </ul>
                </nav>

                <div class="header_element search-bottom" onclick="$('.search').slideToggle();"><?php include"image/magnifying_glass.php"?></div>

                <input type="search" class="search" placeholder="Поиск">

                <p class="header_element tel fat-text">8 (800) 555-91-15</p>

                <div class="header_element entrance-registration">
                    <div class="header_element entrance-image d-xxl-block d-lg-none d-xs-block"><?php include_once("image/entrance.php") ?></div>
                    <div class="header_element fat-text"><a href="#" class="entrance header-link">Вход</a></div>
                    <a href="#" class="header_element fat-text"><input type="button" name="registration" value="Регистрация" class="registration-bottom"></a>
                    <p class="header_element mobile-menu" type="button" onclick="$('.mane-nav').slideToggle();" name="☰" content="☰">☰</p>
                </div>
            </div>
        </header>

        <section class="section container">
            <div class="section_content payroll-management row">

                <div class="payroll-management_element payroll-management_info col-12 col-md-7">
                    <h1 class="fat-text">1С: Зарплата и управление персоналом 8</h1>
                    <h2 class="fat-text">Цена - от 760 ₽ в месяц*</h2>
                    <p class="text">
                        Программа позволяет эффективно организовать комплексный учет кадров,
                        а также автоматизировать процесс подсчета зарплаты и других выплат сотрудникам
                    </p>
                    <a href="#"><input type="button" name="" value="Попробовать 14 дней бесплатно" class="section-bottom"></a>
                    <p class="postscript">*входит в тарифы</p>
                </div>

                <div class="payroll-management_element payroll-management_image col-md-5 d-md-block d-sm-none">
                    <img src="image/gallery/2.svg" alt="" />
                </div>

            </div>


            <h2 class="fat-text">Основные возможности</h2>
            <div class="section_content key-features">
                <div class="row">
                    <ul class="key-features_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw">
                                <img src="image/jackdaw.svg" alt="" />
                            </p>
                            <p class="text">Учёт заработной платы</p>
                        </li>
                    </ul>
                    <ul class="key-features_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw">
                                <img src="image/jackdaw.svg" alt="" />
                            </p>
                            <p class="text">Учет кадров и анализ кадрового состава</p>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="key-features_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw">
                                <img src="image/jackdaw.svg" alt="" />
                            </p>
                            <p class="text">Исчисление налогов и взносов с фонда оплаты труда</p>
                        </li>
                    </ul>
                    <ul class="key-features_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw">
                                <img src="image/jackdaw.svg" alt="" />
                            </p>
                            <p class="text">Автоматизация кадрового делопроизводства</p>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="key-features_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw">
                                <img src="image/jackdaw.svg" alt="" />
                            </p>
                            <p class="text">Управление компетенциями и аттестация работников</p>
                        </li>
                    </ul>
                    <ul class="key-features_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw">
                                <img src="image/jackdaw.svg" alt="" />
                            </p>
                            <p class="text">Возможность сдачи отчетов по каждому из сотрудников</p>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="key-features_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw">
                                <img src="image/jackdaw.svg" alt="" />
                            </p>
                            <p class="text">Отражение начисленной зарплаты и налогов в затратах предприятия</p>
                        </li>
                    </ul>
                    <ul class="key-features_element col-md-12 col-lg-6">
                        <li>
                            <p class="jackdaw">
                                <img src="image/jackdaw.svg" alt="" />
                            </p>
                            <p class="text">Управление денежными расчетами с персоналом, включая депонирование</p>
                        </li>
                    </ul>
                </div>
            </div>


            <h2 class="fat-text">Преимущества аренды 1С в облаке</h2>
            <div class="section_content rental-benefits row">
                <div class="rental-benefits_element col-lg-4 col-md-6 col-xs-1">
                    <div class="rental-benefits_wrapper">
                        <a href="#" class="text-link">
                            <p class="rental-benefits_image"><?php include("image/image_for_table/kube.php")?></p>
                            <p class="rental-benefits_text fat-text text-link">Бесплатные консультации по работе в 1С</p>
                        </a>
                    </div>
                </div>
                <div class="rental-benefits_element col-lg-4 col-md-6 col-xs-1">
                    <div class="rental-benefits_wrapper">
                        <a href="#" class="text-link">
                            <p class="rental-benefits_image"><?php include("image/image_for_table/headphones.php")?></p>
                            <p class="rental-benefits_text fat-text text-link">Поддержка 24/7 настоящих профи 1С</p>
                        </a>
                    </div>
                </div>
                <div class="rental-benefits_element col-lg-4 col-md-6 col-xs-1">
                    <div class="rental-benefits_wrapper">
                        <a href="#" class="text-link">
                            <p class="rental-benefits_image"><?php include("image/image_for_table/rub.php")?></p>
                            <p class="rental-benefits_text fat-text text-link">Уникальные финансовые гарантии</p>
                        </a>
                    </div>
                </div>
                <div class="rental-benefits_element col-lg-4 col-md-6 col-xs-1">
                    <div class="rental-benefits_wrapper">
                        <a href="#" class="text-link">
                            <p class="rental-benefits_image"><?php include("image/image_for_table/home.php")?></p>
                            <p class="rental-benefits_text fat-text text-link">Возможность работать в 1С из дома и офиса</p>
                        </a>
                    </div>
                </div>
                <div class="rental-benefits_element col-lg-4 col-md-6 col-xs-1">
                    <div class="rental-benefits_wrapper">
                        <a href="#" class="text-link">
                            <p class="rental-benefits_image"><?php include("image/image_for_table/clock.php")?></p>
                            <p class="rental-benefits_text fat-text text-link">Круглосуточный доступ в 1С</p>
                        </a>
                    </div>
                </div>
                <div class="rental-benefits_element col-lg-4 col-md-6 col-xs-1">
                    <div class="rental-benefits_wrapper">
                        <a href="#" class="text-link">
                            <p class="rental-benefits_image"><?php include("image/image_for_table/plus-circle.php")?></p>
                            <div class="rental-benefits_text">
                                <p class="fat-text text-link">Попробуйте 1С: ЗУП 8</p>
                                <a class="fat-text rental-benefits_link">Попробовать бесплатно</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="fat-text">Кому подойдет 1С: ЗУП 8?</h2>
            <div class="section_content who-will-suit-1c">
                <p class="who-will-text">В качестве дополнительного функционала данный программный продукт позволяет довести до
                    автоматизма большинство процессов управления персоналом, например, составление планов потребности в
                    новых кадрах, подбор и управление финансовой заинтересованностью персонала, а также автоматизация
                    кадрого учета.
                </p>
            </div>

            <div class="container tab_nav">
                <ul>
                    <li data-target="tab1" class="action">Руководителям</li>
                    <li data-target="tab2">Бухгалтерам и отделу кадров</li>
                    <li data-target="tab3">Сотрудникам</li>
                    <li data-target="tab4">HR</li>
                </ul>
            </div>

            <div class="section_content tabs_content">

                <div class="tabs-content_element row action" data-href="tab1">
                    <div class="col-lg-6 col-sm-12">
                        <h4 class="fat-text">Руководство компании</h4>
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Качество персонала</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Эффективность процессов управления персоналом</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Затраты на персонал</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Производительность труда и выполнение KPI</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <h4 class="text_title fat-text">Руководство подразделений</h4>
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Квалификация персонала</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Загрузка сотрудников</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Эффективность системы мотивации</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Предложения по изменению мотивации</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Заявки на обучение</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Заявки на подбор</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tabs-content_element row" data-href="tab2">
                    <div class="col-lg-6 col-sm-12">
                        <h4 class="fat-text">Бухгалтерия</h4>
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Структура начисления зарплаты</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Данные для расчета налогов и выплат в фонды</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Начисление и выплата зарплаты, налогов</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Бюджет затрат на персонал</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Исполнение бюджета</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Отклонения от бюджета</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <h4 class="text_title fat-text">Отдел кадров</h4>
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Качетственный состав работников</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Данные о сотрудниках</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Перемещение кадров</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tabs-content_element multiple-items row" data-href="tab3">
                    <div class="col-lg-6 col-sm-12">
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Начисленная зарплата</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Оставшиеся дни отпуска</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Заявки на отпуск</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Заявки на обучение</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Отработанное время</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Заявки на отпуск</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tabs-content_element row" data-href="tab4">
                    <div class="col-lg-6 col-sm-12">
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Потребность в кадрах</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Квалификация персонала</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Кадровый резерв</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Затраты на персонал</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Загрузка сотрудников</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <ul class="list">
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Кадровый план</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Информация о кандидатах</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Планы обучения</p>
                            </li>
                            <li class="list_element">
                                <p class="jackdaw-list"><?php include("image/vector-oring.php") ?></p>
                                <p class="text">Результаты обучения</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>


            <h2 class="fat-text comparison-table_title">Сравнение функционала версий ПРОФ и КОРП</h2>
            <h3 class="fat-text comparison-table_title_mobile-table">Отличия функционала версий ПРОФ и КОРП</h3>
            <div class="section_content comparison-table">
                <div class="comparison-table_wrapper row" id="hearer-table">
                    <div class="comparison-table_element colon1 col-12 col-md-8" id="colon1_hearer-table">
                        <h4 class="fat-text">Возможности</h4>
                    </div>
                    <div class="comparison-table_element colon2 col-12 col-md-4 row" id="colon1_hearer-table">
                        <div class="colon2 col-12 col-md-6">
                            <h4 class="fat-text">ПРОФ</h4>
                        </div>
                        <div class="colon3 col-12 col-md-6">
                            <h4 class="fat-text">КОРП</h4>
                        </div>
                    </div>
                </div>

                <div class="comparison-table_wrapper-for-slider">
                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Кадровый резерв и управление талантами</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Поддержка грейдов</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Адаптация, обучение и развитие</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Анализ расходов на персонал по проектам и направлениям деятельности</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Удаленный доступ для линейных руководителей и сотрудников</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/minus.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Финансовая мотивация с использованием показателей эффективности (KPI)</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Импорт значений показателей из 1С:Управление торговлей и 1С:Розница</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Учет деятельности нескольких организаций</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Возможность изменения (конфигурирования) прикладного решения</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Учет кадров и анализ кадрового состава</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Расчет и учет заработной платы</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Управление денежными расчетами, включая депонирование</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Исчисление налогов и страховых взносов (в т.ч. для УСН и ЕНВД)</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="comparison-table_wrapper row">
                        <div class="comparison-table_element colon1 col-12 col-md-8">
                            <p>Подготовка регламентированной отчетности</p>
                        </div>
                        <div class="comparison-table_element colon2 col-12 col-md-4 row">
                            <div class="colon2 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                            <div class="colon3 col-12 col-md-6">
                                <p><?php include("image/vector-green.php") ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_content comparison-table_mobil">
                <div class="comparison-table_mobil_wrapper">
                    <h5 class="fat-text">Возможности</h5>
                    <div class="7_mobil_title">
                        <p class="comparison-table_mobil_title">Кадровый резерв и управление талантами</p>
                        <p class="comparison-table_mobil_title">Поддержка грейдов</p>
                        <p class="comparison-table_mobil_title">Адаптация, обучение и развитие</p>
                        <p class="comparison-table_mobil_title">Анализ расходов на персонал по проектам и направлениям деятельности</p>
                    </div>
                    <div class="delimiter-mini"></div>
                    <h5 class="fat-text">ПРОФ</h5>
                    <div class="7_mobil_prof">
                        <p class="comparison-table_mobil_prof"><?php include("image/minus.php") ?></p>
                        <p class="comparison-table_mobil_prof"><?php include("image/minus.php") ?></p>
                        <p class="comparison-table_mobil_prof"><?php include("image/minus.php") ?></p>
                        <p class="comparison-table_mobil_prof"><?php include("image/minus.php") ?></p>
                    </div>
                    <h5 class="fat-text">КОРП</h5>
                    <div class="7_mobil_corp">
                        <p class="comparison-table_mobil_corp"><?php include("image/vector-green.php") ?></p>
                        <p class="comparison-table_mobil_corp"><?php include("image/vector-green.php") ?></p>
                        <p class="comparison-table_mobil_corp"><?php include("image/vector-green.php") ?></p>
                        <p class="comparison-table_mobil_corp"><?php include("image/vector-green.php") ?></p>
                    </div>
                </div>
                <div class="comparison-table_element comparison-table_element-inputs">
                    <label for="comparison-table_button-1" class="comparison-table_submit first" oninput ></label>
                    <input type="radio" name="table" class="comparison-table_radio" id="comparison-table_button-1" value="Руководителям" checked oninput="table(1)">
                    <label for="comparison-table_button-2" class="comparison-table_submit"></label>
                    <input type="radio" name="table" class="comparison-table_radio" id="comparison-table_button-2" value="Руководителям" oninput="table(2)">
                    <label for="comparison-table_button-3" class="comparison-table_submit"></label>
                    <input type="radio" name="table" class="comparison-table_radio" id="comparison-table_button-3" value="Руководителям" oninput="table(3)">
                    <label for="comparison-table_button-4" class="comparison-table_submit"></label>
                    <input type="radio" name="table" class="comparison-table_radio" id="comparison-table_button-4" value="Руководителям" oninput="table(4)">
                </div>
            </div>

            <style>
                .gallery_element-image img {
                    height: 502px;
                    width: auto;
                }
            </style>
            <div class="section_content">
                <div class="gallery_element gallery_element-image gallery">
                    <img src="image/gallery/1.svg" alt="" />
                    <img src="image/gallery/2.svg" alt="" />
                    <img src="image/gallery/3.svg" alt="" />
                    <img src="image/gallery/4.svg" alt="" />
                </div>
            </div>

            <h2 class="fat-text"><p class="title_footer-info">Цена на 1С: ЗУП 8 онлайн от&#160;</p><p class="fat-text highlighter">760 ₽ в месяц</p></h2>
            <div class="section_content footer-info">
                <form class="section_footer-info_element footer-info_form">
                    <div class="footer-info_form_element">
                        <input type="text" placeholder="&#160;&#160;&#160;&#160;Имя*">
                    </div>
                    <div class="footer-info_form_element">
                        <input type="tel" placeholder="&#160;&#160;&#160;&#160;RU* &#160;&#160;+7">
                    </div>
                    <div class="footer-info_form_element">
                        <input type="email" placeholder="&#160;&#160;&#160;&#160;E-mail*">
                    </div>
                </form>
                <p>* Поля обязательные для заполнения</p>
                <div class="section_footer-info_element wrapper-for-14-free-days">
                    <div class="section_footer-info_wrapper-for-button">
                        <input type="button" value="Попробовать 14 дней бесплатно" class="section_footer-info_button">
                    </div>
                    <p class="section_footer-info_text minitext">
                        Начиная работу, я принимаю условия
                        <a class="section_container-3_link link">
                            Оферты
                        </a>
                        <br>
                        и соглашаюсь на обработку персональных данных в соответствии с
                        <a class="section_container-3_link link">
                            Политикой конфиденциальности
                        </a>
                    </p>
                </div>

            </div>
            <h2 class="title-for-container-10 fat-text">С какими отчетами Вы можете работать?</h2>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
        </section>
        <footer>

        </footer>
    </body>
</html>
