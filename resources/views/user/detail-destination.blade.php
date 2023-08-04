<!doctype html>
<html lang="en">
    <title>ShellFish | Detail Destination</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  
  @include('user.component.header');

    <link rel="stylesheet" href="{{ asset('user/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/intlTelInput.css') }}">
    <script src="{{ asset('user/js/intlTelInput.js') }}"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css"> --}}
</head>
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
                            <a class="nav-link badge text-bg-orange m-2 p-2" href="{{ url('/booking') }}">Book</a>
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

<main class="text-blue mb-4">
    <div class="container">
        <div class="row">
            <div class="col-4 mt-5">
                {{-- <img src="{{asset('user/assets/images/Ubud/Cretya.png')}}" class="img-fluid rounded mt-5" alt="..."> --}}
                    <div class="mt-5">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{asset('storage/'.$data->thumbnails)}}" class="d-block w-100" alt="...">
                          </div>
                          @foreach ($data->details as $item)
                          <div class="carousel-item">
                            <img src="{{asset('storage/'.$item->foto_detail)}}" class="d-block w-100" alt="...">
                          </div>
                          {{-- <div class="carousel-item">
                            <img src="{{asset('user/assets/images/Ubud/Cretya.png')}}" class="d-block w-100" alt="...">
                          </div> --}}
                          @endforeach
                          
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
            <div class="col-8 mt-5">
                <div class="mt-5">
                    <div class="descript">
                        <h1>{{$data->destination_name}}</h1>
                        <h5 class="card-text">{{$data->price}}<small class="per">/Day</small></h5>
                        <p class="pb-4">
                           {{$data->details_descript}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
</main>

<footer class="footer-transport fixed-bottom p-2 bg-dark text-center">
    <div class="container-fluid text-white">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="{{ asset('user/js/validasi.js') }}"></script>
<script src="{{ asset('user/js/validate.js') }}"></script>

<script src="{{ asset('user/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
</html>
