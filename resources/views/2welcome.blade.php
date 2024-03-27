<x-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <style>
            /* Add your custom styles here */
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark blue">
            <div class="container">
                <a class="navbar-brand" href="#">Tausi Trade</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#submit-bid">Submit Bid</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sign-in">Sign In</a>
                        </li>
                    </ul>
                </div>
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">

                    <h1>Karibu! Welcome to Tausi Trade </h1><br>

                    <h2>Introduction:</h2>
                    <p>
                        Asante sana for visiting Tausi Trade! Karibu sana to our vibrant online marketplace, where you
                        can
                        explore, bid, and connect with an array of unique items from across the region. Whether you're a
                        seasoned bidder or a first-time visitor, we're thrilled to have you join our community.
                    </p>


                    <h2>Explore:</h2>
                    <p> Dive into our diverse selection of products, ranging from handcrafted artworks to cutting-edge
                        electronics. With categories catering to every interest and need, you're sure to find something
                        that
                        captures your attention. Take your time to browse through our listings and discover hidden gems
                        waiting
                        to be unearthed.
                    </p>

                    <h2>Bid: </h2>
                    <p>Join the excitement of bidding on coveted items and securing fantastic deals. Our auction
                        platform
                        offers
                        a dynamic and transparent bidding process, ensuring fairness and integrity at every step.
                        Whether
                        you're
                        looking for a rare collectible or everyday essentials, our auctions provide thrilling
                        opportunities
                        to
                        snag your desired items at competitive prices.
                    </p>

                    <h2>Register:</h2>
                    <p> Ready to start bidding? Signing up is quick, easy, and free! Simply register an account to
                        unlock
                        full
                        access to all features of <b>Tausi Trade</b>. As a registered member, you can track your bids,
                        manage your
                        profile,
                        and receive personalized recommendations tailored to your preferences. Don't miss out on
                        exclusive
                        offers
                        and updates – register today and become part of our vibrant auction community!
                    </p>

                    <h2>Why Choose Tausi Trade?</h2>
                    <ul>
                        - Wide Selection: Explore a diverse range of products spanning various categories.
                        - Secure Transactions: Shop with confidence knowing that your transactions are safe and secure.
                        - Transparent Bidding: Enjoy a fair and transparent bidding process with clear guidelines.
                        - Community Engagement: Connect with fellow enthusiasts and sellers to share your passion for
                        unique
                        finds.
                        - Convenient Experience: Access our platform anytime, anywhere, for a seamless shopping
                        experience.
                    </ul>

                    <h2>Join Us Today!</h2>
                    <p> Experience the thrill of bidding, discover extraordinary treasures, and become part of our
                        growing
                        community
                        at Tausi Trade. Start your journey with us today – karibu sana!
                    </p>

                </div>

                <div class="col-md-6">
                    <!-- Image or other content -->
                </div>
            </div>
        </div>

        <div id="submit-bid" class="container mt-5">
            <h2>Submit Bid</h2>
            <p>Submit your bid for an auction item here.</p>
            <!-- Add form or content for submitting bids -->
        </div>

        <div id="register" class="container mt-5">
            <h2>Register</h2>
            <p>Register as a customer or agent to participate in auctions.</p>
            <!-- Add form or content for registration -->
        </div>

        <div id="sign-in" class="container mt-5">
            <h2>Sign In</h2>
            <p>Sign in as a customer, agent, or visitor.</p>
            <!-- Add form or content for sign-in -->
        </div>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>

    </html>
</x-layout>
