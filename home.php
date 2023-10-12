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

    <link rel="stylesheet" href="style/index.css">

<body>

    <?php
    include "header.php";
    ?>

    <!-- landing -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner img-slider">
            <div class="carousel-item active car_div">
                <img src="public/home-img1.jpg" class="d-block" alt="Lake">
                <div class="carousel-caption">
                    <h5>Explore. Experience. Embrace. Enjoy.</h5>
                    <p class="text-uppercase">travel around the world</p>
                </div>
            </div>
            <div class="carousel-item car_div">
                <img src="public/home-img2.avif" class="d-block" alt="Beach">
                <div class="carousel-caption">
                    <h5>Explore. Experience. Embrace. Enjoy.</h5>
                    <p class="text-uppercase">make your tour worthwhile</p>
                </div>
            </div>
            <div class="carousel-item car_div">
                <img src="public/home-img3.avif" class="d-block" alt="Mountains">
                <div class="carousel-caption">
                    <h5>Explore. Experience. Embrace. Enjoy.</h5>
                    <p class="text-uppercase">discover the new places</p>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-dark p-4">
        <p class="container text-white fs-6">&#8213; Are you ready to explore the world's wonders, immerse
            yourself
            in new
            cultures,
            and create
            unforgettable
            memories? At <cite>Voyage Ventures</cite>, we're your passport to extraordinary adventures.</p>
    </section>

    <!-- about -->
    <section class="bg-light">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <img class="img-fluid about-img1" src="public/about-img1.avif" alt="adventure guy">
                </div>
                <div class="col-md-5 align-center mt-4">
                    <p class="lead">About Us</p>
                    <p>&nbsp; &nbsp; At Voyage Ventures, we believe that travel is not just about visiting new places;
                        it's about
                        creating
                        unforgettable experiences that leave a lasting impact. We are a passionate team of
                        globetrotters,
                        adventure seekers, and cultural enthusiasts who share a deep love for exploration and a
                        commitment
                        to making your travel dreams come true.</p>
                    <a href="about.php" class="btn btn-warning">Read More</a>
                </div>
            </div>
        </div>
    </section>


    <!-- package -->
    <section class="my-5">
        <div class="container text-center">
            <h1>Our Packages</h1>
            <div class="row g-4">
                <div class=" col-lg-4 package_col">
                    <div class="card">
                        <div>
                            <img src="public/package-img1.avif" class="card-img-top" alt="..." height="300px"
                                style="object-fit:cover; object-position:center;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Himalayan Adventure</h5>
                            <p class="card-text align-item-center">
                                <li class="text-start">Destination: Nepal</li>
                                <li class="text-start">Highlights: Trek to Everest Base Camp, Explore Kathmandu,
                                    Experience Sherpa Culture
                                </li>
                                <li class="text-start">Duration: 14 Days</li>
                            </p>
                            <a href="#" class="btn btn-warning">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 package_col">
                    <div class="card">
                        <div>
                            <img src="public/package-img2.avif" class="card-img-top" alt="..." height="300px"
                                style="object-fit:cover; object-position:center;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mystical Morocco</h5>
                            <p class="card-text align-item-center">
                                <li class="text-start">Destination: Morocco</li>
                                <li class="text-start">Highlights: Marrakech, Sahara Desert Camel Trek, Chefchaouen
                                </li>
                                <li class="text-start">Duration: 10 Days</li>
                            </p>
                            <a href="#" class="btn btn-warning">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-4 package_col">
                    <div class="card">
                        <div>
                            <img src="public/package-img3.avif" class="card-img-top" alt="..." height="300px"
                                style="object-fit:cover; object-position:center;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Greek Island Getaway</h5>
                            <p class="card-text align-item-center">
                                <li class="text-start">Destination: Greece</li>
                                <li class="text-start">Highlights: Santorini, Mykonos, Athens, Beaches, Sunsets
                                </li>
                                <li class="text-start">Duration: 8 Days</li>
                            </p>
                            <a href="#" class="btn btn-warning">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>

            <button class="btn btn-dark mt-3">Load More</button>


        </div>
    </section>



    <!-- offer -->
    <section class="bg-warning-subtle p-5 mt-5">
        <div class="container">
            <h3 class="text-center mb-4">Special Offer</h3>
            <h4>Discover Exclusive Deals and Discount <i class="bi bi-tags-fill"></i> </h4>
            <p>&nbsp; &nbsp; At Voyage Ventures, we believe in making your travel dreams more accessible.
                Explore
                our
                latest
                special offers and grab the opportunity to embark on your next adventure at an incredible value.
            </p>

            <div class="row text-center g-4">
                <div class="col-lg-4">
                    <h5 class="text-capitalize">limited-time offers</h5>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button text-capitalize collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    early bird savings<i class="bi bi-tags-fill ms-2"></i>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <li>Book your adventure in advance and enjoy up to 20% off on select
                                        packages.</li>
                                    <li>Valid for bookings made 3 months ahead.</li>
                                    <button class="btn btn-warning mt-3">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-capitalize" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    family fun discount<i class="bi bi-tags-fill ms-2"></i>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <li>Families of four or more can save 15% on group tours to family-friendly
                                        destinations.</li>
                                    <li>Children under 12 travel at half price.</li>
                                    <button class="btn btn-warning mt-3">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-capitalize" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    honeymoon escapes<i class="bi bi-tags-fill ms-2"></i>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <li>Newlyweds receive a complimentary room upgrade and romantic dinner on
                                        select honeymoon packages.</li>
                                    <button class="btn btn-warning mt-3">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-capitalize" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    solo traveler<i class="bi bi-tags-fill ms-2"></i>
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <li>Solo travelers can enjoy a waived single supplement fee on group tours
                                        and tailor-made itineraries.</li>
                                    <button class="btn btn-warning mt-3">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5 class="text-capitalize">seasonal promotion</h5>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button text-capitalize collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    summer splash<i class="bi bi-tags-fill ms-2"></i>
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <li>Cool off with summer savings! Enjoy discounted rates on beach getaways
                                        and water adventure packages.</li>
                                    <button class="btn btn-warning mt-3">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-capitalize" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    winter wonderland<i class="bi bi-tags-fill ms-2"></i>
                                </button>
                            </h2>
                            <div id="flush-collapsesix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <li>Embrace the winter magic with reduced prices on snow-capped adventures
                                        and cozy cabin stays.</li>
                                    <button class="btn btn-warning mt-3">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-capitalize" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseseven"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    festival frenzy<i class="bi bi-tags-fill ms-2"></i>
                                </button>
                            </h2>
                            <div id="flush-collapseseven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <li>Celebrate the holidays in style with exclusive offers on Christmas and
                                        New Year's Eve packages.</li>
                                    <button class="btn btn-warning mt-3">Book Now</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <h5 class="text-capitalize">refer a friend</h5>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button text-capitalize collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseeight"
                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                    refer and earn <i class="bi bi-tags-fill ms-2"></i>
                                </button>
                            </h2>
                            <div id="flush-collapseeight" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <li>Refer a friend to Voyage Ventures, and both you and your friend receive
                                        a special discount on your next booking.</li>
                                    <button class="btn btn-warning mt-3">Book Now</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="mt-5">
                <div class="d-md-flex justify-content-between align-items-center mb-3 border rounded border-dark p-3">
                    <h4 class="mb-3 mb-md-0">Stay Connected</h4>
                    <div class="input-group news-input">
                        <input type="text" class="form-control" placeholder="Enter email">
                        <button class="btn btn-dark" type="button">Subscribe</button>
                    </div>
                </div>
                <li>Subscribe to our newsletter and receive exclusive offers, travel tips, and destination
                    insights directly in your inbox.</li>
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
</body>

</html>