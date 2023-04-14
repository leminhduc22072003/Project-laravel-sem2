@extends('layouts.layout-main.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 href="{{route('client.main')}}" class="display-4 text-white text-uppercase" >Trang chủ</h3>
            </div>
        </div>
    </div>
    </div>
    <!-- Header End -->
    <!-- Workflow @@==-->
    <div class="container typeword">
        <div class="my-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb rounded-0 px-0 py-2">
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{route('client.main')}}"
                           class="text-truncate text-info fondsize"
                           title="Trang chủ">Trang chủ</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!--Slider show-->
    <div id="slider">
        <div id="headerSlider" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators bg-dark">
                <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                <li data-target="#headerSlider" data-slide-to="1"></li>
                <li data-target="#headerSlider" data-slide-to="2"></li>
                <li data-target="#headerSlider" data-slide-to="3"></li>
                <li data-target="#headerSlider" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active bg-light">
                    <img src="{{asset('client/anh/banner2-1.jpg')}}" class="d-block rounded mx-auto " />
                    <div class="carousel-caption">
                        <!-- <h5>Slogan</h5> -->
                    </div>
                </div>
                <div class="carousel-item bg-light">
                    <img src="{{asset('client/anh/banner4-1.jpg')}}" class="d-block rounded mx-auto " />
                    <div class="carousel-caption">
                        <!-- <h5>Slogan</h5> -->
                    </div>
                </div>
                <div class="carousel-item bg-light">
                    <img src="{{asset('client/anh/banner1-1.jpg')}}" class="d-block rounded mx-auto " />
                    <div class="carousel-caption">
                        <!-- <h5>Slogan</h5> -->
                    </div>
                </div>
                <div class="carousel-item bg-light">
                    <img src="{{asset('client/anh/banner5-1.jpg')}}" class="d-block rounded mx-auto" />
                    <div class="carousel-caption">
                        <!-- <h5>Slogan</h5> -->
                    </div>
                </div>
                <div class="carousel-item bg-light">
                    <img src=" {{asset('client/anh/banner6-1.jpg')}}" class="d-block rounded mx-auto" />
                    <div class="carousel-caption">
                        <!-- <h5>Slogan</h5> -->
                    </div>
                </div>
            </div>
            <a
                class="carousel-control-prev"
                href="#headerSlider"
                role="button"
                data-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a
                class="carousel-control-next"
                href="#headerSlider"
                role="button"
                data-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--Slide show-->


    <!--Booking start-->
    <section id="vmb-homepage-booking-place">
        <div class="container py-5">
            <div class="vmb-booking-ticket">
                <div id="vmbSearch" class="col-md-12 vmb-search">
                    <div class="ftl-base-header ftl-search-header">
                        <span>TÌM KIẾM CHUYẾN BAY</span>
                    </div>
                    <form method="get" action="{{route("client.chuyen-bay")}}">
                        <ul class="tab-services clearfix">
                            <li class="tab-flight active">
                                <span>Vé máy bay</span>
                            </li>
                        </ul>
{{--                        <ul class="ftlSearch-option">--}}
{{--                            <li name="ftlSearch-trips">--}}
{{--                                <input class="checkmark" type="radio" id="vehicle1" name="vehicle1" value="Bike">--}}
{{--                                <span>Một chiều</span>--}}
{{--                            </li>--}}
{{--                            <li name="ftlSearch-trips">--}}
{{--                                <input class="checkmark" type="radio" id="vehicle1" name="vehicle1" value="Bike">--}}
{{--                                <span> Khứ hồi</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                        <div class="ftlSearch-main">
                            <div class="ftlSearch-flight">
                                <ul class="ftlSearch-list">
                                    <li>
                                        <p>Điểm đi</p>
                                        <div class="ftlSearch-group">
                                            <select name="diemdi" class="form-control" required>
                                                @foreach($thanhpho as $key => $item)
                                                    <option value="{{$item->name}}"> {{$item->name}} ({{$item->mathanhpho}})</option>
                                                @endforeach
                                            </select>
                          <i class="fa fa-angle-down"></i>
                        </span>
                                        </div>
                                    </li>
                                    <li class="button convert"></li>
                                    <li>
                                        <p>Điểm đến</p>
                                        <div class="ftlSearch-group">
                                            <select name="diemden" class="form-control" required>
                                                @foreach($thanhpho as $key => $item)
                                                    <option value="{{$item->name}}"> {{$item->name}} ({{$item->mathanhpho}})</option>
                                                @endforeach
                                            </select>
                          <i class="fa fa-angle-down"></i>
                        </span>
                                        </div>
                                    </li>
                                    <li>
                                        <p>Ngày đi</p>
                                        <div class="ftlSearch-group">
                                            <input
                                                type="date"
                                                id="ftl-date-departure"
                                                class="ftl-search-req"
                                                placeholder="Chọn ngày đi"
                                                name="ngaydi"
                                                required
                                            />
                                            <span class="ftl-input-icon">
                          <i class="fa fa-angle-down"></i>
                        </span>
                                        </div>
                                    </li>
                                    <li class="button"></li>
                                    <li>
                                        <p>Ngày về</p>
                                        <div class="ftlSearch-group">
                                            <input
                                                type="date"
                                                id="ftl-date-return"
                                                class="ftl-search-req"
                                                placeholder="Chọn ngày về"
                                                name="ngayve"
                                            />
                                            <span class="ftl-input-icon"
                                            ><i class="fa fa-angle-down"></i
                                                ></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ftlSearch-wraper">
                                <div class="ftlSearch-posion">
                                    <button type="submit" class="ftlSearch-button">
                                        <i class="fa fa-search"></i> TÌM KIẾM CHUYẾN BAY
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="ftl-clear"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Hot place-->
    <section id="hot-place">
        <div class="container">
            <div class="pt-5 my-3">
                <div class="row favorite">
                    <div class="col-md-12">
                        <h1 class="m-0 favorite-title">Điểm đến yêu thích</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="nav" id="myTab" role="tablist">
                <li class="nav-item p-0 booking-type-tab">
                    <a
                        data-toggle="tab"
                        role="tab"
                        href="#ve-may-bay"
                        class="nav-link p-0 pr-4 hover_yellow active"
                        title="Vé máy bay"
                    >
                        <span class="border-bottom">Vé máy bay</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div
                    class="tab-pane fade show active"
                    id="ve-may-bay"
                    role="tabpanel"
                    aria-labelledby="2-tab"
                >
                    <div class="py-3 row">
                        <div class="col-md-4 my-3">
                            <a
                                class="
                  favorite-item
                  text-body
                  d-flex
                  align-items-center
                  justify-content-between
                "
                                title="Sài Gòn - Hà Nội - Sài Gòn: 1,768,000đ*"
                            >
                                <div>
                                    <img
                                        class="img-fluid favorite-item-thumbnail"
                                        src="{{asset('client/anh/DESTINATION-01.png')}}"
                                        alt="Sài Gòn - Hà Nội - Sài Gòn"
                                        title="Sài Gòn - Hà Nội - Sài Gòn"
                                    />
                                </div>
                                <div class="ml-2 d-flex flex-column flex-grow-1">
                                    <b class="m-0 vmb-book-place pb-1 m-0 line-style"
                                    >Sài Gòn - Hà Nội - Sài Gòn</b
                                    >
                                    <div class="py-1">
                                        <p class="vmb-big-word m-0">
                                            <i class="vmb-small-word pr-2">Từ</i>1,768,000đ*
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 my-3">
                            <a
                                class="
                  favorite-item
                  text-body
                  d-flex
                  align-items-center
                  justify-content-between
                "
                                title="Sài Gòn - Đà Nẵng - Sài Gòn: 1,108,000đ*"
                            >
                                <div>
                                    <img
                                        class="img-fluid favorite-item-thumbnail"
                                        src="{{asset('client/anh/DESTINATION-02.png')}}"
                                        alt="Sài Gòn - Đà Nẵng - Sài Gòn"
                                        title="Sài Gòn - Đà Nẵng - Sài Gòn"
                                    />
                                </div>
                                <div class="ml-2 d-flex flex-column flex-grow-1">
                                    <b class="m-0 vmb-book-place pb-1 m-0 line-style"
                                    >Sài Gòn - Đà Nẵng - Sài Gòn</b
                                    >
                                    <div class="py-1">
                                        <p class="vmb-big-word m-0">
                                            <i class="vmb-small-word pr-2">Từ</i>1,108,000đ*
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 my-3">
                            <a
                                class="
                  favorite-item
                  text-body
                  d-flex
                  align-items-center
                  justify-content-between
                "
                                title="Sài Gòn - Phú Quốc - Sài Gòn: 2,884,000đ*"
                            ><div>
                                    <img
                                        class="img-fluid favorite-item-thumbnail"
                                        src="{{asset('client/anh/DESTINATION-03.png')}}"
                                        alt="Sài Gòn - Phú Quốc - Sài Gòn"
                                        title="Sài Gòn - Phú Quốc - Sài Gòn"
                                    />
                                </div>
                                <div class="ml-2 d-flex flex-column flex-grow-1">
                                    <b class="m-0 vmb-book-place pb-1 m-0 line-style"
                                    >Sài Gòn - Phú Quốc - Sài Gòn</b
                                    >
                                    <div class="py-1">
                                        <p class="vmb-big-word m-0">
                                            <i class="vmb-small-word pr-2">Từ</i>2,884,000đ*
                                        </p>
                                    </div>
                                </div></a
                            >
                        </div>

                        <div class="col-md-4 my-3">
                            <a
                                class="
                  favorite-item
                  text-body
                  d-flex
                  align-items-center
                  justify-content-between
                "
                                title="Sài Gòn - Singapore - Sài Gòn: 2,884,000đ*"
                            ><div>
                                    <img
                                        class="img-fluid favorite-item-thumbnail"
                                        src="{{asset('client/anh/DESTINATION-04.png')}}"
                                        alt="Sài Gòn - Singapore - Sài Gòn"
                                        title="Sài Gòn - Singapore - Sài Gòn"
                                    />
                                </div>
                                <div class="ml-2 d-flex flex-column flex-grow-1">
                                    <b class="m-0 vmb-book-place pb-1 m-0 line-style"
                                    >Sài Gòn - Singapore - Sài Gòn</b
                                    >
                                    <div class="py-1">
                                        <p class="vmb-big-word m-0">
                                            <i class="vmb-small-word pr-2">Từ</i>2,884,000đ*
                                        </p>
                                    </div>
                                </div></a
                            >
                        </div>

                        <div class="col-md-4 my-3">
                            <a
                                class="
                  favorite-item
                  text-body
                  d-flex
                  align-items-center
                  justify-content-between
                "
                                title="Sài Gòn - TaiPei - Sài Gòn: 3,173,000đ*"
                            ><div>
                                    <img
                                        class="img-fluid favorite-item-thumbnail"
                                        src="{{asset('client/anh/DESTINATION-05.png')}}"
                                        alt="Sài Gòn - TaiPei - Sài Gòn"
                                        title="Sài Gòn - TaiPei - Sài Gòn"
                                    />
                                </div>
                                <div class="ml-2 d-flex flex-column flex-grow-1">
                                    <b class="m-0 vmb-book-place pb-1 m-0 line-style"
                                    >Sài Gòn - TaiPei - Sài Gòn</b
                                    >
                                    <div class="py-1">
                                        <p class="vmb-big-word m-0">
                                            <i class="vmb-small-word pr-2">Từ</i>3,173,000đ*
                                        </p>
                                    </div>
                                </div></a
                            >
                        </div>

                        <div class="col-md-4 my-3">
                            <a
                                class="
                  favorite-item
                  text-body
                  d-flex
                  align-items-center
                  justify-content-between
                "
                                title="Sài Gòn - Korea - Sài Gòn: 5,094,000đ*"
                            ><div>
                                    <img
                                        class="img-fluid favorite-item-thumbnail"
                                        src="{{asset('client/anh/DESTINATION-06.png')}}"
                                        alt="Sài Gòn - Korea - Sài Gòn"
                                        title="Sài Gòn - Korea - Sài Gòn"
                                    />
                                </div>
                                <div class="ml-2 d-flex flex-column flex-grow-1">
                                    <b class="m-0 vmb-book-place pb-1 m-0 line-style"
                                    >Sài Gòn - Korea - Sài Gòn</b
                                    >
                                    <div class="py-1">
                                        <p class="vmb-big-word m-0">
                                            <i class="vmb-small-word pr-2">Từ</i>5,094,000đ*
                                        </p>
                                    </div>
                                </div></a
                            >
                        </div>

                        <div class="col-md-4 my-3">
                            <a
                                class="
                  favorite-item
                  text-body
                  d-flex
                  align-items-center
                  justify-content-between
                "
                                title="Sài Gòn - Paris - Sài Gòn: 17,744,000đ*"
                            ><div>
                                    <img
                                        class="img-fluid favorite-item-thumbnail"
                                        src="{{asset('client/anh/DESTINATION-07.png')}}"
                                        alt="Sài Gòn - Paris - Sài Gòn"
                                        title="Sài Gòn - Paris - Sài Gòn"
                                    />
                                </div>
                                <div class="ml-2 d-flex flex-column flex-grow-1">
                                    <b class="m-0 vmb-book-place pb-1 m-0 line-style"
                                    >Sài Gòn - Paris - Sài Gòn</b
                                    >
                                    <div class="py-1">
                                        <p class="vmb-big-word m-0">
                                            <i class="vmb-small-word pr-2">Từ</i>17,744,000đ*
                                        </p>
                                    </div>
                                </div></a
                            >
                        </div>

                        <div class="col-md-4 my-3">
                            <a
                                class="
                  favorite-item
                  text-body
                  d-flex
                  align-items-center
                  justify-content-between
                "
                                title="Sài Gòn - Los Angeles - Sài Gòn: 17,980,000đ*"
                            ><div>
                                    <img
                                        class="img-fluid favorite-item-thumbnail"
                                        src="{{asset('client/anh/DESTINATION-08.png')}}"
                                        alt="Sài Gòn - Los Angeles - Sài Gòn"
                                        title="Sài Gòn - Los Angeles - Sài Gòn"
                                    />
                                </div>
                                <div class="ml-2 d-flex flex-column flex-grow-1">
                                    <b class="m-0 vmb-book-place pb-1 m-0 line-style"
                                    >Sài Gòn - Los Angeles - Sài Gòn</b
                                    >
                                    <div class="py-1">
                                        <p class="vmb-big-word m-0">
                                            <i class="vmb-small-word pr-2">Từ</i>17,980,000đ*
                                        </p>
                                    </div>
                                </div></a
                            >
                        </div>
                        <div class="col-md-4 my-3">
                            <a
                                class="
                  favorite-item
                  text-body
                  d-flex
                  align-items-center
                  justify-content-between
                "
                                title="Sài Gòn - MelBourne - Sài Gòn: 12,993,000đ*"
                            ><div>
                                    <img
                                        class="img-fluid favorite-item-thumbnail"
                                        src="{{asset('client/anh/DESTINATION-09.png')}}"
                                        alt="Sài Gòn - MelBourne - Sài Gòn"
                                        title="Sài Gòn - MelBourne - Sài Gòn"
                                    />
                                </div>
                                <div class="ml-2 d-flex flex-column flex-grow-1">
                                    <b class="m-0 vmb-book-place pb-1 m-0 line-style"
                                    >Sài Gòn - MelBourne - Sài Gòn</b
                                    >
                                    <div class="py-1">
                                        <p class="vmb-big-word m-0">
                                            <i class="vmb-small-word pr-2">Từ</i>12,993,000đ*
                                        </p>
                                    </div>
                                </div></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="
          d-flex
          flex-md-row flex-column
          justify-content-start justify-content-md-between
          align-items-md-center
          favorite-more-info
          text-left
        "
            >
                <div>
                    <a>* Giá đã bao gồm thuế phí</a>
                    <a class="d-none d-md-inline-block ml-5">
                        <i class="ti-layers pr-1"></i> Điều khoản &amp; điều kiện
                    </a>
                </div>
                <div class="my-2 my-md-0">
          <span class="d-flex justify-content-between align-items-center">
            <a class="d-block d-md-none">
              <i class="ti-layers pr-1"></i> Điều khoản &amp; điều kiện
            </a>
            <a class="favorite-more"
            >Xem thêm <i class="ti-angle-right"></i
                ></a>
          </span>
                </div>
            </div>
        </div>
    </section>

    <!--Why choose us-->
    <section id="why-choose-us">
        <div class="container">
            <h1>Tại sao nên chọn chúng tôi?</h1>
            <div class="row why-choose-us">
                <div class="col-md-3 text-center">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('client/anh/support_24-7.png')}}" alt="Hỗ trợ 24/7" />
                    </div>
                    <h3>Hỗ trợ 24/7</h3>
                    <p>Luôn săn sàng tư vấn và giải đáp thắc mắc của Khách hàng 24/7</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('client/anh/gia-ve-tot.png')}}" alt="Gía vé tốt nhất" />
                    </div>
                    <h3>Giá vé tốt nhất</h3>
                    <p>
                        Đảm bảo giá vé máy bay tốt nhất cho nhu cầu đặt mua vé máy bay
                        theo các chặng khác nhau của Khách hàng
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('client/anh/dich-vu-da-nang.png')}}" alt="Dịch vụ đa dạng')}}" />
                    </div>
                    <h3>Dịch vụ đa dạng</h3>
                    <p>
                        Ngoài dịch vụ vé máy bay chung tôi còn có dịch vụ thuê xe và khách
                        sạn phục vụ Khách hàng
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('client/anh/giao-ve-tan-noi.png')}}" alt="Giao vé tận nơi" />
                    </div>
                    <h3>Giao vé tận nơi</h3>
                    <p>Giao vé tận nơi nhanh chóng, uy tín, nhận vé mới thanh toán</p>
                </div>
            </div>
        </div>
    </section>
    <section id="donors">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12 my-2">
                    <p class="section-title my-3" title="Aviation partner">
                        Aviation partner
                    </p>
                    <div
                        class="
              d-flex
              flex-nowrap flex-md-wrap
              overflow-auto
              align-items-center
              my-3
            "
                    >
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Bamboo Airways"
                            ><img src="{{asset('client/anh/bamboo.png')}}" alt="Bamboo Airways"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="VietNam Airlines"
                            ><img
                                    src="{{asset('client/anh/VietnamAirlines.jpg')}}"
                                    alt="VietNam Airlines"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="vietjet"
                            ><img src="{{asset('client/anh/vietjet.png')}}" alt="vietjet"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Cathay"
                            ><img src="{{asset('client/anh/cathay.png')}}" alt="Cathay"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Korean Airline"
                            ><img src="{{asset('client/anh/korean.png')}}" alt="Korean Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Delta Airline"
                            ><img src="{{asset('client/anh/delta.png')}}" alt="Delta Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="China Airline"
                            ><img src="{{asset('client/anh/china-airlines.png')}}" alt="China Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Philippine Airline"
                            ><img
                                    src="{{asset('client/anh/philippine-airlines.png')}}"
                                    alt="Philippine Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Thai Airline"
                            ><img src="{{asset('client/anh/thai.png')}}" alt="Thai Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="JetStar Airline"
                            ><img src="{{asset('client/anh/jetstar.png')}}" alt="JetStar Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Eva Airline"
                            ><img src="{{asset('client/anh/eva-air.png')}}" alt="Eva Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Emirates Airline"
                            ><img src="{{asset('client/anh/emirates.png')}}" alt="Emirates Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="American Airline"
                            ><img
                                    src="{{asset('client/anh/american-airlines.png')}}"
                                    alt="American Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Ana Airline"
                            ><img src="{{asset('client/anh/ana.png')}}" alt="Ana Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="United Airline"
                            ><img src="{{asset('client/anh/united-airlines.png')}}" alt="United Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Japan Airline"
                            ><img src="{{asset('client/anh/japan.png')}}" alt="Japan Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Quatar Airline"
                            ><img src="{{asset('client/anh/quatar.png')}}" alt="Quatar Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Malaysia Airline"
                            ><img src="{{asset('client/anh/malaysia.png')}}" alt="Malaysia Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="France Airline"
                            ><img src="{{asset('client/anh/air-france.png')}}" alt="France Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Canada Airline"
                            ><img src="{{asset('client/anh/air-canada.png')}}" alt="Canada Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="Turkish Airline"
                            ><img
                                    src="{{asset('client/anh/turkish-airlines.png')}}"
                                    alt="Turkish Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="HongKong Airline"
                            ><img src="{{asset('client/anh/hong-kong.png')}}" alt="HongKong Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="China Southen Airline"
                            ><img
                                    src="{{asset('client/anh/china-southen.png')}}"
                                    alt="China Southen Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="China Eastern Airline"
                            ><img
                                    src="{{asset('client/anh/china-eastern.png')}}"
                                    alt="China Eastern Airline"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-5">
                            <a title="China Airline"
                            ><img src="{{asset('client/anh/air-china.png')}}" alt="China Airline"
                                /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 my-2">
                    <p class="section-title my-3" title="Hotel partners">
                        Hotel partners
                    </p>
                    <div
                        class="
              d-flex
              flex-nowrap flex-md-wrap
              overflow-auto
              align-items-center
              my-3
            "
                    >
                        <div class="partner-item mb-md-3 mr-4">
                            <a title="Vinpearl"
                            ><img src="{{asset('client/anh/Vinpearl.png')}}" alt="Vinpearl"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4">
                            <a title="Mường Thanh"
                            ><img src="{{asset('client/anh/MuongThanh.png')}}" alt="Mường Thanh"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4">
                            <a title="Furama"
                            ><img src="{{asset('client/anh/Furama.png')}}" alt="Furama"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4">
                            <a title="Pullman"
                            ><img src="{{asset('client/anh/Pullma.png')}}" alt="Pullman"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4">
                            <a title="The Anam"
                            ><img src="{{asset('client/anh/hotel-partner-5.png')}}" alt="The Anam"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4">
                            <a title="The Beach"
                            ><img src="{{asset('client/anh/hotel-partner-6.png')}}" alt="The Beach"
                                /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <p class="section-title my-3" title="Payment partner">
                        Payment partner
                    </p>
                    <div
                        class="
              d-flex
              flex-nowrap flex-md-wrap
              overflow-auto
              align-items-center
              my-3
            "
                    >
                        <div class="partner-item mb-md-3 mr-4 mr-md-2">
                            <a title="Payoo"><img src="{{asset('client/anh/Payoo.png')}}" alt="Payoo" /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4 mr-md-2">
                            <a title="One pay"
                            ><img src="{{asset('client/anh/payment.png')}}" alt="One pay"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4 mr-md-2">
                            <a title="Visa"><img src="{{asset('client/anh/visa.png')}}" alt="Visa" /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4 mr-md-2">
                            <a title="Mastercard"
                            ><img src="{{asset('client/anh/master-card.png')}}" alt="Mastercard"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4 mr-md-2">
                            <a title="VietcomBank"
                            ><img src="{{asset('client/anh/vcb.png')}}" alt="VietcomBank"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4 mr-md-2">
                            <a title="TechcomBank"
                            ><img src="{{asset('client/anh/tech.png')}}" alt="TechcomBank"
                                /></a>
                        </div>
                        <div class="partner-item mb-md-3 mr-4 mr-md-2">
                            <a title="circleK"
                            ><img src="{{asset('client/anh/circleK.png')}}" alt="circleK"
                                /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
