<?php
require_once "template/header.php"
?>

<div class="main container mt-5">
    <div class="row">
        <main class="col">
            <h2 class="text-center">Трайк Оса </h2>
            <p>Изготовлен из алюминиевого сплава АМГ 5 и Д16т. Установлен четырехтактный двигатель мощностью 20 л.с. Ориентировочная стоимость 170 т.р.</p>
            <div class="osa-img">
                <a href="images/osa01.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                    <img src="images/osa01_mini.jpg" class="rounded mt-2" alt="парелет трайк оса">
                </a>
                <a href="images/osa02.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                    <img src="images/osa02_mini.jpg" class="rounded mt-2" alt="паралет трайк оса">
                </a>
            </div>
            <div class="text-center mt-2">
                <iframe src="https://www.youtube.com/embed/89NIzdxLwV4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

        </main>

        <?php
        require_once "template/aside.php"
        ?>
    </div>
</div>

<?php
require_once "template/footer.php";
