<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Register Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#4361ee" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />

    <link rel="preload" href="../css/adminlte.css" as="style" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/adminlte.css" />

    <style>
      :root {
        --primary-color: #4361ee;
        --primary-hover: #3f37c9;
        --bg-page: #f4f6f9;
      }

      body.register-page {
        background-color: var(--bg-page) !important;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .register-box {
        width: 360px;
        margin: 20px auto;
      }

      .card-custom-theme {
        border-top: 3px solid var(--primary-color) !important;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
        border: none;
      }

      .register-logo-link {
        color: #212529 !important;
        text-decoration: none;
      }

      .register-logo-link:hover {
        color: var(--primary-color) !important;
      }

      .btn-custom-primary {
        background-color: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
        color: #fff !important;
        transition: 0.2s ease;
      }

      .btn-custom-primary:hover {
        background-color: var(--primary-hover) !important;
        border-color: var(--primary-hover) !important;
      }

      .btn-custom-facebook {
        background-color: #3b5998 !important;
        border-color: #3b5998 !important;
        color: #fff !important;
      }

      .btn-custom-facebook:hover {
        background-color: #2d4373 !important;
        border-color: #2d4373 !important;
      }

      .btn-custom-google {
        background-color: #ea4335 !important;
        border-color: #ea4335 !important;
        color: #fff !important;
      }

      .btn-custom-google:hover {
        background-color: #c1351d !important;
        border-color: #c1351d !important;
      }

      .link-custom {
        color: var(--primary-color) !important;
        text-decoration: none;
      }

      .link-custom:hover {
        color: var(--primary-hover) !important;
        text-decoration: underline !important;
      }
    </style>
  </head>

  <body class="register-page bg-body-secondary">
    <div class="register-box">

      <div class="register-logo text-center mb-3">
        <a class="register-logo-link" href="#">
          <h1 class="mb-0"><b style="color: var(--primary-color);">Admin</b>LTE</h1>
        </a>
      </div>

      <div class="card card-custom-theme">
        <div class="card-body register-card-body">

          <p class="text-center text-muted mb-4">
            Register a new membership
          </p>

          <form action="{{ route('register') }}" method="post">
            @csrf

            <!-- NAME -->
            <div class="input-group mb-3">
              <div class="form-floating">
                <input id="name" name="name" type="text" class="form-control" placeholder="Full Name" />
                <label for="name">Full Name</label>
              </div>
              <div class="input-group-text">
                <i class="bi bi-person"></i>
              </div>
            </div>
            @error('name')
              <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- EMAIL -->
            <div class="input-group mb-3">
              <div class="form-floating">
                <input id="email" name="email" type="email" class="form-control" placeholder="Email" />
                <label for="email">Email</label>
              </div>
              <div class="input-group-text">
                <i class="bi bi-envelope"></i>
              </div>
            </div>
            @error('email')
              <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- PASSWORD -->
            <div class="input-group mb-3">
              <div class="form-floating">
                <input id="password" name="password" type="password" class="form-control" placeholder="Password" />
                <label for="password">Password</label>
              </div>
              <div class="input-group-text">
                <i class="bi bi-lock-fill"></i>
              </div>
            </div>
            @error('password')
              <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- CONFIRM PASSWORD -->
            <div class="input-group mb-3">
              <div class="form-floating">
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" />
                <label for="password_confirmation">Confirm Password</label>
              </div>
              <div class="input-group-text">
                <i class="bi bi-lock-fill"></i>
              </div>
            </div>

            <!-- TERMS + BUTTON -->
            <div class="row align-items-center mb-3">
              <div class="col-8">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms" />
                  <label class="form-check-label small" for="terms">
                    I agree to the <a href="#" class="link-custom">terms</a>
                  </label>
                </div>
              </div>

              <div class="col-4">
                <div class="d-grid">
                  <button type="submit" class="btn btn-custom-primary">
                    Sign Up
                  </button>
                </div>
              </div>
            </div>

          </form>

          <!-- SOCIAL -->
          <div class="text-center mb-3">
            <p class="text-muted small">- OR -</p>

            <div class="d-grid gap-2">
              <a href="#" class="btn btn-custom-facebook btn-sm">
                <i class="bi bi-facebook me-2"></i> Register with Facebook
              </a>

              <a href="#" class="btn btn-custom-google btn-sm">
                <i class="bi bi-google me-2"></i> Register with Google
              </a>
            </div>
          </div>

          <hr>

          <p class="text-center small mb-0">
            <a href="login" class="link-custom">I already have a membership</a>
          </p>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>
    <script src="../js/adminlte.js"></script>
  </body>
</html>