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
                    <p>Được thành lập từ đam mê, kiến tạo bởi khát vọng, đắp xây bởi nhiệt huyết, Công Ty Cổ Phần Bất Động Sản INDOCHINE đang vươn lên trở thành một trong những đơn vị bất động sản hàng đầu Việt Nam.</p>
                    <p>Năm 2022, thị trường bất động sản trải qua "cơn bĩ cực" chưa từng có khiến hàng trăm doanh nghiệp địa ốc đóng cửa, giải thể, thu hẹp quy mô. Nhạy bén trước thời cơ, biến cơ hội thành thách thức để vươn lên, INDOCHINE chính thức chào sân thị trường bằng lễ ra mắt hoành tráng, đánh dấu cho sự ra đời của một "ngôi sao mới". Thực lực được khẳng định bằng thực tích, chỉ trong một thời gian ngắn, INDOCHINE đã khiến toàn thị trường "rúng động" với hàng trăm giao dịch thành công, tiên phong "phá băng" thị trường bất động sản trong giai đoạn bấy giờ. Được đà tiến lên, INDOCHINE tiếp tục phát triển vượt bậc, xứng danh "hắc mã" trên thị trường bất động sản.</p>
                    <p>Đặc biệt, INDOCHINE cũng tự hào là một trong những đơn vị đầu tiên đưa bất động sản Việt Nam lên vũ đài thế giới, tiên phong cung cấp dịch vụ bất động sản toàn diện cho khách hàng quốc tế mong muốn an cư - đầu tư tại Việt Nam. Bằng năng lực, nhiệt huyết, sự chuyên nghiệp và am hiểu thị trường, INDOCHINE hứa hẹn sẽ là cầu nối đáng tin cậy, mang lại cho quý khách hàng, quý nhà đầu tư những bất động sản vượt trội có giá trị và tính thanh khoản cao.</p>
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
                        <p>Tuân theo những chuẩn mực cao nhất về đạo đức trong kinh doanh và trách nhiệm xã hội, tạo niềm tự hào về một thương hiệu bất động sản Thành công</p>
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
                <h3>ONE-STOP REAL ESTATE SERVICE</h3>

                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide iteam1">
                            <h4>DEVELOPMENT</h4>
                            <p>PHÁT TRIỂN KINH DOANH DỰ ÁN BẤT ĐỘNG SẢN</p>
                        </div>
                        <div class="swiper-slide iteam2">
                            <h4>CONSULTING</h4>
                            <p>TƯ VẤN CHIẾN LƯỢC THƯƠNG HIỆU & MARKETING DỰ ÁN BẤT ĐỘNG SẢN</p>
                        </div>
                        <div class="swiper-slide iteam3">
                            <h4>PROPERTY</h4>
                            <p>PHÂN PHỐI & CHO THUÊ DỰ ÁN BẤT ĐỘNG SẢN</p>
                        </div>
                        <div class="swiper-slide iteam4">
                            <h4>HOSPITALITY</h4>
                            <p>QUẢN LÝ VẬN HÀNH & KHAI THÁC BẤT ĐỘNG SẢN</p>
                        </div>
                        <div class="swiper-slide iteam5">
                            <h4>GLOBAL</h4>
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
        <div class="row" style="background:url(assets/images/gioithieu/bg_lanhdao1.png); background-size: cover;">
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
                    <div class="img"> <img src="assets/images/gioithieu/C-Hang.png"> </div>
                    <div class="name">BÀ LÊ THỊ HẰNG</div>
                    <div class="function"> Tổng Giám Đốc <br> Công ty Cổ phần BĐS INDOCHINE </div>
                </div>
            </div>
        </div>
        <div class="row haianh" style="background:url(assets/images/gioithieu/bg_lanhdao2.png); background-size: cover;">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img"> <img src="assets/images/gioithieu/hai-anh.png"> </div>
                    <div class="name">ÔNG NGUYỄN HẢI ANH</div>
                    <div class="function"> Giám Đốc Kinh Doanh <br> Công ty Cổ phần BĐS INDOCHINE </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="timeline ">
                    <div class="timeline-entry">
                        <div class="timeline-time">2013 - 2021</div>
                        <div class="timeline-content">
                            <p>BỘ NÔNG NGHIỆP & PHÁT TRIỂN NÔNG THÔN</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2021 - 2022</div>
                        <div class="timeline-content">
                            <p>Trưởng phòng kinh doanh - ĐẤT XANH MIỀN BẮC</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2022 - Nay</div>
                        <div class="timeline-content">
                            <p>Giám đốc kinh doanh <br> Công ty Cổ Phần Bất Động Sản Indochine </p>
                        </div>
                    </div>
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