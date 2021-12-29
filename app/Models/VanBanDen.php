<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class VanBanDen extends Base
{
    use HasFactory;

    public $title = 'văn bản đến';
    
    // tên bảng trong database
    protected $table = 'van_ban_den';

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
                'field' => 'so_vb_den',
                'name' => 'Số VB đến',
                'type' => 'text'
            ),
            array(
                'field' => 'ki_hieu',
                'name' => 'Kí hiệu',
                'type' => 'text'
            ),             
            array(
                'field' => 'ngay_vb',
                'name' => 'Ngày văn bản',
                'type' => 'date'
            ),           
            array(
                'field' => 'ngay_nhan',
                'name' => 'Ngày nhận',
                'type' => 'date'
            ),         
            array(
                'field' => 'trich_yeu',
                'name' => 'Trích yếu',
                'type' => 'text',
                'filter' => 'like',
            ),
            array(
                'field' => 'ds_file',
                'name' => 'DS File',
                'type' => 'text'
            ),
            array(
                'field' => 'han_xu_ly',
                'name' => 'Hạn xử lý',
                'type' => 'date'
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