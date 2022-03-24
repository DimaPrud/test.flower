<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Unionfweb</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="http://test.flower-bottle.ru/uniofweb/style.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php include "js.php"?>
</head>
<body id="body">
    <div class="content">
        <header id="headname">
            <div class="headHead">
                <p id="mainTitle">8 (4872) 31-13-45</p>
                <div class="headRight">
                    <ul>
                        <li class="rightP" id="rP1"><a class="rightPS">Оставить заявку</a>
                            <ul class="top">
                                <li><input type="text" placeholder=" ФИО"></li>
                                <li><input type="text" placeholder=" Телефон"></li>
                                <li><div class="select" id="select1">
                                        <select name="post">
                                            <option>Репетитор</option>
                                            <option>Гувернантка</option>
                                            <option>Няня</option>
                                            <option>Водитель</option>
                                            <option>Садовник</option>
                                        </select>
                                    </div></li>
                                <li><div class="select" id="select2">
                                        <select name="graf">
                                            <option class="graf">Полный день</option>
                                            <option class="graf">Пол дня</option>
                                            <option class="graf">График работы</option>
                                            <option class="graf">несколько часов</option>
                                            <option class="graf">Круглосуточно</option>
                                        </select>
                                    </div></li>
                                <li><input type="text" placeholder=" Дополнительная информация"></li>
                                <li><input type="submit" placeholder="ОТПРАВИТЬ" id="submitT"></li>
                            </ul>
                        </li>
                        <li class="rightP" id="rP2"><a class="rightPS">Оставить резюме</a>
                            <ul class="bottom">
                                <li><input type="text" placeholder=" ФИО"></li>
                                <li><input type="number" placeholder=" Телефон"></li>
                                <li><div class="select" id="select" placeholder=" Должность">
                                        <select name="graf">
                                            <option class="graf">Репетитор</option>
                                            <option class="graf">Гувернантка</option>
                                            <option class="graf">Няня</option>
                                            <option class="graf">Водитель</option>
                                            <option class="graf">Садовник</option>
                                        </select>
                                    </div></li>

                                <li><input type="text" placeholder=" Прикрепить резюме"></li>
                                <li><input type="submit" placeholder="ОТПРАВИТЬ" id="submitT2"></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="headImg">
                <a href="http://test.flower-bottle.ru/uniofweb/body.php" id="navHeadImg"></a>
            </div>
            <nav class="headerNav">
                <ul class="navDiv">

                    <li class="navHeadP"><a href="#" class="navHS">ГЛАВНАЯ</a>
                        <ul class="navUl"></ul></li>

                    <li class="navHeadP"><a href="http://test.flower-bottle.ru/uniofweb/body2.php" class="navHS" id="navNav">ПОДОБРАТЬ ПЕРСОНАЛ</a>
                        <ul class="navUl">
                            <li class="ulLi"><a href="#" class="liP">О нас</a></li>
                            <li class="ulLi"><a href="#" class="liP">Задать вопрос</a></li>
                            <li class="ulLi"><a href="#" class="liP">Это интересно</a></li>
                            <li class="ulLi"><a href="#" class="liP">Отзывы</a></li>

                        </ul>
                    </li>

                    <li class="navHeadP"><a href="#" class="navHS">ЦЕНЫ</a>
                        <ul class="navUl"></ul></li>

                    <li class="navHeadP" id="zaglushka"></li>

                    <li class="navHeadP"><a href="#" class="navHS">ОСТАВИТЬ ЗАЯВКУ</a>
                        <ul class="navUl"></ul></li>

                    <li class="navHeadP"><a href="#" class="navHS">ОСТАВИТЬ ВАКАНСИЮ</a>
                        <ul class="navUl"></ul></li>

                    <li class="navHeadP"><a href="#" class="navHS">КОНТАКТЫ</a>
                        <ul class="navUl"></ul></li>
                </ul>
            </nav>
        </header>
        <section class="section">
            <div class="imgDiv">
                <p class="imgHead" id="p1"></p>
                <p class="imgHead" id="p2"></p>
                <p class="imgHead" id="p3"></p>
                <p class="imgHead" id="p4"></p>
                <p class="imgHead" id="p5"></p>
                <p class="imgHead" id="p6"></p>
            </div>
            <nav class="navImg">
                <input type="radio" name="radio" checked class="navInput" id="i1"  oninput=action1()>
                <input type="radio" name="radio" class="navInput" id="i2" oninput=action2()>
                <input type="radio" name="radio" class="navInput" id="i3" oninput=action3()>
                <input type="radio" name="radio" class="navInput" id="i4" oninput=action4()>
                <input type="radio" name="radio" class="navInput" id="i5" oninput=action5()>
                <input type="radio" name="radio" class="navInput" id="i6" oninput=action6()>
            </nav>


<!--            <input type="radio" name="radio" checked class="navInput" id="i1"  oninput=action1()blur2()blur3()blur4()blur5()blur6()>-->
<!--            <input type="radio" name="radio" class="navInput" id="i2" oninput=action2()blur3()blur4()blur5()blur6()>-->
<!--            <input type="radio" name="radio" class="navInput" id="i3" oninput=action3()blur4()blur5()blur6()>-->
<!--            <input type="radio" name="radio" class="navInput" id="i4" oninput=action4()blur5()blur6()>-->
<!--            <input type="radio" name="radio" class="navInput" id="i5" oninput=action5()blur6()>-->
<!--            <input type="radio" name="radio" class="navInput" id="i6" oninput=action6()>-->