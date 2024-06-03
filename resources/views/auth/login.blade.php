
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Fashion">
  <meta name="keywords" content="Fashion">
  <meta name="author" content="Fashion">
  <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon" />
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon" />
  <title>Fashion Recommendations | Login</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;900&display=swap" rel="stylesheet">
  <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/remixicon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/iconsax.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/aos.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/swiper-bundle.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <style>
    body {
      background: white !important;
    }
    .login-section .login-box {
      background: rgb(0 0 0 / 64%);
    }
  </style>
</head>
<body>
<!-- login section start -->
<section class="login-section">
  <div class="row m-0">
    <div class="col-xxl-5 offset-2 col-lg-5 ms-auto p-0 mx-auto">
      <div class="login-box">
        <div>
          <h2>Welcome to <span>Fashion Recommendation </span></h2>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="login-tab" data-bs-toggle="tab"
                      data-bs-target="#login-tab-pane" type="button" role="tab"
                      aria-controls="login-tab-pane" aria-selected="true">Login</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="signup-tab" data-bs-toggle="tab"
                      data-bs-target="#signup-tab-pane" type="button" role="tab"
                      aria-controls="signup-tab-pane" aria-selected="false">signup</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel"
                 aria-labelledby="login-tab" tabindex="0">
              <form class="auth-form"  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 form-group">
                  <i class="iconsax" data-icon="mail"></i>
                  <label for="emailid" class="form-label">Email</label>
                  <input type="email" name="email" placeholder="Enter your mail" class="form-control" id="emailid">
                </div>
                @error('email')
                <div class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </div>
                @enderror
                <div class="mb-2 form-group">
                  <i class="iconsax" data-icon="lock-2"></i>
                  <label for="password" class="form-label">Password</label>
                  <input placeholder="Enter your password" name="password" type="password" class="form-control"
                         id="password">
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <button type="submit" href="" data-cursor="pointer" class="btn-solid w-100 text-center mt-3">Log me in</button>

              </form>
            </div>
            <div class="tab-pane fade" id="signup-tab-pane" role="tabpanel" aria-labelledby="signup-tab"
                 tabindex="0">
              <form class="auth-form"  method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3 form-group" >
                  <i class="iconsax" data-icon="user-1"></i>
                  <label for="name" class="form-label">Name</label>
                  <input type="name" name="name" placeholder="Enter your name" class="form-control" id="name">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="mb-3 form-group">
                  <i class="iconsax" data-icon="mail"></i>
                  <label for="emailid" class="form-label">Email</label>
                  <input type="email" name="email" placeholder="Enter your mail" class="form-control"
                         id="emailid">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
                <div class="mb-3 form-group">
                  <i class="iconsax" data-icon="lock-2"></i>
                  <label for="password" class="form-label">Password</label>
                  <input placeholder="Enter your password" type="password" name="password" class="form-control" id="password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
                <div class="mb-3 form-group">
                  <i class="iconsax" data-icon="lock-2"></i>
                  <label for="password1" class="form-label">Confirm Password</label>
                  <input placeholder="Enter your password" name="password_confirmation" type="password" class="form-control" id="password1">
                  @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
                <button type="submit" href="" data-cursor="pointer" class="btn-solid w-100 text-center mt-4">Sign up</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="cursor"></div>
<div id="cursor-border"></div>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/custom-slider.js')}}"></script>
<script src="{{asset('js/custom-cursor.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/custom-aos.js')}}"></script>
<script src="{{asset('js/iconsax.js')}}"></script>
<script src="{{asset('js/home-animation.js')}}"></script>
<script src="{{asset('js/header_sticky.js')}}"></script>
<script src="{{asset('js/pricing-table.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
