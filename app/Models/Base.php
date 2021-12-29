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

    // lấy giá trị field của model
    public function getFilter($request, $configs){
        // khai báo biến condition
        $conditions = [];
        if($request->method() == "POST"){
            foreach($configs as $config){
                // field nào có giá trị filter thì lất
                if(!empty($config['filter'])){
                    // giá trị xuất ta lấy từ tên field khai báo tại model
                    $value = $request->input($config['field']);

                    // tùy theo trường hợp mà có cách xử lý riêng
                    switch($config['filter']){
                        case "equal":
                            $conditions[] = [
                                'field' => $config['field'],
                                'condition' => '=',
                                'value' => $value,
                            ];
                            break;
                        
                        case "like":
                            $conditions[] = [
                                'field' => $config['field'],
                                'condition' => '%',
                                'value' => '%'.$value.'%',
                            ];
                            break;
                    }
                }
            }
        }
        return $conditions;
    }
}
