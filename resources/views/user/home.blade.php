<!doctype html>
<html lang="en">

<head>
  <title>ShellFish | Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="ShellFish Bali is your friendly partner to help and manage your gateways in the beautiful excotic islands
  of Bali and Banyuwangi.">

@include('user.component.header');

</head>

<body>
  <header class="">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <div class="ms-auto">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('/') }}" aria-current="page">Home <span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/destination') }}">Destinations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/special') }}">Special Offers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/transportation') }}">Transportation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link badge text-bg-orange m-2 p-2"
                  href="{{url('/booking')}}">Book</a>
              </li>
              <!-- Language -->
              <!-- <div class="nav-item dropdown">
                      <select class="nav-link dropdown-toggle" id="">
                        <div class="dropdown-menu">
                          <option value="en" class="dropdown-item" style="background: #00000050 0.1; color: black;">EN</option>
                          <option value="id" class="dropdown-item" style="background: #00000050 0.1; color: black;">ID</option>
                        </div>
                      </select>
                    </div>  -->
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="banner-image w-100 vh-100 d-flex justify-content align-items-center">
      <div class="container">
        <div class="col-lg-6">
          <div class="content text-white">
            <img src="{{asset('user/assets/icon/Logo.svg')}}" alt="ShellFish Logo" srcset="">
            {{-- <h1>ShellFish</h1> --}}
            <p>
              ShellFish Bali Tour is your friendly partner to help and manage your gateways in the beautiful excotic islands
              of Bali and Banyuwangi. We offer the custom itineraries, affordable and comfortable services. We will
              bring you to enjoy and explore the fun, adventurous activities, the breathtaking natural view and the
              magnificent art, culture, places. </p>
            <p>We also provide drone videography service in Bali. We help our customer to save beautiful holiday moments
              through videos. Perfect gateaway is yours.
            </p>
            <span class="open p-1">Open Daily: 8AM - 9PM</span><br>
          </div>
        </div>
      </div>
    </div>




      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <a href="https://api.whatsapp.com/send/?phone=%2B6282129293099&text&type=phone_number&app_absent=0" class="float"
        target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
      </a>
  </header>

  @include('user.component.footer')