<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoyageVentures</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&family=Varela+Round&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


    <link rel="stylesheet" href="style/index.css">

<body>

    <?php
    include "header.php";
    ?>

    <!-- about -->

    <div class="container p-5 text-center">
        <h2>About Us</h2>
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <img class="img-fluid about-img1" src="public/about-img1.avif" alt="adventure guy">
                </div>
                <div class="col-lg-5 align-center">
                    <h4 class="fw-bold">Welcome to Voyage Ventures</h4>
                    <h6>Embark on a Journey of Discovery</h6>
                    <p>&nbsp; &nbsp;Are you ready to explore the world's wonders, immerse yourself in new cultures,
                        and
                        create unforgettable memories? At Voyage Ventures, we're your passport to extraordinary
                        adventures.</p>

                    <h5 class="fw-bold">Why Choose Us?</h5>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="p-3 bg-success-subtle rounded">
                                <p class="fw-bold">Expertise</p>
                                <p class="text-start">With years of experience, our passionate team of travel
                                    enthusiasts knows the ins and
                                    outs of global travel.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 bg-success-subtle rounded ">
                                <p class="fw-bold">Customization</p>
                                <p class="text-start"> We specialize in crafting personalized itineraries, ensuring your
                                    trip is as unique as you are.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 bg-success-subtle rounded">
                                <p class="fw-bold">Safety</p>
                                <p class="text-start">Your safety and well-being are our top priorities.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 bg-success-subtle rounded">
                                <p class="fw-bold">Community</p>
                                <p class="text-start">Connect with fellow adventurers, share stories, and get inspired
                                    by others' experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="p-5 bg-light">
            <div class="container">
                <h2 class="text-center text-dark">Client Reviews</h2>
                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="2"
                    space-between="30" free-mode="true">
                    <swiper-slide>
                        <div class="card border border-dark">
                            <div class="card-body text-center text-dark">
                                <img src="https://randomuser.me/api/portraits/men/1.jpg" class="rounded-circle mb-3"
                                    alt="" width="100px" height="100px">
                                <h3 class="card-title mb-3">Mike Patel</h3>
                                <h5 class="text-warning">Traveler</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a volutpat dolor,
                                    at
                                    sagittis neque. Donec et sem vel nisi rhoncus dictum.
                                </p>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>

                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card border border-dark">
                            <div class="card-body text-center text-dark">
                                <img src="https://randomuser.me/api/portraits/women/2.jpg" class="rounded-circle mb-3"
                                    alt="" width="100px" height="100px">
                                <h3 class="card-title mb-3">Eve Turner</h3>
                                <h5 class="text-warning">Content Creator</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a volutpat dolor,
                                    at
                                    sagittis neque.
                                </p>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card border border-dark">
                            <div class="card-body text-center text-dark">
                                <img src="https://randomuser.me/api/portraits/men/6.jpg" class="rounded-circle mb-3"
                                    alt="" width="100px" height="100px">
                                <h3 class="card-title mb-3">Julian Smith</h3>
                                <h5 class="text-warning">Vlogger</h5>
                                <p class="card-text">
                                    Etiam congue sodales purus, a faucibus velit volutpat at. Morbi quam massa, pretium
                                    tristique quam at, luctus auctor augue. Duis placerat in ante non ornare. Praesent a
                                    urna vel turpis laoreet accumsan eu in quam.
                                </p>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card border border-dark">
                            <div class="card-body text-center text-dark">
                                <img src="https://randomuser.me/api/portraits/men/8.jpg" class="rounded-circle mb-3"
                                    alt="" width="100px" height="100px">
                                <h3 class="card-title mb-3">William Walter</h3>
                                <h5 class="text-warning">Social Media Artist</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Id aliquet risus feugiat in ante metus
                                    dictum at tempor.
                                </p>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card border border-dark">
                            <div class="card-body text-center text-dark">
                                <img src="https://randomuser.me/api/portraits/women/4.jpg" class="rounded-circle mb-3"
                                    alt="" width="100px" height="100px">
                                <h3 class="card-title mb-3">Jasmine Pillar</h3>
                                <h5 class="text-warning">Traveller</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque
                                    laoreet
                                    suspendisse interdum.
                                </p>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card border border-dark">
                            <div class="card-body text-center text-dark">
                                <img src="https://randomuser.me/api/portraits/men/14.jpg" class="rounded-circle mb-3"
                                    alt="" width="100px" height="100px">
                                <h3 class="card-title mb-3">Mark Kapil</h3>
                                <h5 class="text-warning">Traveller</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </p>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card border border-dark">
                            <div class="card-body text-center text-dark">
                                <img src="https://randomuser.me/api/portraits/women/14.jpg" class="rounded-circle mb-3"
                                    alt="" width="100px" height="100px">
                                <h3 class="card-title mb-3">Shane Kawit</h3>
                                <h5 class="text-warning">Vlogger</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in.
                                </p>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card border border-dark">
                            <div class="card-body text-center text-dark">
                                <img src="https://randomuser.me/api/portraits/women/22.jpg" class="rounded-circle mb-3"
                                    alt="" width="100px" height="100px">
                                <h3 class="card-title mb-3">Mina Will</h3>
                                <h5 class="text-warning">Traveller</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Neque ornare aenean euismod elementum
                                    nisi
                                    quis.
                                </p>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="card border border-dark">
                            <div class="card-body text-center text-dark">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle mb-3"
                                    alt="" width="100px" height="100px">
                                <h3 class="card-title mb-3">Sam Hanks</h3>
                                <h5 class="text-warning">Traveller</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Nunc faucibus a pellentesque sit amet.
                                    Amet
                                    consectetur adipiscing elit ut aliquam purus sit.
                                </p>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                                <i class="bi bi-star-fill text-warning mx-1"></i>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper-container>

            </div>
    </div>
    </div>
    </section>




    <?php
    include "footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="script/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

    <!-- <script>
    var mySwiper = new Swiper('.mySwiper', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
        },
    });
    </script> -->










</body>

</html>