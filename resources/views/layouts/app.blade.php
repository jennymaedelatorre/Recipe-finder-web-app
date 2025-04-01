<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Finder</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- 🔹 Navbar -->
    <nav class="navbar navbar-expand-lg shadow py-1">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('imgs/logo 1.png') }}" alt="Logo" height="50">
            </a>

            <!-- Navbar Toggle Button (For Mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#recipes">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                </ul>


                <a href="/login" class="btn btn-navbar">Login</a>
            </div>
        </div>
    </nav>


    <!-- Home/Carousel -->
    <div id="home" class="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Carousel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active slide-bg slide-1">
                    <div class="carousel-content">
                        <h6>-- Welcome to Chef's Secret --</h6>
                        <h1>Delicious Recipes Just <br> for You</h1>
                        <a href="#" class="btn btn-brand">Explore Recipes</a>
                    </div>
                </div>

                <div class="carousel-item slide-bg slide-2">
                    <div class="carousel-content">
                        <h6>-- Welcome to Chef's Secret --</h6>
                        <h1>Cook Like a Pro</h1>
                        <a href="#" class="btn btn-brand">Get Started</a>
                    </div>
                </div>

                <div class="carousel-item slide-bg slide-3">
                    <div class="carousel-content">
                        <h6>-- Welcome to Chef's Secret --</h6>
                        <h1>Discover New <br> Flavors</h1>
                        <a href="#" class="btn btn-brand">Try Now</a>
                    </div>
                </div>
            </div>

            <!-- Previous & Next Buttons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- Services Section -->
    <div id="services" class="container py-5 mb-5">
        <div class="services text-center mb-5">
            <h1 class="fw-bold">Our Services</h1>
            <p class="text-muted">Explore the amazing features we offer to enhance your cooking experience.</p>
        </div>
        <div class="row g-4">
            <!-- Search Recipes Card -->
            <div class="col-md-4">
                <div class="card service-card shadow h-100 text-center p-3">
                    <img src="{{ asset('imgs/s0.png') }}" class="card-img-top w-50 mx-auto" alt="Search Recipes">
                    <div class="card-body">
                        <h5 class="card-title">Search Recipes</h5>
                        <p class="card-text">Find recipes instantly from thousands of meals in the MealDB database.</p>
                    </div>
                </div>
            </div>

            <!-- Ingredients List Card -->
            <div class="col-md-4">
                <div class="card service-card shadow h-100 text-center p-3">
                    <img src="{{ asset('imgs/s1.png') }}" class="card-img-top w-50 mx-auto" alt="Ingredients">
                    <div class="card-body">
                        <h5 class="card-title">View Ingredients</h5>
                        <p class="card-text">Get detailed ingredient lists and nutritional info for each recipe.</p>
                    </div>
                </div>
            </div>

            <!-- Meal Categories Card -->
            <div class="col-md-4">
                <div class="card service-card shadow h-100 text-center p-3">
                    <img src="{{ asset('imgs/s3.png') }}" class="card-img-top w-50 mx-auto" alt="Meal Categories">
                    <div class="card-body">
                        <h5 class="card-title">Meal Categories</h5>
                        <p class="card-text">Browse recipes by category, such as vegetarian, seafood, and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- about Section -->
    <div id="about" class="about text-white">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 zoomIn" src="{{ asset('imgs/b7.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 zoomIn" style="margin-top: 38%" src="{{ asset('imgs/b10.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 zoomIn" src="{{ asset('imgs/b8.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100  zoomIn" src="{{ asset('imgs/b6.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text mb-2">
                            <h3 class="fw-bold text-center">About Us</h3>
                            <p class="text-white text-center">
                                Welcome to Chef's secret, your ultimate destination for discovering and creating delicious recipes with ease.
                                We bring together a vast collection of recipes, detailed ingredient insights, and categorized meals to help you find the perfect dish for any occasion.
                            </p>
                            <!-- <p class="text-center" style="color:#e68900">Start your culinary adventure today and make every meal special! -->
                            </p>
                        </div>
                        <div class="row g-4 mb-4">

                            <div class="mission text-center">
                                <h3 class="mission fw-bold">Our Mission</h3>
                                <p class="">
                                    We believe cooking should be simple, fun, and accessible to everyone. Our platform provides thousands of curated recipes, ingredient details, and meal categories to help you create the perfect dish.
                                </p>
                            </div>

                            <h3 class="fw-bold mt-4">Why Choose Us?</h3>
                            <ul class="list-unstyled">
                                <li>✔️ Easy-to-follow recipes</li>
                                <li>✔️ Comprehensive ingredient details</li>
                                <li>✔️ Wide variety of meal categories</li>
                                <li>✔️ A passionate community of food lovers</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- 🔹 Main Content -->
    <!-- <div class="container mt-4 content">
        @yield('content')
    </div> -->

    <!-- 🔹 Footer -->
    <footer class="footer">
        <p>&copy; 2025 Recipe Finder | Built with ❤️ using Laravel</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>