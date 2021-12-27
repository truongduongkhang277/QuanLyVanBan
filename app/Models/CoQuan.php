<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoQuan extends Model
{
    use HasFactory;
    
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

    //global scope
}
