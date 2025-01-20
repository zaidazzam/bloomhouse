<!doctype html>
<html lang="en">

<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aut.css') }}" />

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section font-weight-bold" style="font-size: 2.5rem; color: #2c3e50; letter-spacing: 2px;">
                        Admin Bloomhouse
                    </h2>
                </div>
                
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url('assets/images/banners/banner-bunga.jpg');">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="https://www.instagram.com/bloomhouse.florist/"
                                            class="social-icon d-flex align-items-center justify-content-center"
                                            target="_blank">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                        <a href="https://l.instagram.com/?u=https%3A%2F%2Fwa.me%2F6281316283880&e=AT2L05NGfyDciPTpWoH4Y6YmqAEOLPK1YqGnXp3K_l9cr2rLf76sX6D791rWaF_9mJTD7dVH6J_q3K2NfJ-VadFTpJbELYgoTDFQ45eRqiWHyKUQ"
                                            class="social-icon d-flex align-items-center justify-content-center"
                                            target="_blank">
                                            <span class="fa fa-whatsapp"></span>
                                        </a>
                                    </p>

                                </div>
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form id="loginForm" class="signin-form">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="username" required>
                                    <label class="form-control-placeholder text-black" for="username">Username</label>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" name="password"
                                        required>
                                    <label class="form-control-placeholder mt-2 mb-2" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="loginButton"
                                        class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                                <div class="form-group text-center mt-4">
                                    <a href="/" class="btn btn-dark text-white rounded px-4">Go to Homepage</a>
                                </div>
                                {{-- <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" name="remember" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div> --}}
                            </form>

                            {{-- <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('loginButton').addEventListener('click', function() {
            const form = document.getElementById('loginForm');
            const formData = new FormData(form);

            fetch('/login', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': formData.get('_token'),
                    },
                    body: formData,
                })
                .then(async (response) => {
                    const data = await response.json();
                    if (response.ok && data.success) {
                        window.location.href = data.redirect; // Redirect to dashboard
                    } else {
                        alert(data.message || 'Login failed. Please try again.');
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                    alert('An unexpected error occurred. Please try again.');
                });
        });
    </script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
