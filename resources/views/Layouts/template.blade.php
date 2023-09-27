<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'TANPA JUDUL')
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
    <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
</head>
<body>
    <main class="wrapper">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo m-1">
                <a class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="../assets/img/UKDW.png">
                    </div>
                </a>

                <a class="simple-text logo-normal">
                    <b>Peternakan UKDW</b>
                </a>
            </div>
            <div class="sidebar-wrapper">
                @yield('menu')
            </div>
        </div>
        <div class="main-panel">
            <div>
                <nav class="navbar navbar-light" data-color="white">
                    <div class="container-fluid">
                        <div></div>
                        <div class="d-flex">
                            <div class="m-auto">
                                @php
                                    $name = Auth::user()->name
                                @endphp
                                <p class="font-weight-bold text-dark">{{ $name }}</p>
                            </div>
                            <div class="ml-5">
                                <img width="50px" src="../assets/img/default-avatar.png" alt="user">
                            </div>
                            <div class="ml-5">
                                <a href="/logout">
                                    <button class="btn btn-outline-danger">
                                        LOGOUT
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <hr class="mb-2 mr-2 ml-2">
            <div class="ml-3 mr-3 mt-3">
                <h3 class="font-weight-bold text-dark mb-3">
                    @yield('pages_title', 'TANPA PAGES TITLE')
                </h3>

                @yield('contents')
            </div>
        </div>
    </main>
</body>
</html>