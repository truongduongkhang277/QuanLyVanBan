<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class DoKhan extends Base
{
    use HasFactory;
    
    // tên bảng trong database
    protected $table = 'do_khan';

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
                'field' => 'do_khan',
                'name' => 'Độ khẩn',
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
