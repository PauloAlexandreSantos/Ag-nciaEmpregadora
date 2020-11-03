<?php require('menu.php'); ?>
<!--- codigos -->
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="../assets/img/banner/1.jpg" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="../assets/img/banner/2.jpg" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Strong mask</h3>
                <p>Secondary text</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="../assets/img/banner/3.jpg" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <p>Third text</p>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<br>
<form class="form-inline md-form mr-auto mb-5 mt-5 col-12 justify-content-center ">
    <input class="form-control mr-sm-2 col-8" type="text" placeholder="Encontre seu emprego" aria-label="Search">
    <button class="btn blue-gradient btn-sm my-0" type="submit">Procurar</button>
</form>

<div class="col-md-12">
    <!-- Card -->
    <div class="row mb-5 justify-content-center">
        <div class="col-md-2">
            <div class="card">

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="../uploads/Emprego/1.png" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title">Título do emprego</h4>
                    <!-- Text -->
                    <p class="card-text">descrição do emprego...</p>
                    <!-- Button -->
                    <a href="singular_emprego.php" class="btn blue-gradient">ver mais</a>

                </div>

            </div>
            <!-- Card -->

        </div>
        <!-- fim do cartão -->



    </div>
</div>


<?php require('rodape.php'); ?>