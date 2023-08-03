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
                            <img src="{{asset('user/assets/images/Ubud/Cretya.png')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('user/assets/images/Ubud/Cretya.png')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('user/assets/images/Ubud/Cretya.png')}}" class="d-block w-100" alt="...">
                          </div>
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
                        <h1>Destination Name</h1>
                        <h5 class="card-text">Price<small class="per">/Day</small></h5>
                        <p class="pb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis neque delectus, iure praesentium sequi corporis laborum pariatur nesciunt, vitae magnam modi suscipit voluptates fuga soluta quaerat esse voluptas atque cum!
                            Reiciendis perspiciatis, eius voluptatem iure quaerat assumenda repellat voluptates culpa ipsa, ut vitae officiis voluptatum aperiam aliquid quos accusantium praesentium neque nesciunt repellendus, numquam nostrum quis velit mollitia. In, harum.
                            Sit blanditiis eveniet harum quisquam, nihil incidunt laudantium tempora sequi in cumque, eius doloribus officia architecto maxime nesciunt aliquid? Esse vero minus mollitia nihil doloremque ipsum est obcaecati iste incidunt.
                            Dicta sapiente quo fugiat, ad adipisci minima suscipit tempore fuga saepe corrupti incidunt deleniti laborum cupiditate? Laboriosam, nostrum accusantium atque dolorem natus, odio voluptatem, nulla provident sunt aperiam esse magnam.
                            Sapiente exercitationem ullam ipsa voluptates laudantium dolore maxime eum distinctio reiciendis repudiandae delectus expedita quibusdam doloremque saepe nam illo fugiat quo corporis similique placeat quidem consequatur, soluta omnis qui! Consequuntur!
                            Cupiditate laudantium, in quia magni cumque suscipit sint et aliquid! Quia eum sit maxime incidunt nulla, totam veniam nesciunt distinctio laboriosam, consequuntur quos dolor. Fugiat natus dignissimos voluptas cumque soluta.
                            Ea facilis mollitia quaerat tenetur quo eius, eligendi quae excepturi nisi. Maiores reiciendis, qui fugit explicabo amet odit, natus voluptates sed aliquam cumque consequuntur a veritatis nam dolor soluta ullam?
                            Molestiae illo excepturi suscipit eveniet a voluptate accusamus facere tenetur quo ipsam totam, nulla ipsa. Cumque nisi, ipsum beatae, at doloremque distinctio reiciendis veniam praesentium hic earum nostrum consequatur totam.
                            Nisi, veritatis eos assumenda voluptas quisquam ex tempora laboriosam similique beatae dolores soluta aut eius ipsam non nostrum cupiditate dignissimos earum, quia dolorum. Magnam, nisi ad similique quia aliquid mollitia?
                            Sit velit tenetur quaerat nostrum? A quaerat molestiae temporibus labore ex, deserunt commodi, quo repudiandae vitae, voluptas impedit consectetur nisi ducimus pariatur quia. At, a? Placeat quam doloremque expedita qui?

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
