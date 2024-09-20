<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('softui/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('softui/assets/img/logo.png') }}">
  <title>Jilid Enam Cafe</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('softui/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <link id="pagestyle" href="{{ asset('softui/assets/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body class="index-page">
  <header class="header-2">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route('event') }}">Jilid Enam Cafe <b>Event</b></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('welcust') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('menu') }}">Menu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('contact') }}">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('event') }}">Events</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('logout') }}">Logout</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
      </div>
    </div>
  </header>

  <section class="my-5 py-5">
    <div class="row justify-content-center text-center"><h2 class="text-dark mb-4">UPCOMING EVENTS</h2></div>
    <div class="container">
        <div class="row justify-content-center">
        @foreach($event as $e)
            <div class="col-6 col-md-4 d-flex justify-content-center">
                <div style="border-radius: 1000px;">
                    <a href="#"><img src="{{ asset($e->eventpicture) }}" width="313px" height="305px" style="border-radius: 10px;"></a>
                    <h6>{{ $e->eventname }}</h6>
                    <p class="h6">{{ \Carbon\Carbon::parse($e->eventdate)->format('d M Y') }}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>


  <footer class="footer pt-5 mt-5" style="background-color: #A37E2D">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6 style="color: white; font-size: 1.5rem; font-weight: 500; margin-bottom: 0;">ENJOY WELCOMING<br>ATMOSPHERE & MOMENTS<br>OF DELIGHT</h6>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="hr" style="width: 100%; height: 1px; background-color: white;"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <ul class="list-inline" style="font-size: 1rem;">
                    <li class="list-inline-item">
                        <a href="{{ route('welcust') }}" style="color: white; text-decoration: none;">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('menu') }}" style="color: white; text-decoration: none;">Menu</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('contact') }}" style="color: white; text-decoration: none;">Contact</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('event') }}" style="color: white; text-decoration: none;">Events</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('logout') }}" style="color: white; text-decoration: none;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <a href="https://www.instagram.com/jilid_enam/?hl=en" style="text-decoration: none;">
                    <i class="fab fa-instagram" style="font-size: 2rem; color: white;"></i>
                </a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <p style="color: white; font-size: 1rem;">&copy; {{ date('Y') }} Jilid Enam Cafe. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

  <script src="{{ asset('softui/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('softui/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('softui/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/countup.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/choices.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/prism.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/highlight.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/rellax.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/tilt.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/choices.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/parallax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="{{ asset('softui/assets/js/soft-design-system.min.js?v=1.0.9') }}" type="text/javascript"></script>

  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }

</body>
</html>
