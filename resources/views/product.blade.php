@extends('backend.layout')


@section('content')
    <div class="container  p-md-0 ">


        <div id="product-details">
            <div class="title">
                <p> نام کالا: {{$product->title}}</p>


                <div class="flipTimer">

                    <div class="hours"></div>
                    <div class="minutes"></div>
                    <div class="seconds"></div>
                </div>
            </div>{{-- end of title--}}
            <div id="detailes">
                <div class="detailes-right">


                    @foreach($product->photos as $photo)
                        <div id="zoomProduct" class="right-img zoom">
                            <img style="max-width: 350px;max-height: 350px;" src="{{$photo->path}}"
                                 data-zoom-image="{{$photo->path}}">
                        </div>
                    @endforeach

                    {{--کد جاوا اسکریپت در پایین هم دارد(zoom)--}}
                    {{--  <ul>
                          @foreach($product->photos as $photo)
                          <li><img style="width: 75px;height: 70px;" src="{{$photo->path}}"></li>
                          @endforeach
                          <li><img src="{{$photo->path}}"></li>
                          <li><img src="{{$photo->path}}"></li>
                          <li><img src="{{$photo->path}}"></li>
                      </ul>--}}
                </div>
                <div class="detailes-left">

                    <div class="title">

                        {{$product->title}}

                        <div class="emtiaz">

                            <div class="gray">
                                <div class="red"></div>
                            </div>

                        </div>{{--  div emtiaz--}}


                    </div>
                    <div class="right">
                        <p>انتخاب رنگ</p>
                        <ul class="colors">
                            <li>
                                مشکی
                                <span class=""
                                      style="background-color: black"></span>
                            </li>
                            <li>
                                قرمز
                                <span class=""
                                      style="background-color: red"></span>
                            </li>
                            <li>
                                سفید
                                <span class=""
                                      style="background-color: white"></span>
                            </li>

                        </ul>


                        <h4 class="garanty">انتخاب گارانتی</h4>

                        <div class="garanties">
                            <span class="select-garanty">             18 ماه گرانتی هما تلکام


                                    <ul class="garanty-list">
                                        <li>گارانتی شماره 1</li>
                                        <li>گارانتی شماره 2</li>
                                    </ul>

                            </span>
                        </div>{{--garanties--}}

                        <div class="price"
                             style="position: relative;top:230px;text-decoration: line-through">
                            <span style="font-size: 9pt;">قیمت:</span>
                            <span style="font-size: 10pt;margin-left: 5px;">{{$product->price}}</span>
                            <span style="font-size: 8pt;margin-left: 5px;">تومان</span>

                            <span id="discount">
                                <span class="rightspan">تخفیف</span>
                                <span class="leftspan">{{$product->discount_price}}     تومان</span>
                            </span>

                        </div>
                        <div class="new-price"
                             style="position: relative;top:280px;font-weight:bolder">

                            <span style="font-size: 12pt;color:green; margin-left: 10px;">قیمت برای شما :</span>

                            <span style="font-size: 15pt;margin-left: 15px;color:green">{{($product->price)-($product->discount_price)}}</span>

                            <span style="font-size: 9pt;margin-left: 5px;color:green">تومان</span>


                        </div>
                        <div style="float:left;position: relative;left: 2px;top: 309px;width: 150px;height: 25px;">

                            <span id="basket-icon">
                            </span>

                            <a href="{{route('showcart', $product->id)}}" style="width: 130px;font-size: 10pt;left: 0;"
                               class="btn btn-success
                            position-absolute">افزودن به سبد
                                خرید
                            </a>

                        </div>
                    </div>
                    <div class="left"></div>
                </div>
            </div>
        </div>{{--<div id="product-details"--}}

        <div id="introduction">
            <h4 class="title-introduction">معرفی اجمالی محصول</h4>
            <a class="more">بیشتر</a>
            <p style="  direction: rtl !important;">

                محل قرار گیری توضیحات محصول

            </p>

        </div>
        <style>

        </style>

        <ul class="tabs">
            <li class="tab ">نقد وبررسی تخصصی</li>
            <li class="tab">مشخصات فنی</li>
            <li class="tab active">نظرات کاربران</li>
            <li class="tab">پرسش وپاسخ</li>
        </ul>

        <div class="tabchild">
            <section>تب 1
                <style>
                    .tabchild item p {
                        font-size: 9pt;
                        margin-right: 40px;
                    }
                </style>


                <div class="item">
                    <h4>طراحی وساخت</h4>
                    <p>توضیحات طراحی وساخت</p>
                </div>
                <div class="item">
                    <h4>نمایشگر</h4>
                    <p>توضیحات نمایشگر</p>

                </div>

                <div class="item">
                    <h4>جمع بندی</h4>
                    <p>توضیحات جمع بندی</p>

                </div>


            </section>


            <section class="section-fanni">
                تب 2
                <h4>مشخصات فنی</h4>
                <div class="row-fanni">
                    <div class="row-fanni-right">سی پی یو</div>
                    <div class="row-fanni-left">2 هسته ای</div>
                </div>
                <div class="row-fanni">
                    <div class="row-fanni-right">فلت</div>
                    <div class="row-fanni-left"> تی اف ای</div>
                </div>
                <div class="row-fanni">
                    <div class="row-fanni-right">رم</div>
                    <div class="row-fanni-left">16 گیگ داخلی</div>
                </div>
                {{-----------------------------------------------}}
                <h4>مشخصات فیزیکی</h4>

                <div class="row-fanni">
                    <div class="row-fanni-right">سی پی یو</div>
                    <div class="row-fanni-left">2 هسته ای</div>
                </div>
                <div class="row-fanni">
                    <div class="row-fanni-right">فلت</div>
                    <div class="row-fanni-left"> تی اف ای</div>
                </div>
                <div class="row-fanni">
                    <div class="row-fanni-right">رم</div>
                    <div class="row-fanni-left">16 گیگ داخلی</div>
                </div>
            </section>
            <section style="display:block;">
                3 تب

                <div id="comments">
                    <div id="comments-result">
                        <p style="direction: rtl;font-size: 12pt;">امتیاز کاربران به:

                            <span style="direction: rtl;font-size: 10pt;color:#aaa"> گوشی سامسونگ xzyz </span>
                        </p>


                        <style>


                        </style>

                        <div class="rate">
                            <div class="rate-title">ارزش خرید به نسبت قیمت</div>
                            <div class="rate-value">
                                <ul>
                                    <li>
                                        <span class="full"></span>
                                    </li>
                                    <li>
                                        <span class="full"></span>
                                    </li>
                                    <li>
                                        <span class="full"></span>
                                    </li>
                                    <li>
                                        <span class="full"></span>
                                    </li>
                                    <li>
                                        <span class="full"
                                              style=" width: 40%"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="rate">
                            <div class="rate-title">نواوری</div>
                            <div class="rate-value">
                                <ul>
                                    <li>
                                        <span class="full"></span>
                                    </li>
                                    <li>
                                        <span class="full"></span>
                                    </li>
                                    <li>
                                        <span class="full"></span>
                                    </li>
                                    <li>
                                        <span class="full"
                                              style="width: 20%"></span>
                                    </li>
                                    <li>
                                        <span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div id="comments-send">
                        <p style="font-size: 13pt;font-family: yekan;font-weight: bold;
                        margin: 40px ;">شما هم می
                            توانید نظر خودرا
                            ارسال کنید</p>
                        <p style="font-size: 10pt;direction: rtl;margin-right: 50px;color:#ccc">نظر من در مورد این کالا
                            ....
                            .</p>

                        <button class=" orderbtn btn btn-primary">

                            ارسال نظر
                        </button>


                    </div>
                    <h4 style="float:right;margin: 50px 0;font-size: 13pt;font-weight: bold;">نظرات کاربران</h4>
                    <hr>

                    <style>

                    </style>


                    <div class="comment">
                        <div class="comment-header">
                            <div class="right">
                                نام کاربر

                                <span style="font-size: 8pt;margin-right: 50px;color:#ccc">18 فروردین 99</span>
                            </div>
                            <div class="left">

                                آیا این نظر برای شما مفید بود؟

                                <span class="like">
                                    <i></i>
                                    <span>
                                        20
                                    </span>
                                </span>
                                <span class="dislike">
                                     <i></i>
                                    <span>
                                        15
                                    </span>
                                </span>
                            </div>
                        </div>

                        <style>

                            .comment-content-right {
                                direction: rtl;
                                float: right;
                                margin: 40px;
                                width: 435px;
                            }
                        </style>


                        <div class="comment-content">

                            <div class="comment-content-right">


                                <div class="rate">
                                    <div class="rate-title">بروز بودن کالا</div>
                                    <div class="rate-value">
                                        <ul>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"
                                                      style=" width: 40%"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="rate">
                                    <div class="rate-title">طراحی ظاهر</div>
                                    <div class="rate-value">
                                        <ul>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"
                                                      style=" width: 10%"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <style>


                            </style>


                            <div class="comment-content-left">
                                <div class="top">
                                    <p>حیف که دو سیم کارته نیست</p>
                                </div>
                                <div class="middle">
                                    <span class="ghovat">
                                        <p>نقاط قوت</p>
                                    همه چی
                                    </span>
                                    <span class="zaf">
                                        <p>نقاط ضعف</p>
                                    بدنه ضعیف
                                    </span>
                                </div>
                                <div class="bottom">
                                    <p>


                                        کالای بسیار خوبی است
                                        کالای بسیار خوبی است
                                        کالای بسیار خوبی است



                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="comment">
                        <div class="comment-header">
                            <div class="right">
                                نام کاربر

                                <span style="font-size: 8pt;margin-right: 50px;color:#ccc">18 فروردین 99</span>
                            </div>
                            <div class="left">

                                آیا این نظر برای شما مفید بود؟

                                <span class="like">
                                    <i></i>
                                    <span>
                                        20
                                    </span>
                                </span>
                                <span class="dislike">
                                     <i></i>
                                    <span>
                                        15
                                    </span>
                                </span>
                            </div>
                        </div>

                        <style>

                        </style>


                        <div class="comment-content">

                            <div class="comment-content-right">


                                <div class="rate">
                                    <div class="rate-title">بروز بودن کالا</div>
                                    <div class="rate-value">
                                        <ul>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"
                                                      style=" width: 40%"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="rate">
                                    <div class="rate-title">طراحی ظاهر</div>
                                    <div class="rate-value">
                                        <ul>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"></span>
                                            </li>
                                            <li>
                                                <span class="full"
                                                      style=" width: 10%"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <style>



                            </style>


                            <div class="comment-content-left">
                                <div class="top">
                                    <p>حیف که دو سیم کارته نیست</p>
                                </div>
                                <div class="middle">
                                    <span class="ghovat">
                                        <p>نقاط قوت</p>
                                    همه چی
                                    </span>
                                    <span class="zaf">
                                        <p>نقاط ضعف</p>
                                    بدنه ضعیف
                                    </span>
                                </div>
                                <div class="bottom">
                                    <p>


                                        کالای بسیار خوبی است
                                        کالای بسیار خوبی است
                                        کالای بسیار خوبی است
                                        کالای بسیار خوبی است
                                        کالای بسیار خوبی است


                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </section>
            <style>


            </style>
            <section class="questions">
                تب 4

                <div>
                    <h4>پرسش خود را مطرح کنید.</h4>
                </div>
                <div>
                    <textarea placeholder="متن پرسش خود را اینجا وارد کنید...."></textarea>
                </div>
                <div>
                    <button class="orderbtn btn btn-primary">
                        ثبت پرسش
                    </button>
                    <hr>

                    <h4 style="width: 100%;float: left;">پرسش ها و پاسخ ها</h4>

                    <div class="question">
                        <div class="question-header">
                            پرسش
                            <span style="
                                    float: left;
                                    font-size: 8pt;
                                    padding-left: 20px;
                                ">
                                    خالد قیطاسی - 19 فروردین 99
                            </span>

                        </div>
                        <div class="question-content">
                            <p>
                                آیا کسانی که این کالا را خریده اند از آن راضی هستند؟
                            </p>
                        </div>
                    </div>


                    <div class="question">
                        <div class="question-header">
                            پرسش
                            <span style="
                                    float: left;
                                    font-size: 8pt;
                                    padding-left: 20px;
                                ">
                                    خالد قیطاسی - 19 فروردین 99
                            </span>

                        </div>
                        <div class="question-content">
                            <p>
                                آیا کسانی که این کالا را خریده اند از آن راضی هستند؟
                            </p>
                        </div>
                    </div>



                </div>
            </section>

        </div>
    </div>
    {{--   div container--}}

    <script>
        $('#zoomProduct').elevateZoom({

            zoomType: "inner",
            cursor: "crosshair",
            tint:true,
            tintColour:'#F90',
            tintOpacity:0.5

        }). alert('zoomed');

    </script>
@endsection









