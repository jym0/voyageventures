<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoyageVenture</title>

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
<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/index.css">

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
            <p class="blockqoute"> &nbsp; &nbsp; &nbsp;Ready to embark on your next journey? Use our convenient booking form to reserve your spot on one of our exciting travel packages or inquire about a customized itinerary.</p>
            <form action="book-form.php" method="post" class="bg-light p-3">
                <div class="row mb-3 g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Full Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                </div>

                <div class="row mb-3 g-3">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter your number">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Destination:</label>
                        <select class="form-select" aria-label="Default select example">
                        <option selected>Place you want to visit</option>
                        <option value="Himalayan Adventure">Himalayan Adventure</option>
                        <option value="Mystical Morocco">Mystical Morocco</option>
                        <option value="Greek Island Getaway">Costa Rica Eco-Explorer</option>
                        <option value="Greek Island Getaway">Cultural Splendors of Japan</option>
                        <option value="Greek Island Getaway">Italian Romance</option>
                        <option value="Greek Island Getaway">Bali Bliss</option>
                        <option value="Greek Island Getaway">African Safari Adventure</option>
                        <option value="Greek Island Getaway">Northern Lights Expedition</option>
                        <option value="Greek Island Getaway">Inca Trail Trek</option>
                        <option value="Greek Island Getaway">Cruise the Mediterranean</option>
                        <option value="Greek Island Getaway">New York City Explorer</option>
                        </select>
                        
                    </div>
                </div>

                <div class="row mb-3 g-3">
                    <div class="col-md-6">
                        <label for="date" class="form-label">Departure date:</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="col-md-6">
                        <label for="travellers" class="form-label">Number of Travellers:</label>
                        <input type="number" class="form-control" id="travellers" placeholder="Enter of number of travellers">
                    </div>
                </div>

                <div class="row mb-3 g-3">
                    <div class="col-md-6">
                        <label for="message" class="form-label">Additional Message (Optional):</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Leave a message"></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="text-capitalize btn btn-warning">submit booking request</button>
                </div>
            </form>
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