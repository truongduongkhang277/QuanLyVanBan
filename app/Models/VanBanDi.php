<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class VanBanDi extends Base
{
    use HasFactory;
    
    // tên bảng trong database
    protected $table = 'van_ban_di';

    // cấu hình giao diện hiển thị theo các trường trong database
    public function listingConfig(){
        // lấy hàm defaultListingConfig trong Base
        $defaultListingConfigs = parent::defaultListingConfigs();
        $listingConfigs = array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text'
            ),
            array(
                'field' => 'so_vb_di',
                'name' => 'Số VB đi',
                'type' => 'text'
            ),
            array(
                'field' => 'ki_hieu',
                'name' => 'Kí hiệu',
                'type' => 'text'
            ),            
            array(
                'field' => 'ngay_gui',
                'name' => 'Ngày gửi',
                'type' => 'text'
            ),
            array(
                'field' => 'so_trang',
                'name' => 'Số trang',
                'type' => 'text'
            ),
            array(
                'field' => 'so_luong',
                'name' => 'Số lượng',
                'type' => 'text'
            ),            
            array(
                'field' => 'trich_yeu',
                'name' => 'Trích yếu',
                'type' => 'text'
            ),
            array(
                'field' => 'ds_file',
                'name' => 'DS File',
                'type' => 'text'
            ),
            array(
                'field' => 'han_xu_ly',
                'name' => 'Hạn xử lý',
                'type' => 'text'
            ),            
            array(
                'field' => 'trang_thai',
                'name' => 'Trạng thái',
                'type' => 'text'
            ),
            array(
                'field' => 'ghi_chu',
                'name' => 'Ghi chú',
                'type' => 'text'
            ),
        );

        // nhập mảng defaultListingConfig vào listingConfig
        return array_merge($listingConfigs, $defaultListingConfigs);
    }
}