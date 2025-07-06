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
}

/* Ensure other styles remain if they are affected */
.input100 {
    color: #1C1D33;
}

.login100-form-title {
    color: #1C1D33;
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
                        <span class="txt1">Login Assistance:</span>
                        <a class="txt2" href="#">Lupa password?</a>
                    </div>

                    <div class="text-center p-t-136">
                        <span class="txt2">Akses hanya untuk Administrator</span>
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
