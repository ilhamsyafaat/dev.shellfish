<nav class="navbar navbarAnimate fixed-top navbar-expand-lg navbar-dark p-md-3">
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
                  href="{{ url('/booking') }}">Book</a>
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