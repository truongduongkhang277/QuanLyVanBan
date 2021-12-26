<?php
$menu = config('menu');
?>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- dựa vào file menu được tạo trong thư mục config, biến menu được khai báo ở đầu trang
          lấy giá trị danh sách mảng 
          khởi chạy vòng lặp lần đầu lấy thư mục lớn
          nếu có thư mục con, khởi chạy vòng lặp lần 2 để lấy thư mục con
          -->
        @foreach($menu as $m)
        <li class="nav-item">
            <a href="{{route($m['route'])}}" class="nav-link">
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
                    <a href="{{route($mi['route'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{$mi['label']}}</p>
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
    </li>
    </ul>
</nav>