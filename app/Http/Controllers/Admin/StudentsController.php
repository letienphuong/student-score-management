<?php

namespace App\Http\Controllers\Admin;
use App\Models\Sinhvien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index()
    {
         return view('admin.sinhviens.index');

    }

}

