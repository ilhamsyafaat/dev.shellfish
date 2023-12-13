<!doctype html>
<html lang="en">

<head>
    <title>ShellFish | Book</title>
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
                                <a class="p-2 m-2 nav-link badge text-bg-orange" href="{{ url('/booking') }}">Book</a>
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
    <div class="container bg-white contet rounded-2 booking">
        <div class="p-4 text-center text-orange ">
            <h3 class="fw-bolder">Booking</h3>
        </div>
        <form id="validate" action="{{ route('store.booking') }}" method="POST">
            @csrf
            <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Last Name">
                    </div>
                <div class="col-md">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="Date" class="form-label">Start Date</label>
                            <input type="date" class="form-control" name="start" id="start" placeholder="Start">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="Date" class="form-label">End Date</label>
                            <input type="date" class="form-control" name="end" id="end" placeholder="Start">
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="participant" class="form-label">Participant</label>
                    <input type="number" class="form-control" name="participant" id="participant" min="1"
                        value="1">
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" id="country"
                            placeholder="Country">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Email">
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5">Write Your Message</textarea>
                </div>
            </div>

            <div class="mb-3">
                <label for="mobileNumber" class="form-label">Mobile Number</label>
                <input type="tel"  class="form-control" name="phone" id="mobileNumber">
                <span id="valid-msg" class="hide"></span>
                <span id="error-msg" class="hide"></span>
            </div>
            <div class="gap-2 mb-3 d-grid">
                <button type="submit" class="text-white btn btn-orange">Booking</button>
            </div>
        </form>
    </div>


    <footer class="p-2 text-center footer-transport fixed-bottom bg-dark">
        <div class="text-white container-fluid">
            <ul>
                <li><i class="bi bi-telephone"></i><a href="https://wa.me/6282129293099"
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

    {{-- <script src="{{ asset('user/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors --> --}}
    <script type="text/javascript">
        const input = document.querySelector("#mobileNumber");
        const errorMsg = document.querySelector("#error-msg");
        const validMsg = document.querySelector("#valid-msg");
        // here, the index maps to the error code returned from getValidationError - see readme
        const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
        // initialise plugin
        const iti = window.intlTelInput(input, {

            utilsScript: "{{ asset('user/js/utils.js?1687509211722') }}"
        });
        const reset = () => {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };

        // on blur: validate
        input.addEventListener('blur', () => {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    input.classList.add("error");
                    const errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });
        document.querySelector("#validate").addEventListener("submit", function(e) {
            var isValid = iti.isValidNumber();
            if (!isValid) {
                e.preventDefault(); // Mencegah pengiriman form jika nomor telepon tidak valid
                input.classList.add("error");
                const errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        });
        // on keyup / change flag: reset
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);

        function updatePlaceholder(selectedCountry) {
 
            input.value = '+' + iti.getSelectedCountryData().dialCode;
        }
        updatePlaceholder();
        // Mengatur nilai input dengan kode negara
    </script>
    <script type="text/javascript">
        $("#validate").validate({
            rules: {
                start: {
                    required: true,
                    date: true,
                },
                end: {
                    required: true,
                    date: true,
                    greaterThanStartDate: true,
                },
                firstname: {
                    required: true,
                },
                lastname: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,

                },
                country: {
                    required: true,
                },
            },
            messages: {
                start: {
                    required: "Please enter a start date.",
                },
                end: {

                    required: "Please enter an end date.",
                    greaterThanStartDate: "End date must be greater than start date.",

                },
                foto_event: {
                    required: "foto event harus ditambahkan",
                },
                berita: {
                    required: "verita tidak boleh kosong",
                },
            },
        });
    </script>
</body>

</html>
