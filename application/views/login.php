<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Mahasiswa</title>
    <link rel="stylesheet" href="assets/compiled/css/app.css" />
    <link rel="stylesheet" href="assets/compiled/css/auth.css" />
    <script src="js/scripts.js" defer></script>
  </head>
  <body>
    <div id="auth">
      <div class="row h-100">
        <div class="col-lg-5 col-12">
          <div id="auth-left">
            <h1 class="auth-title">Login Mahasiswa</h1>
            <p class="auth-subtitle mb-5">Masuk dengan NIM mahasiswa Anda.</p>
            <form id="login-form">
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="text"
                  id="nim"
                  name="nim"
                  class="form-control form-control-xl"
                  placeholder="NIM"
                  required
                />
                <div class="form-control-icon">
                  <i class="bi bi-person"></i>
                </div>
              </div>
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="password"
                  id="password"
                  name="password"
                  class="form-control form-control-xl"
                  placeholder="Kata Sandi"
                  required
                />
                <div class="form-control-icon">
                  <i class="bi bi-shield-lock"></i>
                </div>
              </div>
              <button
                type="submit"
                class="btn btn-primary btn-block btn-lg shadow-lg mt-5"
              >
                Masuk
              </button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
              <p>
                <a class="font-bold" href="auth-forgot-password.html"
                  >Lupa kata sandi?</a
                >
              </p>
            </div>
          </div>
        </div>
        <!-- Auth Right(Bisa di ganti dengan logo/foto) -->
        <div class="col-lg-7 d-none d-lg-block">
          <div id="auth-right"></div>
        </div>
      </div>
    </div>
    <script src="js/initTheme.js"></script>
    <script src="js/perfect-scrollbar.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
