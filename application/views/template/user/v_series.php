<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 18rem;
        }
    </style>
</head>
<script type="text/javascript">
    var carouselWidth = $('.carousel-inner')[0].scrollWidth;
    var cardWidth = $('.carousel-item').width();

    var scrollPosition = 0;

    $('.carousel-control-next').on('click', function() {
        if (scrollPosition < (carouselWidth - (cardWidth * 10))) {
            console.log('next');
            scrollPosition = scrollPosition + cardWidth;
            $('.carousel-inner').animate({
                scrollLeft: scrollPosition
            }, 600);
        }
    });

    $('.carousel-control-prev').on('click', function() {
        if (scrollPosition > 0) {
            console.log('prev');
            scrollPosition = scrollPosition - cardWidth;
            $('.carousel-inner').animate({
                scrollLeft: scrollPosition
            }, 600);
        }
    });
</script>
<div class="container my-5">
    <h2 class="text-center mb-4">Cards Carousel</h2>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Swiper Slides -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card 1">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">This is the description for card 1.</p>
                        <a href="#" class="btn btn-primary">
                            <span>View More</span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">This is the description for card 2.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">This is the description for card 3.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card 4">
                    <div class="card-body">
                        <h5 class="card-title">Card 4</h5>
                        <p class="card-text">This is the description for card 4.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card 4">
                    <div class="card-body">
                        <h5 class="card-title">Card 4</h5>
                        <p class="card-text">This is the description for card 4.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Navigation Buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Swiper Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<body>
    <div class="container">


        <hr class="border-3 border-primary">

        <h3>Nama Category-nya</h3>

        <hr class="border-3 border-primary">

        <div class="row">
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lotso</h5>

                        <a href="#" class="btn rounded-pill btn-primary float-end">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Category Name</h5>
                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lotso</h5>
                        <div class="container d-flex justify-content-center">
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lotso</h5>

                        <a href="#" class="btn rounded-pill btn-primary float-end">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Category Name</h5>
                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lotso</h5>
                        <div class="container d-flex justify-content-center">
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <hr class="border-3 border-primary">


        <h3>Nama Category-nya</h3>

        <hr class="border-3 border-primary">

        <div class="row">
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lotso</h5>

                        <a href="#" class="btn rounded-pill btn-primary float-end">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Category Name</h5>
                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lotso</h5>
                        <div class="container d-flex justify-content-center">
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/shinchan.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lotso</h5>

                        <a href="#" class="btn rounded-pill btn-primary float-end">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Category Name</h5>
                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/shinchan.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lotso</h5>
                        <div class="container d-flex justify-content-center">
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <hr class="border-3 border-primary">


        <h3>Nama Category-nya</h3>

        <hr class="border-3 border-primary">

        <div class="row">
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lotso</h5>

                        <a href="#" class="btn rounded-pill btn-primary float-end">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Category Name</h5>
                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lotso</h5>
                        <div class="container d-flex justify-content-center">
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lotso</h5>

                        <a href="#" class="btn rounded-pill btn-primary float-end">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Category Name</h5>
                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lotso</h5>
                        <div class="container d-flex justify-content-center">
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <hr class="border-3 border-primary">


        <h3>Nama Category-nya</h3>

        <hr class="border-3 border-primary">

        <div class="row">
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lotso</h5>

                        <a href="#" class="btn rounded-pill btn-primary float-end">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Category Name</h5>
                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lotso</h5>
                        <div class="container d-flex justify-content-center">
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lotso</h5>

                        <a href="#" class="btn rounded-pill btn-primary float-end">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Category Name</h5>
                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card border border-0" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/lotso.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lotso</h5>
                        <div class="container d-flex justify-content-center">
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 float-end" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 1, // Adjust number of cards displayed
                spaceBetween: 20, // Spacing between cards
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    576: {
                        slidesPerView: 2, // 2 cards on small screens
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3, // 3 cards on medium screens
                        spaceBetween: 30,
                    },
                    992: {
                        slidesPerView: 4, // 4 cards on large screens
                        spaceBetween: 40,
                    },
                },
            });
        </script>
</body>




</html>