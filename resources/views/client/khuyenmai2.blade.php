@extends('layouts.layout-main.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Khuyến mãi</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('client.main')}}">Trang chủ</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Khuyến mãi</p>
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
                           class="text-truncate text-info"
                           title="Trang chủ">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{route('client.lien-he')}}""
                           class="text-truncate text-info "
                           title="Trang chủ">Khuyến mãi</a>
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
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active bg-light">
                    <img src="{{asset('client/anh/pl1.jpg')}}" class="d-block rounded mx-auto img-fluid w-90  " />
                    <div class="carousel-caption">
                        <!-- <h5>Slogan</h5> -->
                    </div>
                </div>
                <div class="carousel-item bg-light">
                    <img src="{{asset('client/anh/pl2.jpg')}}" class="d-block rounded mx-auto img-fluid w-90" />
                    <div class="carousel-caption">
                        <!-- <h5>Slogan</h5> -->
                    </div>
                </div>
                <div class="carousel-item bg-light">
                    <img src="{{asset('client/anh/carousel-3.jpg')}}" class="d-block rounded mx-auto w-90" />
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

    <div class="container typeword">
        <div class="my-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb rounded-0 px-0 py-2">
                    <li class="breadcrumb-item" aria-current="page">

                    </li>
                </ol>
            </nav>
        </div>
        <div class="row news-relation-layout">
            <div class="col-8">
                <div class="d-flex justify-content-start text-center">
                    <h1 class="news-title text-primary">Khuyến mãi</h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-column news-item mb-3">
                            <a href=" #">
                                <img src="{{asset('client/anh/khuyenmai.png')}}" class="img-fluid" alt="Du lịch là phương thức đầu tư thông minh hiệu quả nhất trong cuộc đời chúng ta. Hãy tin như thế!">
                            </a>
                            <p class="my-1 news-group-title">Khuyến mãi</p>
                            <a href=" #">
                                <h1 class="m-0 news-title news-title-item font-weight-bolder">Du lịch là phương thức đầu tư thông minh hiệu quả nhất trong cuộc đời chúng ta. Hãy tin như thế!</h1>
                            </a>
                            <div class="my-3 news-hoz-line">&nbsp;</div>
                            <div class="my-2 news-body-overview line-range text-justify">
                                <p>Du lịch là phương thức đầu tư thông minh hiệu quả nhất trong cuộc đời chúng ta. Hãy tin như thế!</p>
                                <p>Đi để nhìn ngắm, để những nguồn sống mới chan hoà vào tâm hồn, kiến thức của ta và những người thân yêu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column news-item mb-3">
                            <a href=" #">
                                <img src="{{asset('client/anh/hoadaquy.png')}}" class="img-fluid" alt="Đón Mùa Hoa Dã Quỳ Cùng Ưu Đãi Vé Máy Bay Đi Pleiku">
                            </a>
                            <p class="my-1 news-group-title">Khuyến mãi</p>
                            <a href=" #">
                                <h1 class="m-0 news-title news-title-item font-weight-bolder">Đón Mùa Hoa Dã Quỳ Cùng Ưu Đãi Vé Máy Bay Đi Pleiku</h1>
                            </a>
                            <div class="my-3 news-hoz-line">&nbsp;</div>
                            <div class="my-2 news-body-overview line-range text-justify">
                                <p>Ngay từ bây giờ bạn đã có thể đặt mua vé máy bay đi Pleiku để tận dụng ưu đãi rất hấp dẫn từ Vietjet Air dành cho các du khách khởi hành trong tháng 10 và 11/2021.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column news-item mb-3">
                            <a href=" #">
                                <img src="{{asset('client/anh/bali.jpg')}}" class="img-fluid" alt="Bali - Cùng MTA thẳng tiến Bali">
                            </a>
                            <p class="my-1 news-group-title">Khuyến mãi</p>
                            <a href=" #">
                                <h1 class="m-0 news-title news-title-item font-weight-bolder">Bali - Cùng MTA thẳng tiến Bali</h1>
                            </a>
                            <div class="my-3 news-hoz-line">&nbsp;</div>
                            <div class="my-2 news-body-overview line-range text-justify">
                                <p>Vietnam Airlines chuẩn bị mở bán đường bay thẳng tới thiên đường Bali với giá cực kỳ ưu đãi. Hãy cùng Vemaybay.vn thẳng tiến Bali.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column news-item mb-3">
                            <a href=" #">
                                <img src="{{asset('client/anh/giadinh.png')}}" class="img-fluid" alt="MUA 2 ĐƯỢC 3 GIA ĐÌNH VUI VẺ CÙNG MTA">
                            </a>
                            <p class="my-1 news-group-title">Khuyến mãi</p>
                            <a href=" #">
                                <h1 class="m-0 news-title news-title-item font-weight-bolder">MUA 2 ĐƯỢC 3 GIA ĐÌNH VUI VẺ CÙNG MTA</h1>
                            </a>
                            <div class="my-3 news-hoz-line">&nbsp;</div>
                            <div class="my-2 news-body-overview line-range text-justify">
                                <p>Với 3 điểm đến là ThaiLand, Singapore và Malaysia, trong tháng 9 này bạn và gia đình sẽ nhận ưu đãi từ MTA. Với nhóm khách từ 02 người lớn trở lên khi mua vé qua mta sẽ được tặng miễn phí 01 vé cho trẻ em/trẻ em dưới 2 tuổi đi cùng. Còn gì tuyệt với hơn khi cùng gia đình nằm dài tắm nắng trên bãi cát tuyệt đẹp đảo Koh Samui - Thailand, hò hét cùng trẻ con khi đi chơi ở Universal Studio - Singapore hay lạc vào mê cung mua sắm ở thủ đô Kuala Lumpur - Malaysia.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="border rounded my-3 relation-news">
                    <div class="d-flex p-3 ">
                        <p class="m-0 title text-primary">Tin tức liên quan</p>
                    </div>
                    <div class="d-flex flex-column px-3">
                        <a href="../html/diemdenyeuthich.html" class="d-block text-body hover_yellow my-2">Du lịch là phương thức đầu tư thông minh hiệu quả nhất trong cuộc đời chúng ta. Hãy tin như thế!</a>
                        <a href="../html/diemdenyeuthich.html" class="d-block text-body hover_yellow my-2">Đón Mùa Hoa Dã Quỳ Cùng Ưu Đãi Vé Máy Bay Đi Pleiku</a>
                        <a href="../html/diemdenyeuthich.html" class="d-block text-body hover_yellow my-2">
                            "GION" - MỘT TRONG BA LỄ HỘI LỚN NHẤT NHẬT BẢN

                            Khuyến mãi
                        </a>
                        <a href="../html/diemdenyeuthich.html" class="d-block text-body hover_yellow my-2">Promotion đặc biệt tới thăm Thành phố Thiên Thần.</a>
                        <a href="../html/diemdenyeuthich.html" class="d-block text-body hover_yellow my-2">MUA 2 ĐƯỢC 3 GIA ĐÌNH VUI VẺ CÙNG VEMAYBAY</a>
                        <a href="../html/diemdenyeuthich.html" class="d-block text-body hover_yellow my-2"> Bali - Cùng Vemaybay.vn thẳng tiến Bali</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Footer start-->
@endsection
