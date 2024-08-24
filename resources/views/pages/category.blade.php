@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/widget.css" rel="stylesheet">
@endsection

@section('content')

<section class="sec-fiter-search floating-label">
    <div class="container">
        <div data-bs-toggle="button" class="d-md-none"><button type="button" class="btn btn-circle btn-toggle"><span class="icon-search"></span></button></div>
        <form>
            <div class="row g-3 justify-content-lg-end">
                <div class="col-lg-4">
                    <div class="input-group search-input">
                        <span class="input-group-text border100"><i class="icon-search"></i></span>
                        <input type="text" class="form-control" placeholder="Nhập địa chỉ, dự án">
                    </div>
                    <button type="submit" class="btn btn-circle">Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!------------------- CARD ------------------->

<section class="card-grid sales-sec list-tindang">

    <div class="container">
        
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="widget widget-list widget-hightlight mb-3">
                    <h4><span>Loại hình</span></h4>
                    @foreach($cats as $val)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories[]" value="{{$val->id}}" id="flexCheck{{$val->id}}">
                            <label class="form-check-label aa22" for="flexCheck{{$val->id}}">
                                <span>{{$val->name}}</span> <span>({{ count($val->Post) }})</span>
                            </label>
                        </div>
                    @endforeach
                    <hr>
                    <h4><span>Tình thành</span></h4>
                    @foreach($provinces as $val)
                        @if(count($val->Post) > 0)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="provinces[]" value="{{$val->id}}" id="flexCheck{{$val->id}}">
                            <label class="form-check-label aa22" for="flexCheck{{$val->id}}">
                                <span>{{$val->name}}</span> <span>({{ count($val->Post) }})</span>
                            </label>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Vietnam Homes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$data->name}}</li>
                    </ol>
                </nav>
                <h1 class="text-uppercase title-cat">Các dự án bất động sản trên toàn quốc</h1>
                <div class="option-cat">
                    <div class="iteam"><a href="">Đang mở bán</a></div>
                    <div class="iteam"><a href="">Vietnam Homes phân phối độc quyền</a></div>
                </div>
                <div class="sort-box">
                    <span>có <span class="text-main font-weight-semibold">{{ count($posts) }}</span> sản phẩm</span>
                    <div class="sort-ct">
                        <div class="dropdown">
                            <a class="btn ripple-effect dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Sắp xếp theo: giá tăng dần <i class="icon-down ms-2"></i></span>
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item checked" href="#">Giá tăng dần</a></li>
                            <li><a class="dropdown-item" href="#">Giá giảm dần</a></li>
                            <li><a class="dropdown-item" href="#">Mới nhất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-3 row-cols-md-3 g-4 " id="load-product">
                    @include('pages.iteam.loadproduct')
                </div>
                <div class="load-more text-center mt-4 pt-2">
                    <div class="cta-btn ir">
                        <a class="" href="#"><span class="cta-text font-weight-semibold">Xem thêm</span><span class="cta-ico"><i class="icon-down"></i></span></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!------------------- END CARD ------------------->

@endsection


@section('js')
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.form-check-input').on('change', function () {
            let categories = [];
            let provinces = [];

            // Get selected categories
            $('input[name="categories[]"]:checked').each(function () {
                categories.push($(this).val());
            });

            // Get selected provinces
            $('input[name="provinces[]"]:checked').each(function () {
                provinces.push($(this).val());
            });

            // Perform AJAX request
            $.ajax({
                url: "{{ route('posts.filter') }}",
                type: 'GET',
                data: {
                    categories: categories,
                    provinces: provinces
                },
                success: function (data) {
                    $('#load-product').html(data);
                }
            });
        });
    });
</script>
@endsection