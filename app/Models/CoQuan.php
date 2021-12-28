<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class CoQuan extends Base
{
    use HasFactory;

    public $title = 'Danh sách cơ quan';
    
    // tên bảng trong database
    protected $table = 'co_quan';

    //protected $fillable = ['co_quan', 'ki_hieu', 'dia_chi', 'trang_thai', 'ghi_chu'];
    
    //thêm local scope

    public function scopeSearch($query)
    {
        if($key = request()->key){
            $query = $query->where('co_quan', 'like', '%'.$key.'%');
        }

        return $query;
    }

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
                'field' => 'co_quan',
                'name' => 'Tên cơ quan',
                'type' => 'text'
            ),
            array(
                'field' => 'ki_hieu',
                'name' => 'Kí hiệu',
                'type' => 'text'
            ),
            array(
                'field' => 'dia_chi',
                'name' => 'Địa chỉ',
                'type' => 'text'
            ),
            array(
                'field' => 'trang_thai',
                'name' => 'TT',
                'type' => 'text'
            ),
        );

        // nhập mảng defaultListingConfig vào listingConfig
        return array_merge($listingConfigs, $defaultListingConfigs);
    }

}
