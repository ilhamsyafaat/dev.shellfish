<!doctype html>
<html lang="en">

<head>
  <title>ShellFish | Book</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@include('user.component.header');

</head>

<body class="banner-image-booking">
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
                <a class="nav-link active" href="{{ url('/home') }}" aria-current="page">Home <span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/destination') }}">Destinations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="specialOffers.html">Special Offers</a>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send/?phone=%2B6282129293099&text&type=phone_number&app_absent=0"
            class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
    </header>

    <div class="m-4"></div>
    <div class="container contet bg-white rounded-2 booking">
        <div class="text-center p-4 text-orange ">
            <h3 class="fw-bolder">Booking</h3>
        </div>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="First Name">
            </div>
            <div class="mb-3 col-md-3">
                <label for="Date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="startDate" placeholder="Start">
            </div>
            <div class="mb-3 col-md-3">
                <label for="Date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="endDate" placeholder="Start">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Last Name">
            </div>
            <div class="mb-3 col-md-6">
                <label for="participant" class="form-label">Participant</label>
                <input type="number" class="form-control" id="participant" min="1" value="1">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <div class="mb-3">
                    <label for="country" class="form-label">Your Country</label>
                    <input type="email" class="form-control" id="country" placeholder="Your Country">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5">Write Your Message</textarea>
            </div>
        </div>
 
        <div class="mb-3">
            <label for="mobileNumber" class="form-label">Mobile Number</label>
            <input type="telp" class="form-control" id="mobileNumber" placeholder="+1 Your mobile number with country code">
        </div>
        

        <div class="mb-3 d-grid gap-2">
            <button type="button" class="btn btn-orange text-white">Button</button>
        </div>
        


    </div>
    </div>

    <footer class="footer-transport fixed-bottom p-2 bg-dark text-center">
        <div class="container text-white">
            <ul>
                <li><i class="bi bi-telephone"></i><a href="https://www.instagram.com/shellfish.balitour/"
                        target="_blank"> +62 821-2929-3099</a></li>
                <li><i class="bi bi-instagram"></i><a href="https://www.instagram.com/shellfish.balitour/"
                        target="_blank"> shellfish.balitour</a></li>
                <li><i class="bi bi-envelope-fill"></i> <a href="mailto:shellfish.cs@gmail.com"
                        target="_blank">shellfish.cs@gmail.com</a></li>
            </ul>
        </div>
    </footer>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->

</body>

</html>