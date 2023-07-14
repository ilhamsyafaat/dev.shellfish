<!doctype html>
<html lang="en">

<head>
  <title>ShellFish | Destination</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@include('user.component.header')

</head>

<body>
    <header class="">
        @include('user.component.navbar')


        <div class="banner-image-destination w-100 vh-100 d-flex justify-content-center align-items-center ">
            <div class="contet text-white p-4">
                <h1 class="sunsilk">Plan Your Dream Holiday With Us!</h1>
            </div>
        </div>




        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send/?phone=%2B6282129293099&text&type=phone_number&app_absent=0"
            class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
    </header>

    <main>
        <div class="container">
            <p class="m-4 fw-bold exchange">Exchange rate : $1 = IDR 15,000</p>

            <!-- Ubud -->
            <h2 class="m-4 fw-bold des-head">Ubud</h2>
            <div id="carouselUbudControls" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper"><img src="{{asset('user/assets/images/Ubud/Cretya.png')}}" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <p>Cretya alas arum lorem ipusm....</p>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="{{asset('user/assets/images/Ubud/Kuber-ATV.png')}}" class="d-block w-100"
                                    alt="Kuber-ATV"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Kuber ATV</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$93.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="{{asset('user/assets/images/Ubud/pravas.png')}}" class="d-block w-100"
                                    alt="Banner"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$40.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Taman-dedari.png"
                                    class="d-block w-100" alt="Taman-dedari"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Taman Dedari</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Pura Dalem Ubud.png"
                                    class="d-block w-100" alt="Pura Dalem Ubud"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Pura Dalem Ubud</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Glass Bridge.png"
                                    class="d-block w-100" alt="Glass Bridge"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Glass Bridge</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Ayung Rafting.png"
                                    class="d-block w-100" alt="Ayung Rafting"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Ayung Rafting</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Waterfall Tegenungan.png"
                                    class="d-block w-100" alt="Waterfall Tegenungan"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Waterfall Tegenungan</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Bali Safari and Marine Park.png"
                                    class="d-block w-100" alt="Bali Safari and Marine Park"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Bali Safari and Marine Park</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="col text-center">
                <button type="button" class="btn btn-primary">See More</button>
            </div>

            <!-- Ubud -->

            <!-- Seminyak -->
            <h2 class="m-4 fw-bold des-head">Seminyak, Kuta, Legian, Uluwatu,
                Tanjung Benoa</h2>
            <div id="carouselSeminyakControls" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="col text-center">
                <button type="button" class="btn btn-primary mb-4">See More</button>
            </div>

            <!-- Seminyak -->

            <!-- Souvenirs -->
            <h2 class="m-4 fw-bold des-head">Souvenirs</h2>
            <div id="carouselSouvenirControls" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="col text-center">
                <button type="button" class="btn btn-primary mb-5">See More</button>
                <div class="mb-5"></div>
            </div>

            <!-- Souvenirs -->

            <!-- Kintamani -->
            <h2 class="m-4 fw-bold des-head">Kintamani</h2>
            <div id="carouselKintamaniControls" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="col text-center">
                <button type="button" class="btn btn-primary mb-5">See More</button>
                <div class="mb-5"></div>
            </div>

            <!-- Kintamani -->

            <!-- Banyuwangi -->
            <h2 class="m-4 fw-bold des-head">Banyuwangi</h2>
            <div id="carouselBanyuwangiControls" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="/assets/images/Ubud/Cretya.png" class="d-block w-100"
                                    alt="Cretya"> </div>
                            <div class="card-body">
                                <h5 class="card-title mb-5">Cretya Alas Harum</h5>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary btn-orange">Detail</a>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span>Start From</span>
                                        <h3>$4.00<small class="per">/person</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="col text-center">
                <button type="button" class="btn btn-primary mb-5">See More</button>
                <div class="mb-5"></div>
            </div>

            <!-- Banyuwangi -->
    </main>

    
    @include('user.component.footer')