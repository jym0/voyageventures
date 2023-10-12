<?php
session_start();
if (isset($_SESSION["booking_success"]) && $_SESSION["booking_success"]) {

    echo '<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Booking Successful</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Your booking has been successfully processed.</p>
                </div>
            </div>
        </div>
    </div>';
echo '<script>var bookingSuccess = true;</script>';
    $_SESSION["booking_success"] = false;
}
?>



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



</head>

<body>

    <?php
    include "header.php";
    ?>

    <!-- about -->

    <section class="p-5">
        <div class="container text-center">
            <h2>Book Now</h2>
        </div>

        <div>
            <h1 class="text-center">Book Your Adventure</h1>
            <p class="blockqoute"> &nbsp; &nbsp; &nbsp;Ready to embark on your next journey? Use our convenient booking
                form to reserve your spot on one of our exciting travel packages or inquire about a customized
                itinerary.</p>
            <form action="book-form.php" method="post" class="bg-light p-3">
                <div class="row mb-3 g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Full Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                            required>
                    </div>
                </div>

                <div class="row mb-3 g-3">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="number" class="form-control" id="phone" name="phone"
                            placeholder="Enter your number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="destination" class="form-label">Destination:</label>
                        <select class="form-select" aria-label="Default select example" name="destination" required>
                            <option selected>Place you want to visit</option>
                            <option value="Himalayan Adventure">Himalayan Adventure</option>
                            <option value="Mystical Morocco">Mystical Morocco</option>
                            <option value="Greek Island Getaway">Greek Island Getaway</option>
                            <option value="Costa Rica Eco-Explorer">Costa Rica Eco-Explorer</option>
                            <option value="Cultural Splendors of Japan">Cultural Splendors of Japan</option>
                            <option value="Italian Romance">Italian Romance</option>
                            <option value="Bali Bliss">Bali Bliss</option>
                            <option value="African Safari Adventure">African Safari Adventure</option>
                            <option value="Northern Lights Expedition">Northern Lights Expedition</option>
                            <option value="Inca Trail Trek">Inca Trail Trek</option>
                            <option value="Cruise the Mediterranea">Cruise the Mediterranean</option>
                            <option value="New York City Explorer">New York City Explorer</option>
                        </select>

                    </div>
                </div>

                <div class="row mb-3 g-3">
                    <div class="col-md-6">
                        <label for="date" class="form-label">Departure date:</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="col-md-6">
                        <label for="travellers" class="form-label">Number of Travellers:</label>
                        <input type="number" class="form-control" id="travellers"
                            placeholder="Enter number of travellers" name="travellers" required>

                    </div>
                </div>

                <div class=" row mb-3 g-3">
                    <div class="col-md-6">
                        <label for="message" class="form-label">Additional Message (Optional):</label>
                        <textarea class="form-control" id="message" name="message" rows="5"
                            placeholder="Leave a message"></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="text-capitalize btn btn-warning" name="submit_book">submit booking
                        request</button>
                </div>
            </form>
        </div>
    </section>


    <div class="modal fade succes_modal" id="successModal" tabindex="-1" role="dialog"
        aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2>Booking Successful</h2>
                <p>Your booking has been confirmed. Thank you!</p>
            </div>
        </div>
    </div>
    </div>


    <?php
    include "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="script/index.js"></script>

    <script>
    $(document).ready(function() {
        if (typeof bookingSuccess !== 'undefined' && bookingSuccess) {
            $("#successModal").modal("show");
        }
    });
    </script>

</body>

</html>