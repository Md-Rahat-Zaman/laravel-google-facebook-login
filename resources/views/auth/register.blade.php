```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Register | Inventory Management System</title>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">


    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
          rel="stylesheet">
    <link href="{{ asset('build/assets/css/element/register.css') }}"
            rel="stylesheet">


</head>


<body>


<div class="register-wrapper">


    <div class="register-card">


        <!-- =================================
             LEFT INFORMATION
        ================================= -->

        <div class="register-info">


            <div class="brand">

                <div class="brand-icon">

                    <i class="bi bi-boxes"></i>

                </div>


                <div>

                    <div class="brand-name">
                        Inventory System
                    </div>

                    <span class="brand-subtitle">
                        MANAGEMENT PLATFORM
                    </span>

                </div>

            </div>


            <h1>

                Start managing your
                <span>business.</span>

            </h1>


            <p>

                Create your account and get access to
                a complete inventory management system
                designed to keep your business organized.

            </p>


            <div class="feature-list">


                <div class="feature-item">

                    <i class="bi bi-box-seam"></i>

                    <span>
                        Manage products and categories
                    </span>

                </div>


                <div class="feature-item">

                    <i class="bi bi-boxes"></i>

                    <span>
                        Monitor your inventory and stock
                    </span>

                </div>


                <div class="feature-item">

                    <i class="bi bi-cart-check"></i>

                    <span>
                        Track sales and purchases
                    </span>

                </div>


                <div class="feature-item">

                    <i class="bi bi-bar-chart-line"></i>

                    <span>
                        Analyze your business performance
                    </span>

                </div>


            </div>


        </div>



        <!-- =================================
             REGISTER FORM
        ================================= -->

        <div class="register-form-area">


            <div class="register-form">


                <div class="form-heading">

                    <h2>
                        Create account
                    </h2>

                    <p>
                        Register to start using your inventory system.
                    </p>

                </div>



                <form method="POST"
                      action="{{ route('register') }}">

                    @csrf


                    <!-- Name -->

                    <div class="form-group">

                        <label for="name"
                               class="form-label">

                            Full Name

                        </label>


                        <div class="input-wrapper">

                            <input
                                id="name"
                                name="name"
                                type="text"

                                value="{{ old('name') }}"

                                required
                                autofocus
                                autocomplete="name"

                                class="form-input"

                                placeholder="Enter your full name"
                            >


                            <i class="bi bi-person input-icon"></i>

                        </div>


                        @if ($errors->get('name'))

                            <div class="error-message">

                                {{ $errors->first('name') }}

                            </div>

                        @endif

                    </div>



                    <!-- Email -->

                    <div class="form-group">

                        <label for="email"
                               class="form-label">

                            Email Address

                        </label>


                        <div class="input-wrapper">

                            <input
                                id="email"
                                name="email"
                                type="email"

                                value="{{ old('email') }}"

                                required

                                autocomplete="username"

                                class="form-input"

                                placeholder="Enter your email"
                            >


                            <i class="bi bi-envelope input-icon"></i>

                        </div>


                        @if ($errors->get('email'))

                            <div class="error-message">

                                {{ $errors->first('email') }}

                            </div>

                        @endif

                    </div>



                    <!-- Password -->

                    <div class="form-group">

                        <label for="password"
                               class="form-label">

                            Password

                        </label>


                        <div class="input-wrapper">

                            <input
                                id="password"
                                name="password"
                                type="password"

                                required

                                autocomplete="new-password"

                                class="form-input"

                                placeholder="Create a password"
                            >


                            <i class="bi bi-lock input-icon"></i>


                            <button
                                type="button"
                                class="password-toggle"
                                onclick="togglePassword('password', 'passwordIcon')">

                                <i class="bi bi-eye"
                                   id="passwordIcon"></i>

                            </button>

                        </div>


                        @if ($errors->get('password'))

                            <div class="error-message">

                                {{ $errors->first('password') }}

                            </div>

                        @endif

                    </div>



                    <!-- Confirm Password -->

                    <div class="form-group">

                        <label for="password_confirmation"
                               class="form-label">

                            Confirm Password

                        </label>


                        <div class="input-wrapper">

                            <input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"

                                required

                                autocomplete="new-password"

                                class="form-input"

                                placeholder="Confirm your password"
                            >


                            <i class="bi bi-shield-lock input-icon"></i>


                            <button
                                type="button"
                                class="password-toggle"
                                onclick="togglePassword('password_confirmation', 'confirmPasswordIcon')">

                                <i class="bi bi-eye"
                                   id="confirmPasswordIcon"></i>

                            </button>

                        </div>


                        @if ($errors->get('password_confirmation'))

                            <div class="error-message">

                                {{ $errors->first('password_confirmation') }}

                            </div>

                        @endif

                    </div>



                    <!-- Register -->

                    <button
                        type="submit"
                        class="register-btn">

                        <i class="bi bi-person-plus"></i>

                        Create Account

                    </button>


                </form>



                <!-- Login -->

                <div class="login-text">

                    Already have an account?

                    <a href="{{ route('login') }}">

                        Sign in

                    </a>

                </div>


            </div>

        </div>


    </div>

</div>



<!-- =================================
     PASSWORD SCRIPT
================================= -->

<script>

function togglePassword(inputId, iconId)
{
    const password =
        document.getElementById(inputId);

    const icon =
        document.getElementById(iconId);


    if (password.type === 'password') {

        password.type = 'text';

        icon.classList.remove('bi-eye');

        icon.classList.add('bi-eye-slash');

    } else {

        password.type = 'password';

        icon.classList.remove('bi-eye-slash');

        icon.classList.add('bi-eye');

    }
}

</script>


</body>

</html>
