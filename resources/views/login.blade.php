<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Recipe Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/YOUR-FONT-AWESOME-CODE.js" crossorigin="anonymous"></script>
    <style>
        /* Fullscreen background */
        body {
            background: url('{{ asset("imgs/recipe-bg.jpg") }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-container {
            background: rgba(0, 0, 0, 0.7); /* Dark overlay */
            padding: 30px;
            border-radius: 10px;
            color: white;
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .form-control {
            background: transparent;
            border: 1px solid #ffffff;
            color: white;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .btn-login {
            background: #ff9800;
            border: none;
        }

        .btn-login:hover {
            background: #e68900;
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 20px;
            transition: 0.3s;
        }

        .social-icons a:hover {
            color: #ff9800;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2 class="fw-bold">Recipe Finder</h2>
        <p class="mb-4">Find, Cook & Enjoy Delicious Recipes!</p>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-login w-100">Login</button>
        </form>

        <!-- Display error message if any -->
        @if (session('error'))
            <div class="alert alert-danger mt-2">
                {{ session('error') }}
            </div>
        @endif

        <p class="mt-3">
            <a href="#" class="text-white">Forgot Password?</a>
        </p>

        <div class="social-icons mt-3">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
        </div>
    </div>

</body>
</html>
