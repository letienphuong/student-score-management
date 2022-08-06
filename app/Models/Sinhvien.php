<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    protected $table = 'sinhviens';
    protected $fillable = [
        'masv',
        'tensv',
        'gioitinh',
        'ngaysinh',
        'quequan',
        'quequan',
        'lop_id',

    ];

    public function diems()
    {
        return $this->hasMany(Diem::class,'sinhvien_id','id');
    }

    public function lops()
    {
        return $this->belongsTo('Lop::class','lop_id','id');
    }
}
