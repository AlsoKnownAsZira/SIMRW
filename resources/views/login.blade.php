<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }

        .error-message {
            color: red;
            font-size: 14px;
            font-style: italic;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form id="login-form" method="post" action="{{ route('login.auth') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <small id="passwordError" class="error-message hidden"></small>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    document.getElementById("login-form").addEventListener("submit", function (event) {
        let pwd = document.getElementById("password").value;
        let passwordError = document.getElementById("passwordError");
        let valid = true;

        passwordError.classList.add("hidden");

        if (!/[0-9]/.test(pwd)) {
            passwordError.textContent = "Password harus memiliki setidaknya 1 angka.";
            passwordError.classList.remove("hidden");
            valid = false;
        }
        if (pwd.length < 8) {
            passwordError.textContent = "Password minimal 8 karakter.";
            passwordError.classList.remove("hidden");
            valid = false;
        }
        if (!valid) {
            event.preventDefault();
        }
    });
</script>
</body>
</html>
