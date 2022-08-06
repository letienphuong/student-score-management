<?php

namespace App\Http\Controllers\Admin;
use App\Models\Khoa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DepartmentFormRequest;

class DepartmentController extends Controller
{
    //
    public function index(){
        $department = Khoa::all();
        return view('admin.khoas.index',compact('department'));
    }

    public function create(){
        return view('admin.khoas.create');
    }

    public function store(DepartmentFormRequest $request){
//        $data = $request->validated();
        $data=$request->only(['makhoa','tenkhoa']);
        $department= new Khoa;
        $department->makhoa=$data['makhoa'];
        $department->tenkhoa=$data['tenkhoa'];
        $department->save();
        return redirect('admin/departments')->with('message','Thêm khoa thành công');

    }

    public function edit($department_id){
        $department = Khoa::find($department_id);
        return view('admin.khoas.edit',compact('department'));
    }

    public function update(Request $request,$department_id){
        $data=$request->only(['makhoa','tenkhoa']);
        $department = Khoa::find($department_id);
        $department->makhoa=$data['makhoa'];
        $department->tenkhoa=$data['tenkhoa'];
        $department->update();
        return redirect('admin/departments')->with('message','Cập nhật thành công');
    }

    public function destroy($department_id)
    {
        $department = Khoa::find($department_id);
        $department->delete();
        return redirect('admin/departments')->with('message','Xóa khoa thành công');
    }
}
