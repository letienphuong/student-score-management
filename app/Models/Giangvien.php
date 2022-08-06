<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giangvien extends Model
{
    use HasFactory;
    protected $table= 'giangviens';
    protected $fillable = [
        'magv',
        'tengv',
        'ngaysinh',
        'gioitinh',
        'hocham',
    ];
    public function monhocs(){
        return $this->hasMany(Monhoc::class,'giangviens_id','id');
    }


}
