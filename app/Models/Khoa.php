<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    use HasFactory;
    protected $table='khoas';

    protected $fillable = [
        'makhoa',
        'tenkhoa',

    ];

    public function lops()
    {
        return $this->hasMany('App\Models\Lop','khoa_id','id');
    }
}
