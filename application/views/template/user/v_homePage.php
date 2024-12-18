<!doctype html>
<html lang="en">

<body>



    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/banner/banner-homepage-1.png'); ?>" alt="">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/banner/banner-homepage-2.png') ?>" alt="">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/banner/banner-homepage-3.png') ?>" alt="">
                    <div class="container">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <div class="container">
                <h1 class="text-primary">BEST SALES!!!</h1>
            </div>
            <hr border-3 border-primary>
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?= base_url('assets/img/ShinchanDessertTime.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Shinchan : Dessert Time</h5>
                            <a href="<?= base_url('index.php/series'); ?>" class="btn btn-primary float-end">
                                <span> View</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?= base_url('assets/img/BunnyMagicSeries.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bunny Magic</h5>
                            <a href="<?= base_url('index.php/series'); ?>" class="btn btn-primary float-end">
                                <span> View</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 mb-5">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?= base_url('assets/img/DimooNoOneGonnaSleepTonight.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dimoo : Noone's Gonna Sleep Tonight</h5>
                            <a href="<?= base_url('index.php/series'); ?>" class="btn btn-primary float-end">
                                <span> View</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="border border-primary border-3 mb-5">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">DIMOO SERIES</h2>
                    <p class="lead">The DIMOO blind box series, like other collectible blind box collections, features various figurines that are randomly packed, making the unboxing experience a surprise. These collectible toys usually depict cartoonish characters with playful, whimsical features.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="<?= base_url('assets/img/reccomendations/recom1.jpg'); ?>" alt="">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-6 order-md-2 ms-5">
                    <h2 class="featurette-heading">PUCKY</h2>
                    <p class="lead">A Pucky Blind Box is a collectible series created by Pop Mart, featuring whimsical and artistic figures designed by the artist Pucky. Each blind box contains one randomly selected figurine from a themed collection, adding an element of surprise to the unboxing experience. Pucky’s designs often draw inspiration from dreamy, magical, and fairy-tale-like aesthetics, with adorable characters such as fairies, clowns, animals, or mythical creatures.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="<?= base_url('assets/img/reccomendations/recom2.jpg'); ?>" alt="">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">UPSET DUCK</h2>
                    <p class="lead">The "Upset Duck" Blind Box series features a collection of cute duck-themed plush toys, each with different outfits and accessories, such as scarves, hats, or hearts. The items come in a blind box format, where customers receive one random design out of a selection, which may include 6 regular designs and a rare secret figure</p>
                </div>
                <div class="col-md-5">
                    <img src="<?= base_url('assets/img/reccomendations/recom3.png'); ?>" alt="">

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

</body>

</html>