<?php
require_once "template/header.php";
?>
<div class="main container mt-5">
    <div class="row">
        <main class="col">
            <h2 class="text-center"><strong>Паралёты из нержавеющей стали с двигателями РМЗ-500/550</strong> </h2>
            <p class="mt-3">Мы можем предложить <strong>паралёты и запчасти к ним, ремонт паралётов, обучение, моторные
                    парапланы, помощь в подборе парамоторного оборудования</strong>. Перед заказом Вы можете приехать на
                собеседование, если погода позволяет - пролететь пассажиром. Каждый аппарат до выдачи проходит испытания,
                наладку и облёт.</p>
            <h3 class="text-center">Основные применяемые парапланы: Trike-2</h3>
            <div class="row mt-4">
                <div class="card col-sm-12 col-md-6" style="background-color: rgba(170,220,255,0.1)">
                    <img src="images/single_paralet_mini.jpg" class="card-img-top mt-3" alt="одноместный паралет">
                    <div class="card-body">
                        <h3 class="card-title">Одноместные паралёты</h3>
                        <p class="card-text"><br><br></p>
                        <a href="single-track.php" class="btn btn-primary">Смотреть</a>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-6" style="background-color: rgba(170,220,255,0.1)">
                    <img src="images/double_paralet_mini.jpg" class="card-img-top mt-3" alt="двухместный паралет">
                    <div class="card-body">
                        <h3 class="card-title">Двухместные паралёты</h3>
                        <p class="card-text"><br><br></p>
                        <a href="double-track.php" class="btn btn-primary">Смотреть</a>
                    </div>
                </div>
            </div>
        </main>

        <?php
        require_once "template/aside.php"
        ?>
    </div>
</div>

<?php
require_once "template/footer.php";