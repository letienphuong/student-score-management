@extends('layouts.master')

@section('title','Giảng Viên')

@section('content')

    <div class="container-fluid px-4">

        <div class="card">
            <div class="card-header">
                <h4>Danh sách Giảng Viên
                    {{-- <a href="url{{'admin/add-category'}}" class="btn btn-primary btn-sm float-end">Add Category</a> --}}
                    <a href="{{url('admin/add-lecturer')}}" class="btn btn-primary btn-sm float-end">Add Lecturer</a>

                </h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>

                @endif

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Mã Giảng Viên</th>
                        <th>Tên Giảng Viên</th>
                        <th>Ngày Sinh</th>
                        <th>Giới tính</th>
                        <th>Học hàm</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lecturer as $item)
                        <tr>
                            <td>{{$item->magv}}</td>
                            <td>{{$item->tengv}}</td>
                            <td>{{$item->ngaysinh}}</td>
                            <td>{{$item->gioitinh}}</td>
                            <td>{{$item->hocham}}</td>
                            <td>
                                <a href="{{url('admin/edit-lecturer/'.$item->id)}}" class="btn btn-success">Sửa</a>
                                <a href="{{url('admin/delete-lecturer/'.$item->id)}}" class="btn btn-danger">Xóa</a>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection

