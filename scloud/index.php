<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devise-width, initial-scale=1">
    <title>Title</title>
    <link href="style/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/pc_style.css" type="text/css">


    <link rel="stylesheet" href="style/slick.css" type="text/css" />
    <link rel="stylesheet" href="style/slick-theme.css" type="text/css" />


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
            <a href="http://test.flower-bottle.ru/scloud"><?php include "image/logo.php" ?></a>
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
        <div class="payroll-management_element payroll-management_info col-12 col-lg-7">
            <h1 class="fat-text">1С: Зарплата и управление персоналом 8</h1>
            <h2 class="fat-text">Цена - от 760 ₽ в месяц*</h2>
            <p class="text">
                Программа позволяет эффективно организовать комплексный учет кадров,
                а также автоматизировать процесс подсчета зарплаты и других выплат сотрудникам
            </p>
            <a href="#"><input type="button" name="" value="Попробовать 14 дней бесплатно" class="section-bottom"></a>
            <p class="postscript">*входит в тарифы</p>
        </div>
        <div class="payroll-management_element payroll-management_image col-lg-5">
            <?php include_once("image/svg1.php")?>
        </div>
    </div>
    <h2 class="fat-text">Основные возможности</h2>
    <div class="section_content key-features">
        <div class="row">
            <ul class="key-features_element col-md-12 col-lg-6">
                <li>
                    <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                    <p class="text">Учёт заработной платы</p>
                </li>
            </ul>
            <ul class="key-features_element col-md-12 col-lg-6">
                <li>
                    <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                    <p class="text">Учет кадров и анализ кадрового состава</p>
                </li>
            </ul>
        </div>
        <div class="row">
            <ul class="key-features_element col-md-12 col-lg-6">
                <li>
                    <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                    <p class="text">Исчисление налогов и взносов с фонда оплаты труда</p>
                </li>
            </ul>
            <ul class="key-features_element col-md-12 col-lg-6">
                <li>
                    <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                    <p class="text">Автоматизация кадрового делопроизводства</p>
                </li>
            </ul>
        </div>
        <div class="row">
            <ul class="key-features_element col-md-12 col-lg-6">
                <li>
                    <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                    <p class="text">Управление компетенциями и аттестация работников</p>
                </li>
            </ul>
            <ul class="key-features_element col-md-12 col-lg-6">
                <li>
                    <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                    <p class="text">Возможность сдачи отчетов по каждому из сотрудников</p>
                </li>
            </ul>
        </div>
        <div class="row">
            <ul class="key-features_element col-md-12 col-lg-6">
                <li>
                    <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                    <p class="text">Отражение начисленной зарплаты и налогов в затратах предприятия</p>
                </li>
            </ul>
            <ul class="key-features_element col-md-12 col-lg-6">
                <li>
                    <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
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
            <div class="mobil_title">
                <p class="comparison-table_mobil_title">Кадровый резерв и управление талантами</p>
                <p class="comparison-table_mobil_title">Поддержка грейдов</p>
                <p class="comparison-table_mobil_title">Адаптация, обучение и развитие</p>
                <p class="comparison-table_mobil_title">Анализ расходов на персонал по проектам и направлениям деятельности</p>
            </div>
            <div class="delimiter-mini"></div>
            <h5 class="fat-text">ПРОФ</h5>
            <div class="mobil_prof">
                <p class="comparison-table_mobil_prof"><?php include("image/minus.php") ?></p>
                <p class="comparison-table_mobil_prof"><?php include("image/minus.php") ?></p>
                <p class="comparison-table_mobil_prof"><?php include("image/minus.php") ?></p>
                <p class="comparison-table_mobil_prof"><?php include("image/minus.php") ?></p>
            </div>
            <h5 class="fat-text">КОРП</h5>
            <div class="mobil_corp">
                <p class="comparison-table_mobil_corp"><?php include("image/vector-green.php") ?></p>
                <p class="comparison-table_mobil_corp"><?php include("image/vector-green.php") ?></p>
                <p class="comparison-table_mobil_corp"><?php include("image/vector-green.php") ?></p>
                <p class="comparison-table_mobil_corp"><?php include("image/vector-green.php") ?></p>
            </div>
        </div>
        <div class="comparison-table_element comparison-table_inputs">
            <label for="comparison-table_button-1" class="comparison-table_submit first" oninput ></label>
            <input type="radio" name="table" class="comparison-table_radio" id="comparison-table_button-1" value="Руководителям" checked oninput="showSlides(1)">
            <label for="comparison-table_button-2" class="comparison-table_submit"></label>
            <input type="radio" name="table" class="comparison-table_radio" id="comparison-table_button-2" value="Руководителям" oninput="showSlides(2)">
            <label for="comparison-table_button-3" class="comparison-table_submit"></label>
            <input type="radio" name="table" class="comparison-table_radio" id="comparison-table_button-3" value="Руководителям" oninput="showSlides(3)">
            <label for="comparison-table_button-4" class="comparison-table_submit"></label>
            <input type="radio" name="table" class="comparison-table_radio" id="comparison-table_button-4" value="Руководителям" oninput="showSlides(4)">
        </div>
    </div>

            <div class="section_content gallery">

                <div class="gallery_element">
                    <img src="image/gallery/1.svg" alt="" data-image />
                    <img src="image/gallery/1.svg" alt="" data-image />
                    <img src="image/gallery/1.svg" alt="" data-image />
                    <img src="image/gallery/1.svg" alt="" data-image />
                    <img src="image/gallery/1.svg" alt="" data-image />
                </div>

                <div class="arrow" id="arrow_left">
                    <a class="previous" onclick="previousSlide()"><?php include("image/arrow_left.php") ?></a>
                </div>
                <div class="arrow" id="arrow_right">
                    <a class="next" onclick="nextSlide()"><?php include("image/arrow_right.php") ?></a>
                </div>
            </div>
            <h2 class="fat-text"><p class="title_form">Цена на 1С: ЗУП 8 онлайн от&#160;</p><p class="fat-text highlighter">760 ₽ в месяц</p></h2>
            <div class="section_content form">
                <form class="form_element form_form">
                    <div class="form_form_element">
                        <input type="text" placeholder="&#160;&#160;&#160;&#160;Имя*">
                    </div>
                    <div class="form_form_element">
                        <input type="tel" placeholder="&#160;&#160;&#160;&#160;RU* &#160;&#160;+7">
                    </div>
                    <div class="form_form_element">
                        <input type="email" placeholder="&#160;&#160;&#160;&#160;E-mail*">
                    </div>
                </form>
                <p>* Поля обязательные для заполнения</p>
                <div class="form_element wrapper-for-14-free-days">
                    <div class="form_wrapper-for-button">
                        <input type="button" value="Попробовать 14 дней бесплатно" class="form_button">
                    </div>
                    <p class="form_text minitext">
                        Начиная работу, я принимаю условия
                        <a class="container-link">
                            Оферты
                        </a>
                        <br>
                        и соглашаюсь на обработку персональных данных в соответствии с
                        <a class="container-link">
                            Политикой конфиденциальности
                        </a>
                    </p>
                </div>

            </div>
            <h2 class="title-for-list fat-text">С какими отчетами Вы можете работать?</h2>
            <div class="section_content list">
                <ul class="list_element row">
                    <li class="col-xl-8">
                        <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                        <p class="text">Формирование списков кандидатов на работу, работников компании и ее подразделений;</p>
                    </li>
                    <li class="col-xl-8">
                        <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                        <p class="text">Составление диаграмм, графиков отпусков с фактическим использованием отпусков работников компании и ее подразделений;</p>
                    </li>
                    <li class="col-xl-8">
                        <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                        <p class="text">Составление диаграмм планируемой занятости работников компании;</p>
                    </li>
                    <li class="col-xl-8">
                        <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                        <p class="text">Отчеты по планируемым фондам зарплаты работников компании;</p>
                    </li>
                    <li class="col-xl-8">
                        <p class="jackdaw"><?php include("image/jackdaw.php") ?></p>
                        <p class="text">Отчеты по плановому и фактическому состоянию штатного расписания и многие другие.</p>
                    </li>
                </ul>

            </div>
            <h2 class="fat-text">Почему пользователи выбирают Scloud?</h2>
            <div class="section_content dignity row">
                <div class="dignity_element col-12 col-lg-6 row">
                    <div class="col-12 col-md-6">
                        <h3 class="dignity_part-title fat-text">24/7</h3>
                        <p class="text">
                            круглосуточная техническая
                            поддержка клиентов
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="dignity_part-title fat-text">> 32 000</h3>
                        <p class="text">
                            пользователей доверяют свою
                            1С нашему сервису
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="dignity_part-title fat-text">8 лет</h3>
                        <p class="text">
                            предоставления доступа к 1С
                            онлайн в России
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="dignity_part-title fat-text">> 200</h3>
                        <p class="text">
                            высококвалифицированных специалистов в штате
                        </p>
                    </div>
                    <a class="link">Узнать больше о нас&#160;&#160;></a>
                </div>
                <div class="dignity_element col-12 col-lg-6 dignity_image">
                    <p><?php include("image/svg3.php") ?></p>
                </div>
            </div>
            <h2 class="fat-text">Возможно вас заинтересует</h2>
            <div class="section_content your_interes row">
                <div class="your_interes_element wrapper-for-content-your_interes col-12 col-lg-4 col-md-6">
                    <div class="your_interes_wrapper your_interes_wrapper_1">
                        <div class="your_interes_title">
                            <p class="your_interes_title_image"><?php include("image/interested/union.php") ?></p>
                            <h5 class="your_interes_header fat-text">
                                1С: Бухгалтерия <br>
                                ПРОФ/КОРП
                            </h5>
                        </div>
                        <p class="your_interes_text your_interes_text">
                            Конфигурация разработана в соответствии с
                            нормами действующего законодательства.
                            Учет хозяйственной деятельности, заработной
                            платы, сдача отчетности в электронном виде.</p>
                        <a class="container-link duplicate" id="link_1">Подробнее&#160;&#160;></a>
                    </div>
                </div>
                <div class="your_interes_element wrapper-for-content-your_interes col-12 col-lg-4 col-md-6">
                    <div class="your_interes_wrapper your_interes_wrapper_2">
                        <div class="your_interes_title">
                            <p class="your_interes_title_image"><?php include("image/interested/book.php") ?></p>
                            <h5 class="your_interes_header fat-text">
                                Информационно-справочная система 1С
                            </h5>
                        </div>
                        <p class="your_interes_text your_interes_text">В системе представлены новости, комментарии
                            и консультации по вопросам бухгалтерского,
                            налогового и кадрового учета, рекомендации
                            по налогообложению, пошаговые инструкции
                            по их отражению в программе.</p>
                        <a class="container-link duplicate" id="link_2">Подробнее&#160;&#160;></a>
                    </div>
                </div>

                <div class="container-link md-links-first-2-blocks col-6">
                    <a>Подробнее&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div>
                <div class="container-link md-links-first-2-blocks col-6">
                    <a>Подробнее&nbsp <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div>

                <div class="your_interes_element wrapper-for-content-your_interes col-12 col-lg-4 col-md-6">
                    <div class="your_interes_wrapper your_interes_wrapper_3">
                        <div class="your_interes_title">
                            <p class="your_interes_title_image"><?php include("image/interested/files.php") ?></p>
                            <h5 class="your_interes_header fat-text">
                                1С: Отчетность
                            </h5>
                        </div>
                        <p class="your_interes_text your_interes_text">Позволяет сдавать отчётность со своего ПК
                            прямо из 1С в контролирующие органы: ФНС,
                            ПФР, ФСС, Федеральная служба государственной
                            статистики, Росалкогольрегулирование.</p>
                        <a class="container-link duplicate" id="link_3">Подробнее&#160;&#160;></a>
                    </div>
                </div>
            </div>
            <div class="section_content your_interes wrapper-for-links row">
                <div class="your_interes_element col-12 col-lg-4 col-md-6">
                    <a class="container-link orig">Подробнее&#160;&#160;></a>
                </div>
                <div class="your_interes_element col-12 col-lg-4 col-md-6">
                    <a class="container-link orig">Подробнее&#160;&#160;></a>
                </div>
                <div class="your_interes_element col-12 col-lg-4 col-md-6">
                    <a class="container-link orig last">Подробнее&#160;&#160;></a>
                </div>
            </div>
            <h2 class="fat-text">Начните пользоваться 1С прямо сейчас</h2>
            <div class="section_content form">
                <form class="form_element">
                    <div class="form_form_element">
                        <input type="text" placeholder="&#160;&#160;&#160;&#160;Имя*">
                    </div>
                    <div class="form_form_element">
                        <input type="tel" placeholder="&#160;&#160;&#160;&#160;RU* &#160;&#160;+7">
                    </div>
                    <div class="form_form_element">
                        <input type="email" placeholder="&#160;&#160;&#160;&#160;E-mail*">
                    </div>
                </form>
                <p>* Поля обязательные для заполнения</p>
                <div class="form_element wrapper-for-14-free-days">
                    <div class="form_wrapper-for-button">
                        <input type="button" value="Попробовать 14 дней бесплатно" class="form_button">
                    </div>
                    <p class="form_text minitext">
                        Начиная работу, я принимаю условия
                        <a class="container-link">
                            Оферты
                        </a>
                        <br>
                        и соглашаюсь на обработку персональных данных в соответствии с
                        <a class="container-link">
                            Политикой конфиденциальности
                        </a>
                    </p>
                </div>
            </div>
            <div class="delimiter"></div>
            <div class="section_content info-strings row">
                <div class="info-strings_element col-12 col-md-3">
                    <h6 class="fat-text" id="info-strings_title-1 ">Типовые решения</h6>
                </div>
                <div class="info-strings_element col-12 col-md-3">
                    <h6 class="fat-text" id="info-strings_title-2">Отраслевые решения</h6>
                </div>
                <div class="info-strings_element col-12 col-md-3">
                    <h6 class="fat-text" id="info-strings_title-3">Сервисы</h6>
                </div>
                <div class="info-strings_element col-12 col-md-3">
                    <h6 class="fat-text" id="info-strings_title-4">Доп.возможности</h6>
                </div>

                <div class="info-strings_element col-12 col-md-3 info-strings_duplicate duplicate-1">
                    <h6 class="fat-text" onclick="$('#info-strings_text-1').slideToggle();">Типовые решения <i class="fa fa-angle-down" aria-hidden="true"></i></h6>
                </div>

                <div class="info-strings_element col-12 col-lg-3" id="info-strings_text-1">
                    <p class="info-strings_text">1C: Бухгалтерия ПРОФ/КОРП</p>
                    <p class="info-strings_text">1С: Зарплата и управление персоналом ПРОФ/КОРП</p>
                    <p class="info-strings_text">1C: Комплексная автоматизация</p>
                    <p class="info-strings_text">1С: Управление нашей фирмой</p>
                    <div class="info-strings_element container-links">
                        <a href="#" class="container-link info-strings_float fat-text">Показать больше <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="info-strings_element col-12 col-md-3 info-strings_duplicate duplicate-2">
                    <h6 class="fat-text" onclick="$('#info-strings_text-2').slideToggle();">Отраслевые решения <i class="fa fa-angle-down" aria-hidden="true"></i></h6>
                </div>
                <div class="info-strings_element col-12 col-lg-3" id="info-strings_text-2">
                    <p class="info-strings_text">1C: CRM ПРОФ</p>
                    <p class="info-strings_text">1С: Учет в управляющих компаниях ЖКХ, ТСЖ и ЖСК</p>
                    <p class="info-strings_text">1C: Автосервис</p>
                    <p class="info-strings_text">1С: Салон красоты</p>
                    <div class="info-strings_element container-links">
                        <a href="#" class="container-link info-strings_float fat-text">Показать больше <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="info-strings_element col-12 col-md-3 info-strings_duplicate duplicate-3">
                    <h6 class="fat-text" onclick="$('#info-strings_text-3').slideToggle(); ">Сервисы <i class="fa fa-angle-down" aria-hidden="true"></i></h6>
                </div>
                <div class="info-strings_element col-12 col-lg-3" id="info-strings_text-3">
                    <p class="info-strings_text">1C: Контрагент</p>
                    <p class="info-strings_text">1С: СтартЭДО</p>
                    <p class="info-strings_text">1C: Отчетность</p>
                    <p class="info-strings_text">1С: Контрагент</p>
                    <p class="info-strings_text">1CПАРК Риски</p>
                </div>
                <div class="info-strings_element col-12 col-md-3 info-strings_duplicate duplicate-4">
                    <h6 class="fat-text" onclick="$('#info-strings_text-4').slideToggle();">Доп.возможности</h6>
                </div>
                <div class="info-strings_element col-12 col-lg-3" id="info-strings_text-4">
                    <p class="info-strings_text">ФГИС Меркурий</p>
                    <p class="info-strings_text">ЕГАИС</p>
                    <p class="info-strings_text">Клиент-банк</p>
                    <p class="info-strings_text">Директор-банк</p>
                    <p class="info-strings_text">Торговое оборудование</p>
                    <div class="info-strings_element container-links">
                        <a href="#" class="container-link info-strings_float fat-text">Показать больше <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="section_content footer-info">
                    <div class="wrapper_footer-info_element" id="wrapper_footer-info_1">
                        <div class="logo-footer section_footer-info_element">
                            <a href="http://test.flower-bottle.ru/scloud"><?php include("image/logo_footer.php") ?></a>
                        </div>
                        <div class="section_footer-info_element contact-info">
                            <p>
                                <h5 class="contact-info_tel-1 fat-text">8 800 555-91-15</h5>
                                <h5 class="contact-info_tel-2 fat-text">&#160;| +7 (495) 786-59-15</h5>
                                111024, г. Москва, ул. Авиамоторная, 69 <br>
                                300028, г. Тула, ул. Болдина, 98
                            </p>
                        </div>
                    </div>
                    <div class="wrapper_footer-info_element" id="wrapper_footer-info_2">
                        <nav class="section_footer-info_element footer-info_element1">
                            <div class="footer-info_image_1"><?php include "image/image_net/inst.php" ?></div>
                            <div class="footer-info_image_1"><?php include "image/image_net/fb.php" ?></div>
                            <div class="footer-info_image_1"><?php include "image/image_net/vk.php" ?></div>
                            <div class="footer-info_image_1"><?php include "image/image_net/ok.php" ?></div>
                            <div class="footer-info_image_1"><?php include "image/image_net/youtube.php" ?></div>
                        </nav>
                        <div class="section_footer-info_element footer-info_element2">
                            <div class="footer-info_image_2" id="apple"><?php include("image/apple.php") ?></div>
                            <div class="footer-info_image_2" id="googl"><?php include("image/googl_play.php") ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer_content row">
<!--                <div class="">-->
                    <div class="footer_content_element footer-element1 col-md-6">
                        <p><a href="#" class="footer-link">Оферта </a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="#" class="footer-link"> Политика конфиденциальности</a></p>
                    </div>
                    <div class="footer_content_element footer-element2 col-12 col-md-6">
                        <p>© 2019 scloud.ru ООО "СервисКлауд"</p>
                    </div>
<!--                </div>-->
            </div>
        </footer>
    </body>
</html>
