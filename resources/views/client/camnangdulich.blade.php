@extends('layouts.layout-main.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Cẩm nang du lịch</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('client.main')}}">Trang chủ</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Cẩm nang du lịch</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    </header>
    <div class="container typeword">
        <div class="my-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb rounded-0 px-0 py-2">
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{route('client.main')}}"
                           class="text-truncate text-info fondsize"
                           title="Trang chủ">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="#"
                           class="text-truncate text-info fondsize"
                           title="Thêm">Thêm</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="./camnangdulich.html"
                           class="cam-color fondsize"
                           title="Điểm đến yêu thích">Cẩm nang du lịch</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="my-4">
                <div class="d-flex justify-content-center text-center">
                </div>

                <div class="d-flex justify-content-center">
                    <div class="hoz-line"></div>
                </div>
                <div class="row d-flex justify-content-center my-3">
                    <div class="col-md-3 col-12"></div>
                    <div class="col-md-6 col-12 text-center">Đây là phiên bản đầu tiên và là bản demo, sẽ được cải thiện trong tương lai.</div><div class="col-md-3 col-12"></div>
                    <div class="col-md-3 col-12"></div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/dailoan.jpg')}}" class="img-fluid" alt="Vì sao bạn phải đến du lịch Đài Loan một lần trong đời?">
                        <p class="my-1 news-group-title">Cẩm nang du lịch</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">Vì sao bạn phải đến du lịch Đài Loan một lần trong đời?</h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">Đài Loan là điểm đến gần như hoàn hảo, với thành phố nhộn nhịp, thiên nhiên hùng vĩ, văn hóa lâu đời và ẩm thực đặc sắc. Đặc biệt, chi phí ở đây rất hợp túi tiền.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/camky.jpg')}}" class="img-fluid" alt="7 Điều Cấm Kị Khi Đi Máy Bay">
                        <p class="my-1 news-group-title">Cẩm nang du lịch</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">7 Điều Cấm Kị Khi Đi Máy Bay Mà Bạn Nên Thuộc Lòng</h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">Nhiều khi trên máy bay, những hành động vô ý của bạn có thể gây ảnh hưởng đến mọi người xung quanh. Hãy cùng MTA điểm qua một số tình huống thực tế đã từng xảy ra, từ đó giúp có thêm kinh nghiệm hành xử trở nên văn minh hơn trong mắt hành khách khác. </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/hanhly.jpg')}}" class="img-fluid" alt="Những Mẹo Nhỏ Giúp Tránh Thất Lạc Hành Lý">
                        <p class="my-1 news-group-title">Cẩm nang du lịch</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">Những Mẹo Nhỏ Giúp Tránh Thất Lạc Hành Lý</h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">Thống kê toàn cầu cho thấy mỗi năm có khoảng 26 triệu hành lý bị thất lạc. Đây có thể xem là một trong những rắc rối khá phổ biến với các lữ khách chọn cách di chuyển bằng đường hàng không. Để chuẩn bị trước cho tình huống này, bạn có thể áp dụng một số mẹo nhỏ sau để tránh việc thất lạc hành lý ngoài ý muốn.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/hochieu.jpg')}}" class="img-fluid" alt="Cách Xử Lý Nếu Bị Mất Hộ Chiếu Khi Du Lịch Nước Ngoài">
                        <p class="my-1 news-group-title">Cẩm nang du lịch</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">Cách Xử Lý Nếu Bị Mất Hộ Chiếu Khi Du Lịch Nước Ngoài</h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">Hộ chiếu là một trong những loại giấy tờ vô cùng quan trọng khi du lịch nước ngoài. Nhưng nếu chẳng may lại bị lạc mất “cuốn sổ quyền lực này” khi đang ở xứ người, bạn sẽ phải xử lý ra sao? Hãy cùng MTA ghi nhớ những bước xử lý sau nếu bạn rơi vào trường hợp như trên.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/quydinhkien.jpg')}}" class="img-fluid" alt="Vietnam Airlines Sẽ Chuyển Hành Lý Hệ Kiện">
                        <p class="my-1 news-group-title">Cẩm nang du lịch</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">Banana Airlines Sẽ Chuyển Hành Lý Hệ Kiện Để Thuận Tiện Cho Qúy Khách Hàng</h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">Từ ngày 1/8/2022, Banana Airlines sẽ chuyển sang áp dụng chính sách hành lý hệ kiện thay cho chính sách hành lý hệ cân trên các chuyến bay nội địa và quốc tế của hãng. Theo chính sách mới, hành lý của khách sẽ được tính theo số kiện thay vì số cân (kg) như trước đây. Đây là thay đổi quan trọng mà hành khách cần lưu ý khi chuẩn bị hành lý. Hành khách đã mua vé từ trước thời điểm chính sách hành lý hệ kiện có hiệu lực vẫn được hưởng tiêu chuẩn hành lý theo hệ cân như trước.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/giayto.png')}}" class="img-fluid" alt="Chuyện để quên - thiếu hay làm mất giấy tờ ở sân bay">
                        <p class="my-1 news-group-title">Cẩm nang du lịch</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">Chuyện để quên - thiếu hay làm mất giấy tờ ở sân bay</h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">Chuyện để quên/ thiếu hay làm mất giấy tờ ở sân bay khi làm thủ tục lên máy bay chẳng xa lạ gì với nhiều người. Nhưng từ nay hành khách hoàn toàn có thể an tâm hơn về vấn đề đó, vì Cục Hàng không Việt Nam vừa có hướng dẫn mới về các loại giấy tờ tùy thân cần thiết cho các chuyến bay nội địa</div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    </div>
@endsection
