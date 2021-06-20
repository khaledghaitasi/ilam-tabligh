<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('mycss/mystyle.css')}}">

    <script src="{{asset('jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>


    {{--

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    --}}

    @livewireStyles{{-- or this command-->          <livewire:styles />             --}}
</head>
<body>
<main class="mt-2">
    <div class="container border-warning " style="background-color: #fff;">
        <div class="myheader row bg-info rounded">
            <a href="{{route('login')}}">
                <span id="vorood" class="bg-warning float-md-right rounded-circle ml-2 ">ورود</span>
            </a>
            <a href="{{route('register')}}">
            <span id="sabtnam"  class="bg-light float-md-right rounded-circle ml-2">ثبت نام</span>
            </a>
            <div style="position: absolute;left: 300px;bottom: 5px;" class="d-none d-md-block pl-3 ">
                <?php echo date('Y/m/d'); ?>

            </div>
{{--
            دستورات جی کوئری ساعت در پایین صفحه   id=demo
--}}
            <div style="position: absolute;left: 420px;bottom: -12px;" class="pl-3 ">
                    <p class="d-none d-md-block" id="myclock"></p>

            </div>
            <span id="logo" class="rounded d-none d-md-block"><img src="/myimages/logo2.png" alt=""> </span>
        </div>

        {{--        navbar--}}


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  mt-1 rounded" role="navigation">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">خانه</a>

                {{--
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                --}}
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
                    {{--<span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>--}}
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mymenu">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">محصولات</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">اصناف</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                               id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                آدرس صنف
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="#">1</a></li>
                                <li><a class="dropdown-item" href="#">2</a></li>
                                <li><a class="dropdown-item" href="#">3</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">1</a></li>
                            </ul>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">امتیاز اصناف</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control" type="search" placeholder="جستجو کنید ..." aria-label="search">
                        <button class="btn btn-outline-success" type="submit">جستجو</button>
                    </form>
                </div>
            </div>
            {{--end of container fluid--}}
        </nav>

        {{--        end of navbar--}}


        <section class="main-section col-md-9 bg-light border-info rounded mt-1 float-sm-right pr-0 mb-3">

            <div class=" bg-warning mb-2 ml-0">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100" src="/myimages/15.jpg" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" src="/myimages/32.jpg" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" src="/myimages/33.jpg" alt="New York">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" src="/myimages/52.jpg" alt="New York">
                        </div>

                    </div>

                    <!-- Left and right controls -->

                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

            <div class="col-xs-6 float-right rounded text-danger text-center"
                 style="height: 221px;width: 49%;margin-right: 13px;background:rgba(0,0,255,0.03);line-height: 210px;">
                <p class="m-auto">جایی برای دیده شدن</p>
            </div>
            <div class="col-xs-6  float-right rounded text-primry text-center"
                 style="height:221px;width: 49%;background:rgba(0,255,0,0.03);line-height: 210px;">
                <p>جایی برای دیده شدن </p>
            </div>
        </section>
        <aside class="aside1 h-75 mt-1 col-md-3  float-sm-left rounded mb-3">
            <div class="row  bg-info rounded mb-md-1">
                <p>اینجا محل تبلیغات شماست به کسب وکار خود رونق ببخشید</p>
            </div>
            <div class="row  bg-success rounded mb-md-1">
                <p>در اینجا می توانید دیده شوید</p>
            </div>
            <div class="row  bg-warning rounded mb-md-1">
                <p>مشتریان به دنبال دیدن کالای شما هستند</p>
            </div>
            <div class="row  bg-primary rounded mb-md-1">
                <p>233*63</p>
            </div>

            <div class="dropdown-divider"></div>

            <div class="row  bg-info rounded mb-md-1">
                <p>اینجا محل تبلیغات شماست به کسب وکار خود رونق ببخشید</p>
            </div>
            <div class="row  bg-success rounded mb-md-1">
                <p>در اینجا می توانید دیده شوید</p>
            </div>
            <div class="row  bg-warning rounded mb-md-1">
                <p>مشتریان به دنبال دیدن کالای شما هستند</p>
            </div>
            <div class="row  bg-primary rounded mb-md-1">
                <p>233*63</p>
            </div>
        </aside>

        <div class="row rounded w-100" style="height: 40px; background-color: rgba(50,125,125,0.1);margin:10px 0;">
            <p class="ml-3 float-left  text-right text-dark "
            style="line-height: 35px;font-size: 15pt;font-weight: normal;"> مشاهده همه محصولات</p>
        </div>


        <!--Carousel Wrapper-->
        <div style="margin-top: 0;" id="multi-item-example"
             class="p-3 carousel slide carousel-multi-item" data-ride="carousel">

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner bg-primary rounded" role="listbox">

                <!--First slide-->
                <div class="carousel-item active p-5">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary" href="">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item p-5">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Second slide-->

                <!--Third slide-->
                <div class="carousel-item p-5">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Third slide-->
                <div  class="container float-right">
                    <a style="width: 50px;" class="carousel-control-next" href="#multi-item-example" data-slide="next">
                        <span style="position: absolute;left: 15px; " class="carousel-control-prev-icon"></span>
                    </a>
                </div>
                <div style="height: 50px;width:50px; position: absolute;top: 0;bottom: 0;margin: auto 0;"  class="container float-right">

                    <a style="display:block;height: 50px; width: 50px;padding-top: 15px;" class="carousel-control-prev" href="#multi-item-example" data-slide="prev">
                        <span style="position: absolute;right: 15px" class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->

    </div>{{--    end of container--}}
</main>

<footer style="height:200px;width: 100% " class="bg-light mt-3 mb-3">
    <div class="container bg-dark rounded p-3"
         style="width: 100%; height: 100%; color:white;text-align: right;direction: rtl;">
        <div class="row   ml-4">
            <p class=""><a style="cursor:pointer;font-family:'Byekan'">ارتباط با ما</a></p>
        </div>
        <div class="row ml-4"><p><a style="cursor:pointer;font-family:'Byekan'">قوانین و مقررات</a></p></div>
        <div class="row ml-4"><p><a style="cursor:pointer;font-family:'Byekan' ;font-weight: bold;">در باره ما</a></p></div>
    </div>
</footer>



@livewireScripts{{-- or this command ->   <livewire:scripts />          --}}
</body>
<script>
    var myVar = setInterval(myTimer, 1000);
    function myTimer() {
        var d = new Date();
        document.getElementById("myclock").innerHTML = d.toLocaleTimeString();
    }
</script>
</html>
