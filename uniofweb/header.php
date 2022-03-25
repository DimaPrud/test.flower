<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Unionfweb</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="http://test.flower-bottle.ru/uniofweb/style.css">
    <script src="script.js"></script>
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
                                <li><input type="text" placeholder="  ФИО"></li>
                                <li><input type="tel" placeholder="  Телефон"></li>
                                <li><label for="select" class="selectY">
                                        <input type="radio" name="list" value="not_changed" id="select" class="inputY">
                                        <div class="items">
                                            <input type="radio" name="list" value="first_value" id="list[0]" class="inputY">
                                            <label for="list[0]"> Репетитор</label>
                                            <input type="radio" name="list" value="second_value" id="list[1]" class="inputY">
                                            <label for="list[1]"> Гувернантка</label>
                                            <input type="radio" name="list" value="second_value" id="list[2]" class="inputY">
                                            <label for="list[2]"> Няня</label>
                                            <input type="radio" name="list" value="second_value" id="list[3]" class="inputY">
                                            <label for="list[3]"> Водитель</label>
                                            <input type="radio" name="list" value="second_value" id="list[4]" class="inputY">
                                            <label for="list[4]"> Садовник</label>
                                            <span id="textY">Должность</span>
                                        </div>
                                    </label></li>
                                <li><label for="selectX" class="selectX">
                                        <input type="radio" name="list" value="not_changed" id="selectX" class="inputX">
                                        <div class="itemsX">
                                            <input type="radio" name="list" value="first_value" id="list[5]" class="inputX">
                                            <label for="list[5]"> Полный день</label>
                                            <input type="radio" name="list" value="second_value" id="list[6]" class="inputX">
                                            <label for="list[6]"> Пол дня</label>
                                            <input type="radio" name="list" value="second_value" id="list[7]" class="inputX">
                                            <label for="list[7]"> График работы</label>
                                            <input type="radio" name="list" value="second_value" id="list[8]" class="inputX">
                                            <label for="list[8]"> Несколько часов</label>
                                            <input type="radio" name="list" value="second_value" id="list[9]" class="inputX">
                                            <label for="list[9]"> Круглосуточно</label>
                                            <span id="textX">График работы</span>
                                        </div>
                                    </label></li>
                                <li><textarea type="text" placeholder=" Дополнительная информация" class="text"></textarea></li>
                                <li><input type="submit" placeholder="ОТПРАВИТЬ" id="submitT"></li>
                            </ul>
                        </li>
                        <li class="rightP" id="rP2"><a class="rightPS">Оставить резюме</a>
                            <ul class="bottom">
                                <li><input type="text" placeholder=" ФИО"></li>
                                <li><input type="tel" placeholder=" Телефон"></li>
                                <li><label for="selectZ" class="selectZ">
                                        <input type="radio" name="list" value="not_changed" id="selectZ" class="inputZ">
                                        <div class="itemsZ">
                                            <input type="radio" name="list" value="first_value" id="list[10]" class="inputZ">
                                            <label for="list[10]"> Репетитор</label>
                                            <input type="radio" name="list" value="second_value" id="list[11]" class="inputZ">
                                            <label for="list[11]"> Гувернантка</label>
                                            <input type="radio" name="list" value="second_value" id="list[12]" class="inputZ">
                                            <label for="list[12]"> Няня</label>
                                            <input type="radio" name="list" value="second_value" id="list[13]" class="inputZ">
                                            <label for="list[13]"> Водитель</label>
                                            <input type="radio" name="list" value="second_value" id="list[14]" class="inputZ">
                                            <label for="list[14]"> Садовник</label>
                                            <span id="textZ">Должность</span>
                                        </div>
                                    </label></li>
                                <li><input type="text" placeholder=" Образование" </li>
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