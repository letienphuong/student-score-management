<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    //
    public function index(){
        return view('admin.lops.index');

    }
    public function create(){
        return view('admin.lops.create');

    }
}
