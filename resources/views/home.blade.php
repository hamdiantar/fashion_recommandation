<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fashion Recommendation AI</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;900&display=swap" rel="stylesheet">
  <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/remixicon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/iconsax.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/aos.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/swiper-bundle.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<section class="chatting-wrapper pt-0">
  <nav class="navbar navbar-expand-md p-0">
    <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
      <i class="iconsax" data-icon="text-align-justify"></i>
    </button>
    <div class="collapse navbar-collapse" id="mainnavbarNav">
      <div class="menu-panel">
        <button data-bs-toggle="collapse" data-bs-target="#mainnavbarNav"
                class="mainnav-close d-block d-md-none"><i class="iconsax" data-icon="close-circle"></i>
        </button>
        <a href="#" class="logo-icon d-none d-md-flex">
          <img src="{{asset('images/logo2.png')}}"
               class="img-fluid">
        </a>
        <ul class="nav nav-tabs menu-wrapper" id="myTab" role="tablist">
          <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Chat" class="nav-item"
              role="presentation">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#chat" type="button" role="tab"
                    aria-controls="chat" aria-selected="true"><i class="iconsax" data-icon="messages-2"></i>
              <span>Chat</span>
            </button>
          </li>
          <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="History" class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="true"><i class="iconsax" data-icon="refresh-circle"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z" fill="#292D32"></path>
                  <path d="M12.0014 17.472C10.6014 17.472 9.20141 16.942 8.13141 15.872C7.85141 15.592 7.6014 15.282 7.3714 14.912C7.1514 14.562 7.26139 14.1021 7.61139 13.8821C7.96139 13.6621 8.42142 13.772 8.64142 14.122C8.81142 14.402 8.99141 14.6221 9.19141 14.8221C10.7414 16.3721 13.2614 16.3721 14.8114 14.8221C15.4114 14.2221 15.7914 13.4421 15.9214 12.5721C15.9814 12.1621 16.3614 11.862 16.7714 11.932C17.1814 11.992 17.4614 12.3721 17.4114 12.7821C17.2414 13.9721 16.7114 15.0421 15.8814 15.8821C14.8014 16.9421 13.4014 17.472 12.0014 17.472Z" fill="#292D32"></path>
                  <path d="M7.3399 12.081C7.2999 12.081 7.26991 12.0809 7.22991 12.0709C6.81991 12.0109 6.5299 11.6309 6.5899 11.2209C6.7599 10.0309 7.2899 8.96094 8.1199 8.12094C10.2499 5.99094 13.7199 5.99094 15.8599 8.12094C16.1399 8.40094 16.3899 8.71097 16.6199 9.09097C16.8399 9.44097 16.7299 9.90094 16.3799 10.1209C16.0299 10.3409 15.5699 10.2309 15.3499 9.88095C15.1799 9.61095 14.9999 9.38094 14.7999 9.18094C13.2499 7.63094 10.7299 7.63094 9.17989 9.18094C8.57989 9.78094 8.19991 10.5609 8.06991 11.4309C8.02991 11.8109 7.7099 12.081 7.3399 12.081Z" fill="#292D32"></path>
                  <path d="M7.82031 17.9317C7.41031 17.9317 7.07031 17.5917 7.07031 17.1817V14.5117C7.07031 14.1017 7.41031 13.7617 7.82031 13.7617H10.4903C10.9003 13.7617 11.2403 14.1017 11.2403 14.5117C11.2403 14.9217 10.9003 15.2617 10.4903 15.2617H8.57031V17.1817C8.57031 17.5917 8.24031 17.9317 7.82031 17.9317Z" fill="#292D32"></path>
                  <path d="M16.1778 10.2403H13.5078C13.0978 10.2403 12.7578 9.9003 12.7578 9.4903C12.7578 9.0803 13.0978 8.7403 13.5078 8.7403H15.4278V6.82031C15.4278 6.41031 15.7678 6.07031 16.1778 6.07031C16.5878 6.07031 16.9278 6.41031 16.9278 6.82031V9.4903C16.9278 9.9103 16.5878 10.2403 16.1778 10.2403Z" fill="#292D32"></path>
                </svg>
              </i>
              <span>History</span> </button>
          </li>
          <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Help" class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#help" type="button" role="tab" aria-controls="help" aria-selected="false" tabindex="-1">
              <i class="iconsax" data-icon="setting-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 15.75C9.93 15.75 8.25 14.07 8.25 12C8.25 9.93 9.93 8.25 12 8.25C14.07 8.25 15.75 9.93 15.75 12C15.75 14.07 14.07 15.75 12 15.75ZM12 9.75C10.76 9.75 9.75 10.76 9.75 12C9.75 13.24 10.76 14.25 12 14.25C13.24 14.25 14.25 13.24 14.25 12C14.25 10.76 13.24 9.75 12 9.75Z" fill="#292D32"></path>
                  <path d="M15.21 22.1903C15 22.1903 14.79 22.1603 14.58 22.1103C13.96 21.9403 13.44 21.5503 13.11 21.0003L12.99 20.8003C12.4 19.7803 11.59 19.7803 11 20.8003L10.89 20.9903C10.56 21.5503 10.04 21.9503 9.42 22.1103C8.79 22.2803 8.14 22.1903 7.59 21.8603L5.87 20.8703C5.26 20.5203 4.82 19.9503 4.63 19.2603C4.45 18.5703 4.54 17.8603 4.89 17.2503C5.18 16.7403 5.26 16.2803 5.09 15.9903C4.92 15.7003 4.49 15.5303 3.9 15.5303C2.44 15.5303 1.25 14.3403 1.25 12.8803V11.1203C1.25 9.66029 2.44 8.47029 3.9 8.47029C4.49 8.47029 4.92 8.30029 5.09 8.01029C5.26 7.72029 5.19 7.26029 4.89 6.75029C4.54 6.14029 4.45 5.42029 4.63 4.74029C4.81 4.05029 5.25 3.48029 5.87 3.13029L7.6 2.14029C8.73 1.47029 10.22 1.86029 10.9 3.01029L11.02 3.21029C11.61 4.23029 12.42 4.23029 13.01 3.21029L13.12 3.02029C13.8 1.86029 15.29 1.47029 16.43 2.15029L18.15 3.14029C18.76 3.49029 19.2 4.06029 19.39 4.75029C19.57 5.44029 19.48 6.15029 19.13 6.76029C18.84 7.27029 18.76 7.73029 18.93 8.02029C19.1 8.31029 19.53 8.48029 20.12 8.48029C21.58 8.48029 22.77 9.67029 22.77 11.1303V12.8903C22.77 14.3503 21.58 15.5403 20.12 15.5403C19.53 15.5403 19.1 15.7103 18.93 16.0003C18.76 16.2903 18.83 16.7503 19.13 17.2603C19.48 17.8703 19.58 18.5903 19.39 19.2703C19.21 19.9603 18.77 20.5303 18.15 20.8803L16.42 21.8703C16.04 22.0803 15.63 22.1903 15.21 22.1903ZM12 18.4903C12.89 18.4903 13.72 19.0503 14.29 20.0403L14.4 20.2303C14.52 20.4403 14.72 20.5903 14.96 20.6503C15.2 20.7103 15.44 20.6803 15.64 20.5603L17.37 19.5603C17.63 19.4103 17.83 19.1603 17.91 18.8603C17.99 18.5603 17.95 18.2503 17.8 17.9903C17.23 17.0103 17.16 16.0003 17.6 15.2303C18.04 14.4603 18.95 14.0203 20.09 14.0203C20.73 14.0203 21.24 13.5103 21.24 12.8703V11.1103C21.24 10.4803 20.73 9.96029 20.09 9.96029C18.95 9.96029 18.04 9.52029 17.6 8.75029C17.16 7.98029 17.23 6.97029 17.8 5.99029C17.95 5.73029 17.99 5.42029 17.91 5.12029C17.83 4.82029 17.64 4.58029 17.38 4.42029L15.65 3.43029C15.22 3.17029 14.65 3.32029 14.39 3.76029L14.28 3.95029C13.71 4.94029 12.88 5.50029 11.99 5.50029C11.1 5.50029 10.27 4.94029 9.7 3.95029L9.59 3.75029C9.34 3.33029 8.78 3.18029 8.35 3.43029L6.62 4.43029C6.36 4.58029 6.16 4.83029 6.08 5.13029C6 5.43029 6.04 5.74029 6.19 6.00029C6.76 6.98029 6.83 7.99029 6.39 8.76029C5.95 9.53029 5.04 9.97029 3.9 9.97029C3.26 9.97029 2.75 10.4803 2.75 11.1203V12.8803C2.75 13.5103 3.26 14.0303 3.9 14.0303C5.04 14.0303 5.95 14.4703 6.39 15.2403C6.83 16.0103 6.76 17.0203 6.19 18.0003C6.04 18.2603 6 18.5703 6.08 18.8703C6.16 19.1703 6.35 19.4103 6.61 19.5703L8.34 20.5603C8.55 20.6903 8.8 20.7203 9.03 20.6603C9.27 20.6003 9.47 20.4403 9.6 20.2303L9.71 20.0403C10.28 19.0603 11.11 18.4903 12 18.4903Z" fill="#292D32"></path>
                </svg>
              </i>  <span>Setting</span>
            </button>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="tab-content">
    <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat" tabindex="0">
      <div class="main-wrapper">
        <nav class="navbar navbar-expand-lg bg-light p-0">
          <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                  aria-label="Toggle navigation">
            <i class="iconsax" data-icon="text-align-justify"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="inner-menu-panel">
              <button data-bs-toggle="collapse" data-bs-target="#navbarNav" class="inner-close d-block d-lg-none">Back
              </button>
              <ul class="inner-links-list" id="innerLink">
                <li style="display: flex;justify-content: space-around;">
                  <div>
                    <h6 class="text-center">Select Style top:</h6>
                    @foreach ($imageListTops as $image)
                      <div class="mb-3">
                        <input type="radio" id="top-{{ $loop->index }}" name="selectedTopImage" value="{{ $image['name'] }}">
                        <label for="top-{{ $loop->index }}">
                          <img src="{{ $image['url'] }}" alt="{{ $image['name'] }}" class="img-fluid imgModel">
                        </label>
                      </div>
                    @endforeach
                  </div>

                  <div>
                    <h6 class="text-center">Select Style Bottom:</h6>
                    @foreach ($imageListBottoms as $image)
                      <div class="mb-3">
                        <input type="radio" id="bottom-{{ $loop->index }}" name="selectedBottomImage" value="{{ $image['name'] }}">
                        <label for="bottom-{{ $loop->index }}">
                          <img src="{{ $image['url'] }}" alt="{{ $image['name'] }}" class="img-fluid imgModel">
                        </label>
                      </div>
                    @endforeach
                  </div>
                  <div style=" border-left: 1px solid #b7b0b0;padding-left: 18px;">
                    <h6 class="text-center">Select Shoes:</h6>
                  @foreach ($imageListShoes as $image)
                    <div class=" mb-3">
                      <input type="radio" id="shoe-{{ $loop->index }}" name="selectedShoeImage" value="{{ $image['name'] }}">
                      <label for="shoe-{{ $loop->index }}">
                        <img src="{{ $image['url'] }}" alt="{{ $image['name'] }}" class="img-fluid imgModel">
                      </label>
                    </div>
                  @endforeach
                  </div>

                </li>
                <li class="active">
                  <select id="gender" name="gender" class="form-control" required>
                    <option value="">Select Type</option>
                    <option value="Child">Child</option>
                    <option value="Man">Man</option>
                    <option value="Women">Women</option>
                  </select>
                </li>
                <li class="new_li">
                  <button  class="new_button" onclick="collectAndSendData()"><i class="iconsax" data-icon="send-1"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="chat-header">
          <div class="d-flex align-items-center gap-2">
            <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
              <i class="iconsax" data-icon="text-align-justify"></i>
            </button>
            <a href="#" class="logo-icon d-flex d-md-none">
              <img src="{{asset('images/logo2.png')}}" class="img-fluid">
            </a>
            <h3 id="targetDiv">Fashion Recommendation AI</h3>
          </div>
          <div class="header-option">
            <a class="del-btn"
               data-cursor="pointer"
               href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out"></i>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </a>
          </div>
        </div>
        <div class="main-chat">
          <div class="no-chat">
            <div id="responseHTTP">
              <img class="NOchatImage" src="{{asset('images/no-chat.png')}}" class="img-fluid" alt="">
              <h3> Fashion Recommendation AI</h3>
            </div>
            <div id="loadingIndicator"></div>

