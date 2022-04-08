<?php
error_reporting(E_ALL);
ini_set ("display_errors", "on");

if (file_exists(__DIR__ . "/header.php")) {
    include __DIR__ . "/header.php";
} else {
    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );
}
?>
        <div class="body1">
            <div class="bodyBI"></div>
            <div class="textAndImg">
                <div class="bodyLeft">

                    <h2 class="bodyLeftH">Постоянный персонал</h2>
                    <p class="bodyLeftP">
                        <img src="png/home.png" class="bodyPageIL">
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        Наличие в доме обслуживающего
                        персонала - водителя, няни,
                        гувернантки, горничной,
                        домработницы - это вовсе не
                        дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени.
                    </p>
                </div>
                <input type="button" name="Подробнее" value="ПОДРОБНЕЕ" class="bottomL">
                <div class="bodyRight">

                    <h2 class="bodyRightH">Временный персонал</h2>

                    <p class="bodyRightP">
                        <img src="png/clock.png" class="bodyPageIR">
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        Наличие в доме обслуживающего
                        персонала - водителя, няни,
                        гувернантки, горничной,
                        домработницы - это вовсе не
                        дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени.
                    </p>
                </div>
                <input type="button" name="Подробнее" value="ПОДРОБНЕЕ" class="bottomR">
            </div>
        </div>
        <div class="bodyImg">
            <img src="png/pikchure.png" alt="Not found">
        </div>
        <div class="bodyText">
            <p id="zag">Заголовок</p>
<?php
error_reporting(E_ALL);
ini_set ("display_errors", "on");

if (file_exists(__DIR__ . "/footer.php")) {
    include __DIR__ . "/footer.php";
} else {
    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );
}
?>