<?php 

return [

    [
        'label' => 'Trang chủ',
        'route' => 'home',
        'icon' => 'fa-tachometer-alt'
    ],
    [
        'label' => 'Quản lý Văn bản đến',
        'route' => 'home',
        'icon' => 'fa-envelope-open-text',
        'items' => [
            [
                'label' => 'Danh sách văn bản đến',
                'route' => 'home',
            ], 
            [
                'label' => 'Thêm mới văn bản đến',
                'route' => 'home',
            ]
        ]
    ],
    [
        'label' => 'Quản lý Văn bản đi',
        'route' => 'home',
        'icon' => 'fa-external-link-alt',
        'items' => [
            [
                'label' => 'Danh sách văn bản đi',
                'route' => 'home',
            ], 
            [
                'label' => 'Thêm mới văn bản đi',
                'route' => 'home',
            ]
        ]
    ],
    [
        'label' => 'Tra cứu văn bản',
        'route' => 'home',
        'icon' => 'fa-search'
    ],
    [
        'label' => 'Báo cáo văn bản',
        'route' => 'home',
        'icon' => 'fas fa-chart-line',
        'items' => [
            [
                'label' => 'Danh sách văn bản đến',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách văn bản đi',
                'route' => 'home',
            ]
        ]
    ],
    [
        'label' => 'Quản trị hệ thống',
        'route' => 'home',
        'icon' => 'fa-laptop-code',
        'items' => [
            [
                'label' => 'Danh sách tài khoản',
                'route' => 'home',
            ],
            [
                'label' => 'Danh sách bộ phận',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách chức danh',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách cơ quan',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách độ khẩn',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách độ mật',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách hình thức',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách hình thức chuyển',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách hình thức lưu',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách lĩnh vực',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách thể loại',
                'route' => 'home',
            ], 
            [
                'label' => 'Danh sách trạng thái',
                'route' => 'home',
            ]
        ]
    ],
    [
        'label' => 'Đổi mật khẩu',
        'route' => 'home',
        'icon' => 'fas fa-key'
    ],
    [
        'label' => 'Đăng xuất',
        'route' => 'admin.logout',
        'icon' => 'fas fa-sign-out-alt'
    ],
]

?>