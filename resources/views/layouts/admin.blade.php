<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/cbf87a6cb7.js" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav-bar.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <!-- Vertical navbar -->
            <div class="vertical-nav bg-white" id="sidebar">
                <div class="py-4 px-3 mb-4 bg-light row flex-nowrap no-gutters">
                    <div class="col-10">
                        <div class="media d-flex align-items-center">
                            <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..."
                                width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                            <div class="media-body">
                                <h4 class="m-0">Jason Doe</h4>
                                <p class="font-weight-light text-muted mb-0">Web developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <div class="text-primary rounded d-flex align-items-center">
                            {!! Form::open(['method' => 'post', 'route' => 'logout']) !!}
                            <button class="fas fa-sign-out-alt fa-2x"></button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/user" class="nav-link text-dark font-italic">
                            <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                            User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/role" class="nav-link text-dark font-italic">
                            <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                            Role
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/product" class="nav-link text-dark font-italic">
                            <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                            Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/category" class="nav-link text-dark font-italic">
                            <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                            Category
                        </a>
                    </li>
                </ul>

                <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>

                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic">
                            <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                            Area charts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic">
                            <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                            Bar charts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic">
                            <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                            Pie charts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic">
                            <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                            Line charts
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End vertical navbar -->
        </div>
        <div class="col-9">
            <!-- Page content holder -->
                @yield('content')
            <!-- End demo content -->
        </div>
    </div>
</div>

</body>

</html>
