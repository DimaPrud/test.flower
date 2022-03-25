<?php
error_reporting(E_ALL);
ini_set ("display_errors", "on");

if (file_exists(__DIR__ . "/header.php")) {
    include __DIR__ . "/header.php";
} else {
    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );
}
?>
<div class="body2">
    <h1 class="body2H">Подобрать персоонал</h1>
    <div class="fonT"></div>
    <div class="body2Input">
        <div class="inputSelect">
            <p>Показать только</p>
            <label for="selectA" class="selectA">
                <input type="radio" name="list" value="not_changed" id="selectA" class="inputA">
                <div class="itemsA">
                    <input type="radio" name="list" value="first_value" id="list[15]" class="inputA">
                    <label for="list[15]"> Репетитор</label>
                    <input type="radio" name="list" value="second_value" id="list[16]" class="inputA">
                    <label for="list[16]"> Гувернантка</label>
                    <input type="radio" name="list" value="second_value" id="list[17]" class="inputA">
                    <label for="list[17]"> Няня</label>
                    <input type="radio" name="list" value="second_value" id="list[18]" class="inputA">
                    <label for="list[18]"> Водитель</label>
                    <input type="radio" name="list" value="second_value" id="list[19]" class="inputA">
                    <label for="list[19]"> Садовник</label>
                    <span id="textA">Должность</span>
                </div>
            </label>
        </div>
        <div class="numberSet">
        <div><p class="pStag">Стаж</p> <p>от</p> <input type="tel" class="number" value="1"> <p>до</p> <input type="tel" class="number" value="30"> <p>лет</p></div>
        <div><p class="pStag">Возраст</p> <p>от</p> <input type="tel" class="number" value="25"> <p>до</p> <input type="tel" class="number" value="65"> <p>лет</p></div>
        </div>
        <input type="submit" value="ПОДОБРАТЬ" class="sumbit">

    </div>
    <div class="body2Table">
        <div class="info" id="tableHead">
            <p class="p1">ФИО</p>
            <p class="p2">ДОЛЖНОСТЬ</p>
            <p class="p34">ВОЗРАСТ</p>
            <p class="p34">СТАЖ РАБОТЫ</p>
        </div>
        <div class="info back">
            <p class="p1">Лопухова надежда александровна</p>
            <p class="p2">Гувернантка</p>
            <p class="p34">45</p>
            <p class="p34">15 лет</p>
        </div>
        <div class="info top">
            <p class="p1" style="color: #744201">Ермакова Надежда Игоревна</p>
            <p class="p2">Няня</p>
            <p class="p34">30</p>
            <p class="p34">5 лет</p>
        </div>
        <div class="info back">
            <p class="p1">Филимонов Евгений Семёнович</p>
            <p class="p2">Садовник</p>
            <p class="p34">50</p>
            <p class="p34">20 лет</p>
        </div>
        <div class="info top">
            <p class="p1">Лопухова надежда александровна</p>
            <p class="p2">Уборщица</p>
            <p class="p34">35</p>
            <p class="p34">7 лет</p>
        </div>
        <div class="info back">
            <p class="p1" style="color: #744201">Миронов Юрий герасимович</p>
            <p class="p2">Конюх</p>
            <p class="p34">60</p>
            <p class="p34">15 лет</p>
        </div>
        <div class="info top">
            <p class="p1">Новикова Нина Алексеевна</p>
            <p class="p2">Повар</p>
            <p class="p34">55</p>
            <p class="p34">30 лет</p>
        </div>
        <div class="info back">
            <p class="p1">Лопухова надежда александровна</p>
            <p class="p2">Гувернантка</p>
            <p class="p34">45</p>
            <p class="p34">15 лет</p>
        </div>
        <div class="info top">
            <p class="p1">Лопухова надежда александровна</p>
            <p class="p2">Гувернантка</p>
            <p class="p34">45</p>
            <p class="p34">15 лет</p>
        </div>
        <div class="info back">
            <p class="p1">Лопухова надежда александровна</p>
            <p class="p2">Гувернантка</p>
            <p class="p34">45</p>
            <p class="p34">15 лет</p>
        </div>
    </div>

</div>
<div class="bodyText">


<?php
error_reporting(E_ALL);
ini_set ("display_errors", "on");

if (file_exists(__DIR__ . "/footer.php")) {
    include __DIR__ . "/footer.php";
} else {
    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );
}
?>
