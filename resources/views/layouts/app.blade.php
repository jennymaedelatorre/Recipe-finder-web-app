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
    <nav class="navbar navbar-expand-lg bg-white shadow py-3">
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
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recipes">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/team">Team</a>
                    </li>
                </ul>


                <a href="/login" class="btn btn-brand">Login</a>
            </div>
        </div>
    </nav>


    <!-- Carousel -->
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

    <!-- <div class="carousel-item">
    <img src="{{ asset('imgs/b3.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div> -->






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