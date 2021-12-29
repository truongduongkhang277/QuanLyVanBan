<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class TheLoai extends Base
{
    use HasFactory;

    public $title = 'thể loại';
    
    // tên bảng trong database
    protected $table = 'the_loai';

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
                'field' => 'the_loai',
                'name' => 'Thể loại',
                'type' => 'text',
                'filter' => 'like',
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