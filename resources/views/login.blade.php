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
        .gradient-custom {
    /* fallback for old browsers */
    background: #833ab4;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(131, 58, 180, 1), rgba(253, 29, 29, 1), rgba(252, 176, 69, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(131, 58, 180, 1), rgba(253, 29, 29, 1), rgba(252, 176, 69, 1));
}
    </style>
</head>
<body>
<section class="vh-200 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Masuk</h2>
              <p class="text-white-50 mb-5">Silahkan Masukkan nama pengguna dan kata sandi anda</p>

              <form id="login-form" method="post" action="{{ route('login.auth') }}">
                @csrf

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <label class="form-label" for="username">Nama Pengguna</label>

                    <input type="text" id="username" name="username" class="form-control form-control-lg" required>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <label class="form-label" for="password">Kata Sandi </label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                  <small id="passwordError" class="error-message hidden"></small>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-blue-50" href="#!">Lupa password?</a></p>

                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Masuk</button>
              </form>
            </div>

            <div>
              <p class="mb-0">Belum Punya Akun? <a href="#!" class="text-blue-50 fw-bold">Daftar</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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