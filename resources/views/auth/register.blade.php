<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Recipe Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .background-blur {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset("imgs/b5.jpg") }}') no-repeat center center/cover;
            filter: blur(3px) brightness(60%);
            z-index: -1;
        }

        .login-container {
            background: rgba(2, 15, 32, 0.9);
            padding: 30px;
            border-radius: 10px;
            color: white;
            text-align: center;
            width: 100%;
            max-width: 450px;
            z-index: 1;
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

        .left-column {
            background: url('{{ asset("imgs/recipe-bg.jpg") }}') no-repeat center center/cover;
            filter: blur(3px) brightness(70%);
            height: 100vh;
        }

        .right-column {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .column-container {
            display: flex;
            width: 100%;
        }

        .column-container .left-column {
            flex: 1;
            position: relative;
        }

        .column-container .right-column {
            flex: 1;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-row .col-md-6 {
            flex: 1;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="background-blur"></div>
    <div class="column-container">
        <div class="right-column">
            <div class="login-container">
                <h2 class="fw-bold">Recipe Finder</h2>
                <p class="mb-4">Create your account to start exploring delicious recipes!</p>

                <!-- Registration Form -->
                <form method="POST" action="{{ route('register.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-login w-100 text-white">Register</button>
                </form>


                <span>Already have an account? <a href="{{ route('login') }}" style="color: #e68900;">Login here</a></span>

                <p class="mt-3">
                    <a href="#" class="text-white" style="text-decoration: none;">Forgot Password?</a>
                </p>

                <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>