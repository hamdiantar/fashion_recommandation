@extends('layouts.main')

@section('content')

  <!-- home section start -->
  <section class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="home-content">
            <div class="bg-effect">
              <img src="{{asset('images/home-bg.gif')}}" class="img-fluid bg-gif" alt="">
              <img src="{{asset('images/1.png')}}" class="img-fluid effect1 rotate-effect" alt="">
              <img src="{{asset('images/2.svg')}}" class="img-fluid effect2 rotate-effect" alt="">
            </div>
            <div>
              <h1><div class="title-effect">
                  <img src="{{asset('images/title-effect.png')}}" alt=""><span>Fashion Recommendation AI</span>
                </div></h1>
            </div>
          </div>
          <div class="home-laptop px-md-0 px-3">
            <div class="laptop-sec position-relative">
              <div class="hand-sec">
{{--                <img src="{{asset('images/hand.png')}}" class="img-fluid left-hand" alt="hand">--}}
{{--                <img src="{{asset('images/hand.png')}}" class="img-fluid right-hand" alt="hand">--}}
{{--                <img src="{{asset('images/finger.png')}}" class="img-fluid left-finger" alt="hand">--}}
{{--                <img src="{{asset('images/finger.png')}}" class="img-fluid right-finger" alt="hand">--}}
              </div>
              <img src="{{asset('images/bg.jpeg')}}" class="img-fluid laptop-img" alt="laptop">
            </div>
            <div class="home-info">
              <ul class="info-list">
                <li class="bcolor">Ask anything </li>
                <li class="bcolor">Generate image</li>
                <li class="bcolor">Translate anything</li>
              </ul>
              <ul class="star-rating">
                <li><i class="fa fa-star text-warning"></i></li>
                <li><i class="fa fa-star text-warning"></i></li>
                <li><i class="fa fa-star text-warning"></i></li>
                <li><i class="fa fa-star text-warning"></i></li>
                <li><i class="fa fa-star text-warning"></i></li>
              </ul>
              <h4>A technique to write all of your material 10 times more quickly.</h4>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Tap To Top Button Start -->
    <div class="tap-to-top-box hide">
      <button class="tap-to-top-button"><i class="iconsax" data-icon="chevron-up"></i></button>
    </div>
    <!-- Tap To Top Button End -->


    <!--custom cursor start  -->
    <div id="cursor"></div>
    <div id="cursor-border"></div>
    <!--custom cursor start  -->
  </section>

@endsection
