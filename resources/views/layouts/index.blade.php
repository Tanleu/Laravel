<!DOCTYPE html>
<html lang="en">
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
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/nav-bar.css') }}" rel="stylesheet">
</head>
<body>
<header class="shadow">
    <div class="container py-5 bg-transparent">
        <div class="row">
            <div class="col-2">
                <img
                    src="https://image.freepik.com/free-vector/online-shop-store-e-commerce-sale-msacot-cute-logo_8169-157.jpg"
                    class="img-fluid img-thumbnail">
            </div>
            <div class="col-10">
                <div class="text-center bg-light rounded">
                    <p class="font-weight-bolder p-4">Welcome to my shop</p>
                </div>
                <div class="navbar-expand shadow mt-1 bg-light rounded">
                    <div class="d-inline-block">
                        <ul class="navbar-nav">
                            <li class="nav-item rounded shadow font-weight-bold p-1 m-1">
                                <a class="nav-link text-dark" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item rounded shadow font-weight-bold p-1 m-1">
                                <a class="nav-link text-dark" href="#">Danh mục</a>
                            </li>
                            <li class="nav-item rounded shadow font-weight-bold p-1 m-1">
                                <a class="nav-link text-dark" href="#">Sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-inline-block float-right">
                        <ul class="navbar-nav">
                            <li class="nav-item rounded shadow font-weight-bold p-1 m-1">
                                <a class="nav-link text-dark" href="#">Đăng nhập</a>
                            </li>
                            <li class="nav-item rounded shadow font-weight-bold p-1 m-1">
                                <a class="nav-link text-dark" href="#">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="shadow mt-3">
    <div class="container shadow">
        <div class="carousel carousel-fade" id="carousel">
            <div class="carousel-caption">ABCDDd</div>
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active text-center" style="height: 500px">
                    <div style='background-image:url("https://d33hx0a45ryfj1.cloudfront.net/additional/Dynamic/media/00b7ed6f04770e92?w=1600&h=900&crop=1");
                                background-size: cover; background-repeat: no-repeat;'
                         class="d-block w-100 h-100">
                    </div>
                </div>
                <div class="carousel-item text-center" style="height: 500px">
                    <div style='background-image:url("https://vietstudio.vn/wp-content/uploads/2019/07/xu-huong-thiet-ke-shop-kinh-doanh-quan-ao-2019-4.jpg");
                                background-size: cover; background-repeat: no-repeat;'
                         class="d-block w-100 h-100">
                    </div>
                </div>
                <div class="carousel-item text-center" style="height: 500px">
                    <div style='background-image:url("https://d33hx0a45ryfj1.cloudfront.net/additional/Dynamic/media/00b7ed6f04770e92?w=1600&h=900&crop=1");
                                background-size: cover; background-repeat: no-repeat;'
                         class="d-block w-100 h-100">
                    </div>
                </div>
                <div class="carousel-item text-center" style="height: 500px">
                    <div style='background-image:url("https://vietstudio.vn/wp-content/uploads/2019/07/xu-huong-thiet-ke-shop-kinh-doanh-quan-ao-2019-4.jpg");
                                background-size: cover; background-repeat: no-repeat;'
                         class="d-block w-100 h-100">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="card mt-2">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-header m-0 bg-white shadow">Danh mục sản phẩm</div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3 mt-1">
                            <div class="card">
                                <img
                                    src="https://lh3.googleusercontent.com/proxy/zbHx4cq2fgYtvR8WAIv7w0V_oyxxjdO8tyEQrRM35mPGhGobUuwVYcrt45iYPqIhOW1DVpIlE3IS2jpWvWFwNFlK6tDOzKISGolw1tEcmuAsnnaiWdkSHJrigJiJQ6gGVX0zJQ"
                                    class="card-img-top img-fluid img-thumbnail"
                                    style="height: 200px">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm A</h5>
                                    <p>Lorem ipsum abcl bla alo dlo eld clf mslcms</p>
                                </div>
                                <button class="btn btn-primary">Xem chi tiết</button>
                            </div>
                        </div>
                        <div class="col-3 mt-1">
                            <div class="card">
                                <img
                                    src="https://lh3.googleusercontent.com/proxy/zbHx4cq2fgYtvR8WAIv7w0V_oyxxjdO8tyEQrRM35mPGhGobUuwVYcrt45iYPqIhOW1DVpIlE3IS2jpWvWFwNFlK6tDOzKISGolw1tEcmuAsnnaiWdkSHJrigJiJQ6gGVX0zJQ"
                                    class="card-img-top img-fluid img-thumbnail"
                                    style="height: 200px">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm A</h5>
                                    <p>Lorem ipsum abcl bla alo dlo eld clf mslcms</p>
                                </div>
                                <button class="btn btn-primary">Xem chi tiết</button>
                            </div>
                        </div>
                        <div class="col-3 mt-1">
                            <div class="card">
                                <img
                                    src="https://lh3.googleusercontent.com/proxy/zbHx4cq2fgYtvR8WAIv7w0V_oyxxjdO8tyEQrRM35mPGhGobUuwVYcrt45iYPqIhOW1DVpIlE3IS2jpWvWFwNFlK6tDOzKISGolw1tEcmuAsnnaiWdkSHJrigJiJQ6gGVX0zJQ"
                                    class="card-img-top img-fluid img-thumbnail"
                                    style="height: 200px">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm A</h5>
                                    <p>Lorem ipsum abcl bla alo dlo eld clf mslcms</p>
                                </div>
                                <button class="btn btn-primary">Xem chi tiết</button>
                            </div>
                        </div>
                        <div class="col-3 mt-1">
                            <div class="card">
                                <img
                                    src="https://lh3.googleusercontent.com/proxy/zbHx4cq2fgYtvR8WAIv7w0V_oyxxjdO8tyEQrRM35mPGhGobUuwVYcrt45iYPqIhOW1DVpIlE3IS2jpWvWFwNFlK6tDOzKISGolw1tEcmuAsnnaiWdkSHJrigJiJQ6gGVX0zJQ"
                                    class="card-img-top img-fluid img-thumbnail"
                                    style="height: 200px">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm A</h5>
                                    <p>Lorem ipsum abcl bla alo dlo eld clf mslcms</p>
                                </div>
                                <button class="btn btn-primary">Xem chi tiết</button>
                            </div>
                        </div>
                        <div class="col-3 mt-1">
                            <div class="card">
                                <img
                                    src="https://lh3.googleusercontent.com/proxy/zbHx4cq2fgYtvR8WAIv7w0V_oyxxjdO8tyEQrRM35mPGhGobUuwVYcrt45iYPqIhOW1DVpIlE3IS2jpWvWFwNFlK6tDOzKISGolw1tEcmuAsnnaiWdkSHJrigJiJQ6gGVX0zJQ"
                                    class="card-img-top img-fluid img-thumbnail"
                                    style="height: 200px">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm A</h5>
                                    <p>Lorem ipsum abcl bla alo dlo eld clf mslcms</p>
                                </div>
                                <button class="btn btn-primary">Xem chi tiết</button>
                            </div>
                        </div>
                        <div class="col-3 mt-1">
                            <div class="card">
                                <img
                                    src="https://lh3.googleusercontent.com/proxy/zbHx4cq2fgYtvR8WAIv7w0V_oyxxjdO8tyEQrRM35mPGhGobUuwVYcrt45iYPqIhOW1DVpIlE3IS2jpWvWFwNFlK6tDOzKISGolw1tEcmuAsnnaiWdkSHJrigJiJQ6gGVX0zJQ"
                                    class="card-img-top img-fluid img-thumbnail"
                                    style="height: 200px">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm A</h5>
                                    <p>Lorem ipsum abcl bla alo dlo eld clf mslcms</p>
                                </div>
                                <button class="btn btn-primary">Xem chi tiết</button>
                            </div>
                        </div>
                        <div class="col-3 mt-1">
                            <div class="card">
                                <img
                                    src="https://lh3.googleusercontent.com/proxy/zbHx4cq2fgYtvR8WAIv7w0V_oyxxjdO8tyEQrRM35mPGhGobUuwVYcrt45iYPqIhOW1DVpIlE3IS2jpWvWFwNFlK6tDOzKISGolw1tEcmuAsnnaiWdkSHJrigJiJQ6gGVX0zJQ"
                                    class="card-img-top img-fluid img-thumbnail"
                                    style="height: 200px">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm A</h5>
                                    <p>Lorem ipsum abcl bla alo dlo eld clf mslcms</p>
                                </div>
                                <button class="btn btn-primary">Xem chi tiết</button>
                            </div>
                        </div>
                        <div class="col-3 mt-1">
                            <div class="card">
                                <img
                                    src="https://lh3.googleusercontent.com/proxy/zbHx4cq2fgYtvR8WAIv7w0V_oyxxjdO8tyEQrRM35mPGhGobUuwVYcrt45iYPqIhOW1DVpIlE3IS2jpWvWFwNFlK6tDOzKISGolw1tEcmuAsnnaiWdkSHJrigJiJQ6gGVX0zJQ"
                                    class="card-img-top img-fluid img-thumbnail"
                                    style="height: 200px">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm A</h5>
                                    <p>Lorem ipsum abcl bla alo dlo eld clf mslcms</p>
                                </div>
                                <button class="btn btn-primary">Xem chi tiết</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Xem chi tất cả</button>
            </div>
        </div>
    </div>
</section>
<footer class="shadow mt-3">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <img
                    src="https://image.freepik.com/free-vector/online-shop-store-e-commerce-sale-msacot-cute-logo_8169-157.jpg"
                    class="img-fluid img-thumbnail" height="200" width="200">
                    <h5>Address: Somewhere on the earth, Somewhere you can find it in an easy way</h5>
                    <h5>Mob: it's an number, tel: it's also an number</h5>
                    <p>We bring the best services for you.</p>
            </div>
            <div class="col-3">
                <div class="media">

                    <div class="media-body"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
