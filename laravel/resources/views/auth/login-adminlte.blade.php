<!doctype html>
<html lang="en">
  <head>
    <script>(function(w,i,g){w[g]=w[g]||[];if(typeof w[g].push=='function')w[g].push(i)})(window,'GTM-WHH7CJ83','google_tags_first_party');</script>
    <script>(function(w,d,s,l){w[l]=w[l]||[];(function(){w[l].push(arguments);})('set', 'developer_id.dYzg1YT', true); w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s);j.async=true;j.src='/wzrt/'; f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer');</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#4361ee" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />

    <meta name="title" content="AdminLTE 4 | Login Page v2" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard." />
    
    <link rel="preload" href="../css/adminlte.css" as="style" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous" media="print" onload="this.media = 'all'" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/adminlte.css" />

    <style>
      :root {
        --primary-color: #4361ee;
        --primary-hover: #3f37c9;
        --bg-page: #f4f6f9;
      }
      .btn-custom-primary {
        background-color: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
        color: #ffffff !important;
      }
      .btn-custom-primary:hover {
        background-color: var(--primary-hover) !important;
        border-color: var(--primary-hover) !important;
      }
      .card-custom-outline {
        border-top: 3px solid var(--primary-color) !important;
      }
      .login-logo-link {
        color: #212529 !important;
        text-decoration: none;
      }
      .login-logo-link:hover {
        color: var(--primary-color) !important;
      }
      .text-custom-link {
        color: var(--primary-color) !important;
        text-decoration: none;
      }
      .text-custom-link:hover {
        text-decoration: underline;
      }
      .btn-social-fb {
        background-color: #3b5998 !important;
        color: white !important;
        border: none;
      }
      .btn-social-google {
        background-color: #ea4335 !important;
        color: white !important;
        border: none;
      }
    </style>
  </head>

  <body class="login-page bg-body-secondary">
    <div class="login-box">
      <div class="card card-outline card-custom-outline">
        <div class="card-header text-center">
          <a href="#" class="login-logo-link">
            <h1 class="mb-0"><b style="color: var(--primary-color);">Admin</b>LTE</h1>
          </a>
        </div>
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form action="{{ route('login') }}" method="post">
            <div class="input-group mb-3">
              <div class="form-floating">
                <input id="loginEmail" type="email" name="email" class="form-control" value="" placeholder="name@example.com" />
                <label for="loginEmail">Email</label>
              </div>
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>
            @error('email')
                <span class="text-danger d-block mb-2">{{ $message }}</span>
            @enderror

            <div class="input-group mb-3">
              <div class="form-floating">
                <input id="loginPassword" name="password" type="password" class="form-control" placeholder="Password" />
                <label for="loginPassword">Password</label>
              </div>
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            @error('password')
                <span class="text-danger d-block mb-2">{{ $message }}</span>
            @enderror

            <div class="row align-items-center">
              <div class="col-8">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                  <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                </div>
              </div>
              <div class="col-4">
                <div class="d-grid">
                  <button type="submit" class="btn btn-custom-primary">Sign In</button>
                </div>
              </div>
            </div>
          </form>

          <div class="social-auth-links text-center mb-3 d-grid gap-2">
            <p class="text-muted small my-2">- OR -</p>
            <a href="#" class="btn btn-social-fb btn-sm">
              <i class="bi bi-facebook me-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-social-google btn-sm">
              <i class="bi bi-google me-2"></i> Sign in using Google
            </a>
          </div>  

          <p class="mb-1 text-center">
            <a href="#" class="text-custom-link small">I forgot my password</a>
          </p>
          <p class="mb-0 text-center">
            <a href="register" class="text-custom-link small"> Register a new membership </a>
          </p>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../js/adminlte.js"></script>
  </body>
</html>