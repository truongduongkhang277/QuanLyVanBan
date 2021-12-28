<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    use HasFactory;

    // cấu hình giao diện hiển thị theo các trường trong database
    public function defaultListingConfigs(){
        return array(           
            array(
                'field' => 'updated_at',
                'name' => 'Ngày CN',
                'type' => 'date'
            ),            
            array(
                'field' => 'created_at',
                'name' => 'Ngày tạo',
                'type' => 'date'
            ),
            array(
                'field' => '',
                'name' => '',
                'type' => 'Info'
            ),
            array(
                'field' => '',
                'name' => '',
                'type' => 'Edit'
            ),
            array(
                'field' => '',
                'name' => '',
                'type' => 'Delete'
            ),
        );
    }
}
