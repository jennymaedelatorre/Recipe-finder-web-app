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

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- 🔹 Navbar -->
    <nav class="navbar navbar-expand-lg shadow py-1 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="{{ asset('imgs/logo 1.png') }}" alt="Logo" height="50">
            </a>

            <!-- Navbar Toggle Button (For Mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item fw-bold">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="#recipes">Recipes</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="#team">Team</a>
                    </li>

                    <!-- User Account Icon and Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown" id="accountDropdownMenu">
                            <p id="userId">ID: {{ Auth::user()->id }}</p>
                            <p id="userName">Name: {{ Auth::user()->name }}</p>
                            <p id="userEmail">Email: {{ Auth::user()->email }}</p>

                            <a style="color:rgb(189, 63, 63); text-decoration:none" class="logout fw-bold" href="{{ route('logout') }}" id="logoutLink" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                            <!-- Hidden logout form -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <!-- Home/Carousel -->
    <section id="home" class="home">
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
                        <a href="#recipes" class="btn btn-brand">Explore Recipes</a>
                    </div>
                </div>

                <div class="carousel-item slide-bg slide-2">
                    <div class="carousel-content">
                        <h6>-- Welcome to Chef's Secret --</h6>
                        <h1>Cook Like a Pro</h1>
                        <a href="#recipes" class="btn btn-brand">Get Started</a>
                    </div>
                </div>

                <div class="carousel-item slide-bg slide-3">
                    <div class="carousel-content">
                        <h6>-- Welcome to Chef's Secret --</h6>
                        <h1>Discover New Flavors</h1>
                        <a href="#recipes" class="btn btn-brand">Try Now</a>
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
    </section>


    <!-- Services Section -->
    <section class="service-cont container-fluid" id="services">
        <div class="services container">
            <div class="service text-center mb-5">
                <h1 class="fw-bold text-white">Our Services</h1>
                <p class="text-white">Explore the amazing features we offer to enhance your cooking experience.</p>
            </div>
            <div class="row g-4">
                <!-- Search Recipes Card -->
                <div class="col-md-4">
                    <div class="card service-card shadow h-100 text-center p-3">
                        <img src="{{ asset('imgs/s8.png') }}" class="card-img-top w-50 mx-auto" alt="Search Recipes">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Search Recipes</h5>
                            <p class="card-text">Find recipes instantly from thousands of meals in the MealDB database.</p>
                        </div>
                    </div>
                </div>

                <!-- Ingredients List Card -->
                <div class="col-md-4">
                    <div class="card service-card shadow h-100 text-center p-3">
                        <img src="{{ asset('imgs/s9.png') }}" class="card-img-top w-50 mx-auto" alt="Ingredients">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">View Ingredients</h5>
                            <p class="card-text">Get detailed ingredient lists and nutritional info for each recipe.</p>
                        </div>
                    </div>
                </div>

                <!-- Meal Categories Card -->
                <div class="col-md-4">
                    <div class="card service-card shadow h-100 text-center p-3">
                        <img src="{{ asset('imgs/s12.png') }}" class="card-img-top w-50 mx-auto" alt="Meal Categories">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Meal Categories</h5>
                            <p class="card-text">Browse recipes by category, such as vegetarian, seafood, and more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- about Section -->
    <section id="about" class="about text-white">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start shadow">
                                <img class="img-fluid about-pic rounded w-100 zoomIn shadow" src="{{ asset('imgs/b7.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid about-pic rounded w-75 zoomIn shadow" style="margin-top: 38%" src="{{ asset('imgs/b10.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid about-pic rounded w-75 zoomIn shadow" src="{{ asset('imgs/b8.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid about-pic rounded w-100 zoomIn shadow" src="{{ asset('imgs/b6.jpg') }}" alt="">
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
    </section>



    <!-- Recipe Section -->
    <div class="container mt-4 content">
        @yield('content')
    </div>


    <!-- Team Section -->
    <section id="team" class="team-section py-5 text-white" style="margin-bottom: 50px;">
        <div class="container">
            <h2 class="text-center fw-bold mb=2">Meet Our Team</h2>
            <p class="text-center px-5 mb-5">
                Get to know the talented individuals behind our platform! Our team is dedicated to
                curating the best recipes, sharing expert food insights, and bringing you a seamless culinary experience.
            </p>

            <div class="team-slider">
                <div class="team-wrapper">
                    <div class="team-member">
                        <img src="{{ asset('imgs/t2.jpg') }}" class="team-img" alt="Reyhan Cris Florida">
                        <h5 class="mt-3">Reyhan Cris Florida</h5>
                        <p class="text-white">BSIT - III</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/reyhancrisflorida" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-outline-danger btn-sm"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="{{ asset('imgs/t1.jpg') }}" class="team-img" alt="Jenny Mae De La Torre">
                        <h5 class="mt-3">Jenny Mae De La Torre</h5>
                        <p class="text-white">BSIT - III</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/jennymae.quarteros" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-outline-danger btn-sm"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="{{ asset('imgs/t3.png') }}" class="team-img" alt="Emannuel Ampatin">
                        <h5 class="mt-3">Emannuel Ampatin</h5>
                        <p class="text-white">BSIT - III</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/emmanuel.ampatin.2024" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-outline-danger btn-sm"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="{{ asset('imgs/t4.png') }}" class="team-img" alt="Christine Pearl Aboc">
                        <h5 class="mt-3">Christine Pearl Aboc</h5>
                        <p class="text-white">BSIT - III</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/christinepearl.aboc.5" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-outline-danger btn-sm"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="{{ asset('imgs/t5.jpeg') }}" class="team-img" alt="Eisan Carlos Atamosa">
                        <h5 class="mt-3">Eisan Carlos Atamosa</h5>
                        <p class="text-white">BSIT - III</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/eisancarlos12" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-outline-danger btn-sm"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-member">
                        <img src="{{ asset('imgs/t6.jpg') }}" class="team-img" alt="Stanley James Apal">
                        <h5 class="mt-3">Stanley James Apal</h5>
                        <p class="text-white">BSIT - III</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/profile.php?id=100032255230798" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-outline-danger btn-sm"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="prev-btn">&#10094;</button>
            <button class="next-btn">&#10095;</button>
        </div>
    </section>


    <!-- footer section -->
    <footer class="footer text-white py-4">
        <div class="container-fluid text-center">

            <div class="mb-3">
                <img src="{{ asset('imgs/logo 1.png') }}" alt="Logo" width="120">
            </div>

            <p class="footer-description mb-3">
                Discover amazing recipes, curated for every taste. Join us and explore a world of flavors!
            </p>

            <div class="mb-3">
                <a href="#" class="btn btn-outline-light btn-sm me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-outline-light btn-sm me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-outline-light btn-sm me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-outline-light btn-sm me-3"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="btn btn-outline-light btn-sm me-3"><i class="fab fa-telegram-plane"></i></a>
            </div>
            <p class="mb-0">&copy; 2025 Chef's Secret. All Rights Reserved.</p>
        </div>
    </footer>





    @yield('scripts')


    <!-- for active navbar -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('section');

            // Add a listener for the scroll event
            window.addEventListener('scroll', function() {
                let currentSection = "";

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;


                    if (pageYOffset >= sectionTop - sectionHeight / 3 && pageYOffset < sectionTop + sectionHeight) {
                        currentSection = section.getAttribute('id');
                    }
                });

                // Remove 'active' class from all links and add it to the current section's link
                links.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').substring(1) === currentSection) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>


    <!-- for filter -->
    <script>
        function filterRecipes() {
            let categoryFilter = document.getElementById("categoryFilter").value;
            let areaFilter = document.getElementById("areaFilter").value;
            let cards = document.querySelectorAll(".recipe-card");

            cards.forEach(card => {
                let categoryMatch = (categoryFilter === "all" || card.classList.contains(categoryFilter));
                let areaMatch = (areaFilter === "all" || card.classList.contains(areaFilter));

                if (categoryMatch && areaMatch) {
                    card.classList.remove("hidden");
                } else {
                    card.classList.add("hidden");
                }
            });
        }
    </script>

    <!-- for team carousel -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.querySelector(".team-wrapper");
            const prevBtn = document.querySelector(".prev-btn");
            const nextBtn = document.querySelector(".next-btn");

            let slideIndex = 0;
            let visibleSlides = calculateVisibleSlides();
            const teamMembers = document.querySelectorAll(".team-member");

            function calculateVisibleSlides() {
                if (window.innerWidth <= 768) return 1; // Mobile
                if (window.innerWidth <= 1024) return 2; // Tablet
                return 3; // Desktop
            }

            function updateSlider() {
                visibleSlides = calculateVisibleSlides();
                const translateX = -slideIndex * (100 / visibleSlides);
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(${translateX}%)`;
            }

            nextBtn.addEventListener("click", () => {
                if (slideIndex < teamMembers.length - visibleSlides) {
                    slideIndex++;
                } else {
                    slideIndex = 0;
                }
                updateSlider();
            });

            prevBtn.addEventListener("click", () => {
                if (slideIndex > 0) {
                    slideIndex--;
                } else {
                    slideIndex = teamMembers.length - visibleSlides;
                }
                updateSlider();
            });

            // Auto-slide every 3 seconds
            setInterval(() => {
                if (slideIndex < teamMembers.length - visibleSlides) {
                    slideIndex++;
                } else {
                    slideIndex = 0;
                }
                updateSlider();
            }, 3000);

            // Adjust slides on window resize
            window.addEventListener("resize", () => {
                visibleSlides = calculateVisibleSlides();
                updateSlider();
            });
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>