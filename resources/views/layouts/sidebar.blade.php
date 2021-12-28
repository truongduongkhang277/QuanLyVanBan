<?php
$menu = config('menu');
?>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- dựa vào file menu được tạo trong thư mục config, biến menu được khai báo ở đầu trang
          lấy giá trị danh sách mảng 
          khởi chạy vòng lặp lần đầu lấy thư mục lớn
          nếu có thư mục con, khởi chạy vòng lặp lần 2 để lấy thư mục con
          
        @foreach($menu as $m)
        <li class="nav-item">
            <a href="{{$m['route']}}" class="nav-link">
                <i class="nav-icon fas {{$m['icon']}}"></i>
                <p>
                    {{$m['label']}}
                    @if(isset($m['items']))
                    <i class="fas fa-angle-left right"></i>
                    @endif
                </p>
            </a>

            @if(isset($m['items']))
            <ul class="nav nav-treeview">
                @foreach($m['items'] as $mi)
                <li class="nav-item">
                    <a href="{{$mi['route']}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{$mi['label']}}</p>
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
        // chạy dựa vào dữ liệu menu tại file config
        -->

        <!-- dữ liệu cứng, nếu nhiều file sẽ dài, dữ liệu lặp lại nhiều lần, khó kiểm soát-->
        
        <!-- Trang chủ-->
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Trang chủ </p>
            </a>
        </li>
        <!-- Văn bản đến-->
        <li class="nav-item">
            <a href="{{route('danhsach.index', ['model'=>'VanBanDen'])}}" class="nav-link">
                <i class="nav-icon fas fa-envelope-open-text"></i>
                <p>
                    Quản lý Văn bản đến
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'VanBanDen'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách văn bản đến</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm mới văn bản đến</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Văn bản đi-->
        <li class="nav-item">
            <a href="{{route('danhsach.index', ['model'=>'VanBanDen'])}}" class="nav-link">
                <i class="nav-icon fas fa-external-link-alt"></i>
                <p>
                    Quản lý Văn bản đi
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'VanBanDi'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách văn bản đi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm mới văn bản đi</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Tra cứu văn bản-->
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
                <i class="nav-icon fa fa-search"></i>
                <p> Tra cứu văn bản </p>
            </a>
        </li>
        <!-- Báo cáo văn bản -->
        <li class="nav-item">
            <a href="{{route('danhsach.index', ['model'=>'VanBanDen'])}}" class="nav-link">
                <i class="nav-icon fas fa-chart-line"></i>
                <p>
                    Báo cáo văn bản
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'VanBanDen'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách văn bản đến</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'VanBanDi'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách văn bản đi</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Quản lý hệ thống-->
        <li class="nav-item">
            <a href="{{route('danhsach.index', ['model'=>'HeThong'])}}" class="nav-link">
                <i class="nav-icon fas fa-laptop-code"></i>
                <p>
                    Quản lý hệ thống
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'TaiKhoan'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách tài khoản</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'BoPhan'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách bộ phận</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'ChucDanh'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách chức danh</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'CoQuan'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách cơ quan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'DoKhan'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách độ khẩn</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'DoMat'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách độ mật</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'HinhThuc'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách hình thức</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'HinhThucChuyen'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách hình thức chuyển</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'HinhThucLuu'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách hình thức lưu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'LinhVuc'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách lĩnh vực</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'TheLoai'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách thể loại</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('danhsach.index', ['model'=>'TrangThai'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách trạng thái</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Đổi mật khẩu-->
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
                <i class="nav-icon fas fa-key"></i>
                <p> Đổi mật khẩu </p>
            </a>
        </li>
        <!-- Đăng xuất-->
        <li class="nav-item">
            <a href="{{route('admin.logout')}}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p> Đăng xuất </p>
            </a>
        </li>

    </ul>
    </li>
    </ul>
</nav>