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
                    <p><strong>Công ty Cổ phần INDOCHINE</strong> được phát triển từ Đội ngũ Ban Lãnh Đạo cấp cao của Công Ty Cổ Phần Bất Động Sản INDOCHINE - một trong những “hắc mã cừ khôi” của thị trường bất động sản </p>
                    <p>Thành lập từ năm 2019, trải qua hàng loạt thách thức của thị trường, INDOCHINE đang ngày một hoàn thiện và trưởng thành hơn từ những khó khăn và nỗ lực vươn lên trở thành đơn vị tiên phong trong lĩnh vực bất động sản đồng thời đặt mục tiêu trở thành một Tập đoàn đa ngành nghề.</p>
                    <p>Giai đoạn đầu thành lập, INDOCHINE gặp không ít khó khăn, thử thách cả về nguồn lực tài chính và nhân sự. Bên cạnh đó, đối mặt với thị trường đang trong thời kỳ khủng hoảng, áp lực mà INDOCHINE gặp phải càng tăng lên gấp bội. Tuy nhiên, những nỗ lực ban đầu đã giúp INDOCHINE đặt dấu ấn đậm nét tại dự án bất động sản hot, góp phần phá băng thị trường bất động sản giai đoạn khó khăn, hình thành nên những xu hướng đầu tư và mua nhà ở mới của khách hàng trong nước và quốc tế, xứng đáng là đơn vị tiên phong dẫn dắt thị trường.</p>
                    <p>Từ đó đến nay, với chiến lược đúng đắn, linh hoạt và sát thực tế của đội ngũ ban lãnh đạo tài năng, hàng loạt các hoạt động thúc đẩy doanh số được triển khai, quy mô rộng khắp, bài bản đã đưa INDOCHINE vươn lên mạnh mẽ, trở thành một trong những doanh nghiệp bất động sản hàng đầu trên thị trường. Đến nay, INDOCHINE tự hào là đơn vị được các chủ đầu tư lớn tin tưởng “chọn mặt gửi vàng” đảm nhiệm vai trò đơn vị phát triển cũng như phân phối độc quyền dự án. Đồng thời, để có thể mang lại nhiều lợi ích hơn nữa cho Quý Chủ đầu tư, Quý Nhà đầu tư cũng như Quý Khách hàng, INDOCHINE cũng đưa vào vận hành mảng Quản lý & Khai thác Căn hộ dịch vụ, mảng Du lịch lữ hành gắn liền với bất động sản, mảng Quản lý & kí gửi cho thuê bất động sản. Đặc biệt, INDOCHINE Group cũng tự hào là một trong những đơn vị tiên phong cung cấp dịch vụ bất động sản toàn diện cho khách hàng quốc tế, mang bất động sản Việt Nam vươn tầm thế giới.</p>
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
            <div class="col-1"></div>
            <div class="col-11">
                <div class="iteam">
                    <div class="img"><img src="assets/images/gioithieu/bg_sumenh.png"></div>
                    <div class="text">
                        <img class="icon" src="assets/images/gioithieu/icon_su menh.png">
                        <p>Cung cấp sản phẩm dịch vụ ưu việt, nâng cao chất lượng cuộc sống, gia tăng giá trị cho khách hàng</p>
                        <p>Mang đến dịch vụ chuyên nghiệp và giải pháp hoàng hảo</p>
                        <p>Tuân theo những chuẩn mực cao nhất về đạo đức trong kinh doanh và trách nhiệm xã hội, tạo niềm tự hào về một thương hiệu INDOCHINE Thành công</p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>

<section class="section7">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="img"> <img src="assets/images/icon_muctieu.png"> </div>
                <h2>MỤC TIÊU CHIẾN LƯỢC</h2>
                <p>Trong 5 năm tới, trở thành đơn vị hàng đầu tại Việt Nam trong các lĩnh vực đầu tư, kinh doanh, phân phối và cho thuê bất động sản</p>
                <p>Tiếp tục hoàn chỉnh và chuyên nghiệp hóa dịch vụ, tạo ra các giá trị tốt nhất và phù hợp nhất</p>
                <p>Kinh doanh dịch vụ sẽ là mảng dinh doanh mũi nhọn đưa Indochine thâm nhập thị trường quốc tế</p>
            </div>
        </div>
    </div>
</section>

<section class="section8">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>DỊCH VỤ BẤT ĐỘNG SẢN TOÀN DIỆN</h2>
                <h3>ONE-TOP REAL ESTATE SERVICE</h3>

                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide iteam1">
                            <h4>V-DEVELOPMENT</h4>
                            <p>PHÁT TRIỂN KINH DOANH DỰ ÁN BẤT ĐỘNG SẢN</p>
                        </div>
                        <div class="swiper-slide iteam2">
                            <h4>V-CONSULTING</h4>
                            <p>TƯ VẤN CHIẾN LƯỢC THƯƠNG HIỆU & MARKETING DỰ ÁN BẤT ĐỘNG SẢN</p>
                        </div>
                        <div class="swiper-slide iteam3">
                            <h4>V-PROPERTY</h4>
                            <p>PHÂN PHỐI & CHO THUÊ DỰ ÁN BẤT ĐỘNG SẢN</p>
                        </div>
                        <div class="swiper-slide iteam4">
                            <h4>V-HOSPITALITY</h4>
                            <p>QUẢN LÝ VẬN HÀNH & KHAI THÁC BẤT ĐỘNG SẢN</p>
                        </div>
                        <div class="swiper-slide iteam5">
                            <h4>V-GLOBAL</h4>
                            <p>DỊCH VỤ BẤT ĐỘNG SẢN TOÀN DIỆN CHO KHÁCH HÀNG NƯỚC NGOÀI</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section9">
    <div class="container">
        <h2>BAN LÃNH ĐẠO</h2>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="timeline">
                    <div class="timeline-entry">
                        <div class="timeline-time">2006 - 2020</div>
                        <div class="timeline-content">
                            <p>Đảm nhiệm vị trí lãnh đạo cấp cao tại các tập đoàn bất động sản hàng đầu Việt Nam như: Novaland, FLC Group, Datxanh Group, Đất Xanh Miền Bắc,...</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">Năm 2021</div>
                        <div class="timeline-content">
                            <p>Sáng lập thương hiệu Vietnam Homes Group</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">Năm 2022</div>
                        <div class="timeline-content">
                            <p>Sáng lập thương hiệu Bất Động Sản INDOCHINE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img"> <img src="assets/images/gioithieu/chihang.png"> </div>
                    <div class="name">BÀ LÊ THỊ HẰNG</div>
                    <div class="function"> CHỦ TỊCH <br> VIETNAM HOMES GROUP </div>
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

    var swiper = new Swiper(".mySwiper1", {
        slidesPerView: 5,
        spaceBetween: 30,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
    });
</script>
@endsection