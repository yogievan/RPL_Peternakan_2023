<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/UKDW.png">
  <link rel="icon" type="image/png" href="../assets/img/UKDW.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    LOGIN PETERNAKAN UKDW!
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="/assets/vendor/nucleo/css/nucleo-icons.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

</head>

<body>
    <header>
        <div class="navbar navbar bg-danger shadow-sm">
          <div class="container">
            <a class="navbar-brand d-flex align-items-center">
                <div class="row">
                    <div class="col">
                        <strong>SISTEM INFORMASI PAKAN TERNAK</strong>
                    </div>
                </div>
            </a>
          </div>
        </div>
    </header>

    <!-- konten -->
    <div class="container-fluid">
      <div class="row">
        <div class="col"></div>
        <div class="col-6">
          <div class="card-stats">
            <div class="card">
              <div class="card-body">
                <main class="form-signin">
                  {{-- alert start --}}
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                  {{-- alert end --}}
                  <form action="/" method="post">
                    @csrf
                      <div class="text-center">
                          <h1 class="h3 mb-3 fw-normal">Silahkan LOGIN</h1>
                      </div>
                      <div class="form-floating">
                          <label for="floatingInput">Email</label>
                          <input autofocus type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Email" autofocus>
                      </div>
        
                      <div class="form-floating">
                          <label for="floatingPassword">Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password">
                      </div>
                      <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>
                  </form>
                </main>
                {{-- @include('Layouts.about') --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>
    <!-- konten -->
    
    <!-- Footer -->
    <div class="container-fluid">
      @include('Layouts.Footer')
    </div>
    <!-- Footer -->

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
