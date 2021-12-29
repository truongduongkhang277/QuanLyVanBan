<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class TaiKhoan extends Base
{
    use HasFactory;

    public $title = 'tài khoản';
    
    // tên bảng trong database
    protected $table = 'users';

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
                'field' => 'name',
                'name' => 'Họ và tên',
                'type' => 'text'
            ),
            array(
                'field' => 'email',
                'name' => 'Email',
                'type' => 'text',
                'filter' => 'like',
            ),
        );

        // nhập mảng defaultListingConfig vào listingConfig
        return array_merge($listingConfigs, $defaultListingConfigs);
    }
}
