<?php

namespace App\Http\Controllers\Admin;
use App\Models\Giangvien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LecturerFormRequest;

class LecturerController extends Controller
{
    //
    public function index(){
        $lecturer = Giangvien::all();
        return view('admin.giangviens.index',compact('lecturer'));


    }

    public function create(){
        return view('admin.giangviens.create');
    }
    public function store(LecturerFormRequest $request){
//        $data = $request->validated();
        $data=$request->only(['magv','tengv','gioitinh','ngaysinh','hocham']);
        $lecturer= new Giangvien;
        $lecturer->magv=$data['magv'];
        $lecturer->tengv=$data['tengv'];
        $lecturer->gioitinh=$data['gioitinh'];
        $lecturer->ngaysinh=$data['ngaysinh'];
        $lecturer->hocham=$data['hocham'];
        $lecturer->save();
        return redirect('admin/lecturers')->with('message','Lecturer Added Successful');

    }
    public function edit($lecturer_id){
        $lecturer = Giangvien::find($lecturer_id);
        return view('admin.giangviens.edit',compact('lecturer'));
    }

    public function update(Request $request,$lecturer_id){
        $data=$request->only(['magv','tengv','gioitinh','ngaysinh','hocham']);
        $lecturer = Giangvien::find($lecturer_id);
        $lecturer->magv=$data['magv'];
        $lecturer->tengv=$data['tengv'];
        $lecturer->gioitinh=$data['gioitinh'];
        $lecturer->ngaysinh=$data['ngaysinh'];
        $lecturer->hocham=$data['hocham'];
        $lecturer->update();
        return redirect('admin/lecturers')->with('message','Cập nhật giảng viên thành công');

    }

    public function destroy($lecturer_id)
    {
        $lecturer = Giangvien::find($lecturer_id);
        $lecturer->delete();
        return redirect('admin/lecturers')->with('message','Xóa giảng viên thành công');
    }
}
