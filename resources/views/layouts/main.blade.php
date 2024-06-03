
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
  <title>Fashion Recommendations</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;900&display=swap" rel="stylesheet">
  <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/remixicon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/iconsax.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/aos.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/swiper-bundle.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<!-- header start -->
<header>
  <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#primaryMenu">
            <span class="navbar-toggler-icon">
                <i class="iconsax" data-icon="text-align-justify"></i>
            </span>
  </button>
  <a href="#">
    <img src="{{asset('images/logo.png')}}" style="height: 60px !important;" class="img-fluid" alt="logo">
  </a>
  <nav class="header-nav-middle">
    <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
      <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
        <div class="offcanvas-header navbar-shadow">
          <h5 class="mb-0">Back</h5>
          <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Chat</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <a data-cursor="pointer" href="{{route('login')}}" class="btn btn-theme d-sm-inline-block d-none"><span>LoginNow</span></a>
</header>
<!-- header end -->


@yield('content')


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
