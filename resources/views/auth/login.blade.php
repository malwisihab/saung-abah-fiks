<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('loginV2/images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" href="{{ asset('loginV2/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('loginV2/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('loginV2/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('loginV2/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('loginV2/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('loginV2/css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('loginV2/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    <style>

  /* custom.css */


html, body, .limiter, .container-login100 {
    background: none !important; /* Override any existing backgrounds */
    backdrop-filter: none !important;
    -webkit-backdrop-filter: none !important;
    filter: none !important; /* Ensure no blur is inherited by default */
}


body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('/images/cafeandrestaurant.jpg') no-repeat center center fixed;
    background-size: cover;
    filter: blur(4px);
    -webkit-filter: blur(0.5px);
    z-index: -1;
}

.wrap-login100 {
    background: rgba(255, 255, 255, 0.8);
    border-radius: 20px;
    padding: 50px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(0, 0, 0, 0.1);
    backdrop-filter: none !important;
    -webkit-backdrop-filter: none !important;
    position: relative;
}

/* Ensure other styles remain if they are affected */
.input100 {
    color: #1C1D33;
}

.login100-form-title {
    color: #1C1D33;
    /* Removed flex properties as home button is no longer here */
}

.login100-form-btn {
    background-color:rgb(200, 1, 1);
    color: #ffffff;
    transition: background-color 0.3s;
}

.login100-form-btn:hover {
    background-color: #15162b;
}

.txt1, .txt2 {
    color: #1C1D33;
}

.symbol-input100 i {
    color: #1C1D33;
}

/* New style for the home button at the bottom */
.home-button-bottom {
    display: inline-block;
    padding: 8px 15px; /* Adjust padding to make it look like a button */
    background-color: rgb(200, 1, 1); /* Button background color */
    color: #ffffff !important; /* Text color */
    border-radius: 5px; /* Rounded corners for the button */
    text-decoration: none;
    font-size: 14px; /* Adjust font size */
    transition: background-color 0.3s, color 0.3s;
    line-height: 1; /* Align text and icon vertically */
    margin-top: 20px; /* Add some space above the button */
}

.home-button-bottom i {
    margin-right: 5px; /* Space between icon and text */
}

.home-button-bottom:hover {
    background-color: #15162b; /* Hover background color */
    color: #ffffff;
}

/* Removed the home-button-header styles as it's no longer used */
/* .home-button-header {
    display: inline-block;
    padding: 8px 15px;
    background-color: rgb(200, 1, 1);
    color: #ffffff !important;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
    transition: background-color 0.3s, color 0.3s;
    position: absolute;
    top: 30px;
    right: 30px;
    z-index: 10;
    line-height: 1;
}

.home-button-header i {
    margin-right: 5px;
}

.home-button-header:hover {
    background-color: #15162b;
    color: #ffffff;
} */

    </style>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            @if (session('status'))
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'info',
                        title: 'Info',
                        text: '{{ session('status') }}',
                        confirmButtonColor: '#1C1D33'
                    });
                </script>
            @endif

            @if ($errors->any())
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Login',
                        text: '{{ $errors->first() }}',
                        confirmButtonColor: '#1C1D33'
                    });
                </script>
            @endif

            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('loginV2/images/img-01.png') }}" alt="IMG">
                </div>

                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title">
                        Login
                        </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email" required autofocus value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="#">Lupa password?</a>
                    </div>

                    <div class="text-center p-t-136">
                        <span class="txt2">Akses hanya untuk Admin</span>
                    </div>

                    <div class="text-center p-t-20">
                        <a class="home-button-bottom" href="{{ url('/') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>Kembali ke Beranda
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('loginV2/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('loginV2/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('loginV2/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('loginV2/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('loginV2/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        });

        const loginButton = document.querySelector('.login100-form-btn');
        const form = document.querySelector('.login100-form');

        form.addEventListener('submit', function() {
            loginButton.disabled = true;
            loginButton.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Loading...';
        });
    </script>
</body>
</html>