<div class="msger-inputarea">
  <button class="navbar-toggler d-lg-none d-block msger-send-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="iconsax" data-icon="text-align-justify"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 4.5H21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M3 9.5H21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M3 14.5H21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M3 19.5H21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </i></button>
</div>

          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history" tabindex="0">
      <div class="main-wrapper p-0">
        <nav class="navbar navbar-expand-lg bg-light p-0">
          <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                  aria-label="Toggle navigation">
            <i class="iconsax" data-icon="text-align-justify"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

          </div>
        </nav>
        <div style="    width: calc(100% - 71px);    left: 71px;" class="chat-header">
          <div class="d-flex align-items-center gap-2">
            <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
              <i class="iconsax" data-icon="text-align-justify"></i>
            </button>
            <a href="#" class="logo-icon d-flex d-md-none">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Python.svg/48px-Python.svg.png" class="img-fluid">
            </a>
            <h3 id="targetDiv">Fashion Recommendation AI</h3>
          </div>
          <div class="header-option">
            <a class="del-btn"
               data-cursor="pointer"
               href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out"></i>

            </a>
          </div>
        </div>
        <div class="main-section">
          <div class="container card p-0">
            <div style="background: #0a101a;" class="card-header">
              <h3 class="text-white">Chat History</h3>
              <form class="auth-form d-none d-md-block">
                <div class="form-group">
                  <i class="iconsax" data-icon="search-normal-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.5 21.75C5.85 21.75 1.25 17.15 1.25 11.5C1.25 5.85 5.85 1.25 11.5 1.25C17.15 1.25 21.75 5.85 21.75 11.5C21.75 17.15 17.15 21.75 11.5 21.75ZM11.5 2.75C6.67 2.75 2.75 6.68 2.75 11.5C2.75 16.32 6.67 20.25 11.5 20.25C16.33 20.25 20.25 16.32 20.25 11.5C20.25 6.68 16.33 2.75 11.5 2.75Z" fill="#292D32"></path>
                      <path d="M21.9995 22.7514C21.8095 22.7514 21.6195 22.6814 21.4695 22.5314L19.4695 20.5314C19.1795 20.2414 19.1795 19.7614 19.4695 19.4714C19.7595 19.1814 20.2395 19.1814 20.5295 19.4714L22.5295 21.4714C22.8195 21.7614 22.8195 22.2414 22.5295 22.5314C22.3795 22.6814 22.1895 22.7514 21.9995 22.7514Z" fill="#292D32"></path>
                    </svg>
                  </i>
                  <input type="search" class="form-control" placeholder="Search here">
                </div>
              </form>
            </div>
            <div class="card-body px-sm-4 px-3">
              <ul class="history-sec">
                @foreach(auth()->user()->images as $image)
                  <li class="history-main">
                    <div class="history-detail text-truncate">
                     <a href="{{$image->image_path}}" target="_blank"> <i class="fa fa-download"></i></a>
                      <img src="{{ $image->image_path }}" alt="User Image">
                      <div>
                        <p>{{ $image->description }}</p>
                        <p class="d-sm-none d-inline-block">{{ $image->created_at->diffForHumans() }}</p>
                      </div>
                    </div>
                    <div class="history-time d-sm-flex d-none">
                      <ul>
                        <li>{{ $image->created_at->diffForHumans() }}</li>
                      </ul>
                    </div>
                  </li>
                @endforeach

              </ul>

            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="help" role="tabpanel" aria-labelledby="help" tabindex="0">
      <div class="main-wrapper p-0">
        <nav class="navbar navbar-expand-lg bg-light p-0">
          <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                  aria-label="Toggle navigation">
            <i class="iconsax" data-icon="text-align-justify"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

          </div>
        </nav>
        <div style="    width: calc(100% - 71px);    left: 71px;" class="chat-header">
          <div class="d-flex align-items-center gap-2">
            <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
              <i class="iconsax" data-icon="text-align-justify"></i>
            </button>
            <a href="#" class="logo-icon d-flex d-md-none">
              <img src="{{asset('images/logo2.png')}}" class="img-fluid">
            </a>
            <h3 id="targetDiv">Fashion Recommendation AI</h3>
          </div>
          <div class="header-option">
            <a class="del-btn"
               data-cursor="pointer"
               href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out"></i>

            </a>
          </div>
        </div>
        <div class="main-section d-flex gap-4 flex-column">
          <div class="container card p-0">
            <div style="background: #0a101a;" class="card-header">
              <h3 class="text-white">My account</h3>
            </div>
            <div class="card-body px-sm-4 px-3">
              <div class="my-account">
                <div class="user-main">
                  <div class="user-profile">
                    <img src="{{asset('images/def.png')}}" class="img-fluid">
                  </div>
                  <div class="user-option">
                    <h4>{{auth()->user()->name}}</h4>
                    <p style="color: black">{{auth()->user()->email}}</p>
                  </div>
                </div>

                <form class="msger-inputarea mb-0" method="POST" action="{{ route('profile.update') }}">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6 col-12">
                      <div class="mb-3">
                        <label for="firstname" class="form-label">Name</label>
                        <input type="text" class="msger-input" id="firstname" name="name" value="{{ old('name', auth()->user()->name) }}" placeholder="Name">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-6 col-12">
                      <div class="mb-3">
                        <label for="emailid" class="form-label">Email address</label>
                        <input type="email" class="msger-input" id="emailid" name="email" value="{{ old('email', auth()->user()->email) }}" placeholder="emailid@example.com">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
            </div>
            <div class="card-footer"></div>
          </div>

          <div class="container card p-0 mt-4">
            <div style="background: #0a101a;" class="card-header">
              <h3 class="text-white">Change password</h3>
            </div>
            <div class="card-body px-sm-4 px-3">
              <div class="my-account">
                <form class="msger-inputarea mb-0" method="POST" action="{{ route('password.update') }}">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6 col-12">
                      <div class="mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" class="msger-input" id="new_password" name="new_password" placeholder="***********">
                        @error('new_password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-6 col-12">
                      <div class="mb-3">
                        <label for="new_password_confirmation" class="form-label">Confirm password</label>
                        <input type="password" class="msger-input" id="new_password_confirmation" name="new_password_confirmation" placeholder="***********">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Update password</button>
                </form>
              </div>
            </div>
            <div class="card-footer"></div>
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
<script src="{{asset('js/iconsax.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
  function collectAndSendData() {
    $("#responseHTTP").html('');
    document.getElementById('loadingIndicator').style.display = 'block';

    // Check if any image is selected
    const selectedTopImage = document.querySelector('input[name="selectedTopImage"]:checked');
    const selectedBottomImage = document.querySelector('input[name="selectedBottomImage"]:checked');
    const selectedShoeImage = document.querySelector('input[name="selectedShoeImage"]:checked');

    if ((!selectedTopImage || !selectedBottomImage) && !selectedShoeImage) {
      alert('Please design pattern before continue');
      document.getElementById('loadingIndicator').style.display = 'none';
      return;
    }

    const gender = $("#gender").val();
    const data = {
      "gender": gender
    };

    if (selectedTopImage && selectedBottomImage) {
      data.selectedTopImage = selectedTopImage.value;
      data.selectedBottomImage = selectedBottomImage.value;
    }

    if (selectedShoeImage) {
      data.selectedShoeImage = selectedShoeImage.value;
    }

    $.ajax({
      url: "/chat",
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': "{{csrf_token()}}"
      },
      data: data,
      success: function (response) {
        alert('responseresponseresponseresponseresponse');
        const imageUrl = response.image;
        const showFrameArea = document.querySelector("#responseHTTP");
        showFrameArea.classList.add("frameImage");
        $("#responseHTTP").html(`
                <img id="fashionImage" src="${imageUrl}" class="img-fluid" alt="Fashion Recommendation">
                <button class="btn btn-outline-success" onclick="downloadImage('${imageUrl}')" id="downloadButton">Download Image <i class="fa fa-download"></i></button>
            `);
        $("form #message").prop('disabled', false);
        $("form button").prop('disabled', false);
        document.getElementById('loadingIndicator').style.display = 'none';
        console.log("Preview image response:", response);
      },
      error: function (xhr, status, error) {
        console.error("Error:", error);
        document.getElementById('loadingIndicator').style.display = 'none';
      }
    });
  }

  function downloadImage(imageUrl) {
    const link = document.createElement('a');
    link.href = `/download-image?image_url=${encodeURIComponent(imageUrl)}`;
    link.setAttribute('download', 'fashion_recommendation.png');
    link.style.display = 'none';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    window.location.reload();
  }
</script>
</body>
</html>
