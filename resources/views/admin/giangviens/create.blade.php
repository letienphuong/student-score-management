@extends('layouts.master')

@section('title','Giảng viên')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Thêm giảng viên</h1>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{'add-lecturer'}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Mã Giảng Viên</label>
                        <input type="text" name="magv" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Tên Giảng Viên</label>
                        <input type="text" name="tengv" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Giới tính</label>
                        <select name="gioitinh" id="" class="form-control">
                            <option value="">--Chọn Giới tính--</option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
{{--                        <input type="text" name="gioitinh" class="form-control">--}}
                    </div>

                    <div class="mb-3">
                        <label>Ngày sinh</label>
                        <input type="date" name="ngaysinh" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Học hàm</label>
                        <input type="text" name="hocham" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

