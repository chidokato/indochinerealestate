@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/about.css" rel="stylesheet">
@endsection

@section('content')
<section class="section1">
    <div class="img">
        <img src="assets/images/gioithieu/slider.jpg">
    </div>
    <div class="title">
        <h1>GIỚI THIỆU CÔNG TY</h1>
    </div>
</section>

<section class="section2">
    <div class="menu">
        <ul>
            <li> <a class="nav-link" href="gioi-thieu#gioithieu">Giới thiệu</a> </li>
            <li> <a class="nav-link" href="gioi-thieu#tamnhin">Tầm nhìn - sứ mệnh</a> </li>
            <li> <a class="nav-link" href="gioi-thieu#muctieu">Mục tiêu chiến lược</a> </li>
            <li> <a class="nav-link" href="gioi-thieu#giatri">Giá trị cốt lõi</a> </li>
            <li> <a class="nav-link" href="gioi-thieu#dichvu">Dịch vụ</a> </li>
        </ul>
    </div>
</section>

<section class="section3 bg" >
    <div class="container" id="gioithieu">
        <div class="row">
            <div class="col-4">
                <div class="img">
                    <img src="assets/images/gioithieu/gioi-thieu-02.png">
                </div>
            </div>
            <div class="col-8">
                <div class="content">
                    <p><strong>Công ty Cổ phần Vietnam Homes</strong> được phát triển từ Đội ngũ Ban Lãnh Đạo cấp cao của Công Ty Cổ Phần Bất Động Sản INDOCHINE - một trong những “hắc mã cừ khôi” của thị trường bất động sản </p>
                    <p>Thành lập từ năm 2019, trải qua hàng loạt thách thức của thị trường, Vietnam Homes đang ngày một hoàn thiện và trưởng thành hơn từ những khó khăn và nỗ lực vươn lên trở thành đơn vị tiên phong trong lĩnh vực bất động sản đồng thời đặt mục tiêu trở thành một Tập đoàn đa ngành nghề.</p>
                    <p>Giai đoạn đầu thành lập, Vietnam Homes gặp không ít khó khăn, thử thách cả về nguồn lực tài chính và nhân sự. Bên cạnh đó, đối mặt với thị trường đang trong thời kỳ khủng hoảng, áp lực mà Vietnam Homes gặp phải càng tăng lên gấp bội. Tuy nhiên, những nỗ lực ban đầu đã giúp Vietnam Homes đặt dấu ấn đậm nét tại dự án bất động sản hot, góp phần phá băng thị trường bất động sản giai đoạn khó khăn, hình thành nên những xu hướng đầu tư và mua nhà ở mới của khách hàng trong nước và quốc tế, xứng đáng là đơn vị tiên phong dẫn dắt thị trường.</p>
                    <p>Từ đó đến nay, với chiến lược đúng đắn, linh hoạt và sát thực tế của đội ngũ ban lãnh đạo tài năng, hàng loạt các hoạt động thúc đẩy doanh số được triển khai, quy mô rộng khắp, bài bản đã đưa Vietnam Homes vươn lên mạnh mẽ, trở thành một trong những doanh nghiệp bất động sản hàng đầu trên thị trường. Đến nay, Vietnam Homes tự hào là đơn vị được các chủ đầu tư lớn tin tưởng “chọn mặt gửi vàng” đảm nhiệm vai trò đơn vị phát triển cũng như phân phối độc quyền dự án. Đồng thời, để có thể mang lại nhiều lợi ích hơn nữa cho Quý Chủ đầu tư, Quý Nhà đầu tư cũng như Quý Khách hàng, Vietnam Homes cũng đưa vào vận hành mảng Quản lý & Khai thác Căn hộ dịch vụ, mảng Du lịch lữ hành gắn liền với bất động sản, mảng Quản lý & kí gửi cho thuê bất động sản. Đặc biệt, Vietnam Homes Group cũng tự hào là một trong những đơn vị tiên phong cung cấp dịch vụ bất động sản toàn diện cho khách hàng quốc tế, mang bất động sản Việt Nam vươn tầm thế giới.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section4 bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Đơn vị phát triển & phân phối <br> bất động sản hàng đầu</h2>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="assets/images/gioithieu/dvpt-01.png"></div>
                        <div class="swiper-slide"><img src="assets/images/gioithieu/dvpt-02.png"></div>
                        <div class="swiper-slide"><img src="assets/images/gioithieu/dvpt-03.png"></div>
                        <div class="swiper-slide"><img src="assets/images/gioithieu/dvpt-04.png"></div>
                        <div class="swiper-slide"><img src="assets/images/gioithieu/dvpt-05.png"></div>
                        <div class="swiper-slide"><img src="assets/images/gioithieu/dvpt-06.png"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
               
            </div>
        </div>
    </div>
</section>

<section class="section5 bg">
    <div class="container" id="tamnhin">
        <div class="row">
            <div class="col-7">
               <div class="img"><img src="assets/images/gioithieu/tam-nhin.png"></div>
            </div>
            <div class="col-5">
                <div class="content">
                    <div class="title">
                        <img src="assets/images/gioithieu/tam-nhin-1.png">
                        <h3>TẦM NHÌN</h3>
                    </div>
                    <p>Trở thành đơn vị phân phối, cho thuê và quản lý các sản phẩm bất động sản năng động, linh hoạt tại Việt Nam & Quốc tế.</p>
                    <p>Trở thành đơn vị đi đầu trong “chuyển đổi số” và tạo ra các giá trị vượt trội.</p>
                    <p>Là đơn vị phát triển và phân phối bất động sản được lựa chọn hàng đầu Việt Nam.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section6 bg">
    <div class="container" id="tamnhin">
        <div class="row">
            <div class="col-7">
               <div class="img"><img src="assets/images/gioithieu/tam-nhin.png"></div>
            </div>
            <div class="col-5">
                <div class="content">
                    <div class="title">
                        <img src="assets/images/gioithieu/tam-nhin-1.png">
                        <h3>TẦM NHÌN</h3>
                    </div>
                    <p>Trở thành đơn vị phân phối, cho thuê và quản lý các sản phẩm bất động sản năng động, linh hoạt tại Việt Nam & Quốc tế.</p>
                    <p>Trở thành đơn vị đi đầu trong “chuyển đổi số” và tạo ra các giá trị vượt trội.</p>
                    <p>Là đơn vị phát triển và phân phối bất động sản được lựa chọn hàng đầu Việt Nam.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 6,
        spaceBetween: 30,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
    });
</script>
@endsection