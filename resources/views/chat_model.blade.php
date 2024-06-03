<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="megabot">
  <meta name="keywords" content="megabot">
  <meta name="author" content="megabot">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon"/>
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon"/>
  <title>Fashion Recommendation AI</title>

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;900&display=swap" rel="stylesheet">

  <!-- bootstrap css -->
  <link id="rtl-link" rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <!-- remixicon css -->
  <link rel="stylesheet" type="text/css" href="css/remixicon.css">

  <!-- iconsax css -->
  <link rel="stylesheet" type="text/css" href="css/iconsax.css"/>

  <!-- animation css -->
  <link rel="stylesheet" type="text/css" href="css/aos.css">

  <!-- swiper slider css -->
  <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css"/>

  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style>
    .inner-menu-panel .inner-links-list li {

    background: white;
    border-radius: 11px;
    padding: 10px;
    margin: 5px -3px;
    }
    .new_li {
      background-color: #141d2b !important;
    }
    .new_button {
      color: rgb(255, 255, 255);
      font-weight: bold;
      background: rgba(var(--theme-color), 1);
      -webkit-backdrop-filter: blur(2px);
      backdrop-filter: blur(2px);
      border-radius: 6px;
      height: 60px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      border: none;
      width: 100%;
    }
  </style>

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
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Python.svg/48px-Python.svg.png"
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
              <button data-bs-toggle="collapse" data-bs-target="#navbarNav"
                      class="inner-close d-block d-lg-none">Back
              </button>
              <ul class="inner-links-list" id="innerLink">
                <li class="active">
                  <select id="gender" name="gender" class="form-control" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </li>
                <li>
                  <label for="color">Choose Color:</label>
                  <input type="color" id="color" name="color" class="form-control">
                </li>
                <li>
                  <label for="age">Your age:</label>
                  <input type="number" id="age" name="age" class="form-control">
                </li>
                <li>
                  <select id="clothe" name="clothe" class="form-control" required>
                    <option value="">Select Type Of the Outfit</option>
                    <option value="shirt">Shirt</option>
                    <option value="pants">Pants</option>
                    <option value="dress">Dress</option>
                    <!-- Add more options as needed -->
                  </select>
                </li>
                <li>
                  <label for="shoeColor">Color of shoes:</label>
                  <input type="color" id="shoeColor" name="shoeColor" class="form-control">
                </li>
                <li class="new_li">
                  <button type="submit" class="new_button" onclick="collectAndSendData()"><i class="iconsax" data-icon="send-1"></i></button>
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
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Python.svg/48px-Python.svg.png" class="img-fluid">
            </a>
            <h3 id="targetDiv">Fashion Recommendation AI</h3>
          </div>
          <div class="header-option">
            <a class="del-btn" data-cursor="pointer" href=""><i class="iconsax" data-icon="trash">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M21 5.97998C17.67 5.64998 14.32 5.47998 10.98 5.47998C9 5.47998 7.02 5.57998 5.04 5.77998L3 5.97998"
                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97"
                        stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path
                    d="M18.85 9.14001L18.2 19.21C18.09 20.78 18 22 15.21 22H8.79002C6.00002 22 5.91002 20.78 5.80002 19.21L5.15002 9.14001"
                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M10.33 16.5H13.66" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                  <path d="M9.5 12.5H14.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
              </i></a>
          </div>
        </div>
        <div class="main-chat">
          <div class="no-chat">
            <div id="responseHTTP">
              <img class="NOchatImage" src="{{asset('images/no-chat.png')}}" class="img-fluid" alt="">
              <h3> Fashion Recommendation AI</h3>
            </div>
            <div id="loadingIndicator"></div> <!-- Loading indicator -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="cursor"></div>
<div id="cursor-border"></div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/custom-slider.js"></script>
<script src="js/custom-cursor.js"></script>
<script src="js/iconsax.js"></script>
{{--<script src="js/chat-page.js"></script>--}}
{{--<script src="js/chatting.js"></script>--}}
<script src="js/script.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>
  function collectAndSendData() {
    $("#responseHTTP").html('')
    document.getElementById('loadingIndicator').style.display = 'block';
    const gender = $("#gender").val();
    const color = $("#color").val();
    const age = $("#age").val();
    const clothe = $("#clothe").val();
    const shoeColor = $("#shoeColor").val();
    // Prepare data object
    const message = `Gender: ${gender}, Color: ${color}, Age: ${age}, Type of Outfit: ${clothe}, Shoe Color: ${shoeColor}`;
    // Send data to API
    $.ajax({
      url: "/chat",
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': "{{csrf_token()}}"
      },
      data: {
        "content": message
      },
      success: function (response) {
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
    // Refresh the page after download
    window.location.reload();
  }


</script>
</body>
</html>
