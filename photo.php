<?php
require_once "template/header.php";
?>


    <div class="main container mt-5">
        <div class="row">
            <main class="col">
                <h3 class="text-center mb-3">Видео</h3>
                <div class="video row m-2">

                    <div class="col-sm-6">
                        <iframe  src="https://www.youtube.com/embed/h4W9RwKHLfM"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-6">
                        <iframe src="https://www.youtube.com/embed/KknxuoxOBCw" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <h3 class="text-center mt-5">Фото</h3>
                <div class="photo row">

                    <div class="col-sm-4">
                        <a href="images/skiing.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                            <img src="images/skiing_mini.jpg" class="img-fluid rounded m-2" alt="паралет с лыжами">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/classic03.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                            <img src="images/classic03_mini.jpg" class="img-fluid rounded m-2" alt="паралет классик">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/classic04.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                            <img src="images/classic04_mini.jpg" class="img-fluid rounded m-2" alt="паралет классик">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/jambo.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                            <img src="images/jambo.jpg" class="img-fluid rounded m-2" alt="параплан джамбо">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/trike-2-color.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                            <img src="images/trike-2-color_mini.jpg" class="img-fluid rounded m-2" alt="параплан трайк-2 триколор">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/training.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                            <img src="images/training.jpg" class="img-fluid rounded m-2" alt="двухместный паралет селфи">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/double_paralet.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                            <img src="images/double_paralet_mini.jpg" class="img-fluid rounded m-2" alt="двухместный паралет селфи">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/trike-2.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                            <img src="images/trike-2_mini.jpg" class="img-fluid rounded m-2" alt="параплан трайк-2">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/patriot02.jpg" target="_blank" title="посмотреть увеличенную фотографию">
                            <img src="images/patriot02_mini.jpg" class="img-fluid rounded m-2" alt="паралет селфи">
                        </a>
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