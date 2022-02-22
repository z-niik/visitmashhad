@extends('layouts.master')



@section('content')

    <!-- section start -->
    <section class="home_section p-0">
        <div class="home home-padding">
            <img src="{{ asset('/assets/images/flights/banner.jpg') }}" class="bg-img img-fluid" alt="">
            <div class="animation-bg">
                <div class="container custom-container mix-layout-section">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class=" home-content mix-layout smaller-content">
                                <div class="bg-transparent">
                                    <div id="sticky_cls">
                                        <div class="search-panel">
                                            <h2 class="title-top text-white">رزرو هتل و هتل آپارتمان های مشهد</h2>
                                            <div class="search-section">
                                                <div class="search-box rounded10">
                                                    <div class="left-part">
                                                        <div class="search-body title-hotel">
                                                            <h6>مقصد</h6>
                                                            <input type="text" name="text" placeholder="شهر مقصد" class="form-control ">
                                                        </div>
                                                        <div class="search-body">
                                                            <h6>تاریخ ورود</h6>
                                                            <input placeholder="18 april" id="datepicker" />
                                                        </div>
                                                        <div class="search-body">
                                                            <h6>تاریخ خروج</h6>
                                                            <input placeholder="20 april" id="datepicker1" />
                                                        </div>
                                                        <div class="search-body">
                                                            <h6>تعداد بزرگسالان</h6>
                                                            <div class="qty-box">
                                                                <div class="input-group">
                                                                    <span class="input-group-prepend">
                                                                        <button type="button"
                                                                            class="btn quantity-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fas fa-chevron-down"></i>
                                                                        </button>
                                                                    </span>
                                                                    <input type="text" name="quantity" class="form-control input-number" value="1">
                                                                    <span class="input-group-prepend">
                                                                        <button type="button"
                                                                            class="btn quantity-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fas fa-chevron-up"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="search-body btn-search">
                                                            <div class="right-part">
                                                                <a href="#" class="btn btn-solid color1">جستجو</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


    <!-- tour section start -->
    <section class="">
        <div class="tourSection ratio3_2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-1">
                            <h2 class="pt-0">top offers</h2>
                        </div>
                        <div class="flight-5 no-arrow">
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/offer/1.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>hotel booking</h3>
                                        <h6>Avail Hot Deals On Hotel Booking To Any Place</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/offer/2.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>upto $400</h3>
                                        <h6>instant discount on domestic hotels</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/offer/3.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>holiday booking</h3>
                                        <h6>weekend sale for holiday bookings</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/offer/4.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>food order</h3>
                                        <h6>complimantary breakfast. use code RICAFOOD</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/offer/5.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>50% cashback</h3>
                                        <h6>50% cashback on every cab bookings</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour section end -->


    <!-- tour section start -->
    <section class="section-b-space">
        <div class="tourSection ratio_asos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-1">
                            <h2 class="pt-0">most popular destination</h2>
                        </div>
                        <div class="slide-6 no-arrow">
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/tour/vector/8.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>south africa</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/tour/vector/7.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>india</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/tour/vector/9.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>australia</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/tour/vector/10.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>europe</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/tour/vector/11.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>america</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('/assets/images/tour/vector/12.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="tourContent">
                                        <h3>japan</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour section end -->


    <!-- how to start section start -->
    <section class="small-section process-steps icon-large">
        <img src="{{ asset('/assets/images/tour/background/15.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="container">
            <div class="title-1 detail-title">
                <h2 class="pt-0">super easy booking</h2>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam at, aut commodi corporis dolorum ducimus labore magnam mollitia natus porro possimus quae sit tenetur veniam veritatis voluptate voluptatem!</p>
            </div>
            <div class="step-bg">
                <div class="row">
                    <div class="col-md-3">
                        <div class="step-box">
                            <div>
                                <img src="{{ asset('/assets/images/tour/vector/13.png') }}" class="img-fluid blur-up lazyload filter-none" alt="">
                                <h4>explore</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="step-box">
                            <div>
                                <img src="{{ asset('/assets/images/tour/vector/14.png') }}" class="img-fluid blur-up lazyload filter-none" alt="">
                                <h4>Get Quotes</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="step-box">
                            <div>
                                <img src="{{ asset('/assets/images/tour/vector/15.png') }}" class="img-fluid blur-up lazyload filter-none" alt="">
                                <h4>customize</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="step-box">
                            <div>
                                <img src="{{ asset('/assets/images/tour/vector/16.png') }}" class="img-fluid blur-up lazyload filter-none" alt="">
                                <h4>book & enjoy</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bird-animation">
            <div class="bird-container bird-container--one">
                <div class="bird bird--one"></div>
            </div>
            <div class="bird-container bird-container--two">
                <div class="bird bird--two"></div>
            </div>
            <div class="bird-container bird-container--three">
                <div class="bird bird--three"></div>
            </div>
            <div class="bird-container bird-container--four">
                <div class="bird bird--four"></div>
            </div>
        </div>
    </section>
    <!-- how to start section end -->


    <!-- blog section start -->
    <section class="blog-section section-b-space">
        <div class="container">
            <div class="slide-2  no-arrow ">
                <div>
                    <div class="blog-box">
                        <div class="img-part">
                            <div>
                                <img src="{{ asset('/assets/images/tour/blog/1.jpg') }}" class="img-fluid blur-up lazyload w-100" alt="">
                            </div>
                            <div class="blog-date">
                                <div>
                                    <h5>01</h5>
                                    <h6>jan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div>
                                <h5>posted by: Julia Holmes</h5>
                                <p>Lorem Ipsum is simply the of the printing and dummy text of typesetting..</p>
                                <h6>Lorem Ipsum is simply dummy since..</h6>
                                <a href="#" class="btn btn-curve">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog-box">
                        <div class="img-part">
                            <div>
                                <img src="{{ asset('/assets/images/tour/blog/2.jpg') }}" class="img-fluid blur-up lazyload w-100" alt="">
                            </div>
                            <div class="blog-date">
                                <div>
                                    <h5>24</h5>
                                    <h6>feb</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div>
                                <h5>posted by: Julia Holmes</h5>
                                <p>Lorem Ipsum is simply the of the printing and dummy text of typesetting..</p>
                                <h6>Lorem Ipsum is simply dummy since..</h6>
                                <a href="#" class="btn btn-curve">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog-box">
                        <div class="img-part">
                            <div>
                                <img src="{{ asset('/assets/images/tour/blog/3.jpg') }}" class="img-fluid blur-up lazyload w-100" alt="">
                            </div>
                            <div class="blog-date">
                                <div>
                                    <h5>27</h5>
                                    <h6>aug</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div>
                                <h5>posted by: Julia Holmes</h5>
                                <p>Lorem Ipsum is simply the of the printing and dummy text of typesetting..</p>
                                <h6>Lorem Ipsum is simply dummy since..</h6>
                                <a href="#" class="btn btn-curve">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->


    <!-- subscribe section start -->
    <section class="subscribe_section medium-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="subscribe-detail">
                        <div>
                            <h2>subscribe our news <span>our news</span></h2>
                            <p>Subscribe and receive our newsletters to follow the news about our fresh and fantastic products</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="input-section">
                        <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Recipient's username">
                        <a href="#" class="btn btn-rounded btn-sm color1">subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--subscribe section end -->


    @endsection


