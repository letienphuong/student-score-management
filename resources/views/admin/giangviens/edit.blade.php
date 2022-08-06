@extends('layouts.master')

@section('title','Giảng viên')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Thêm giảng viên</h1>
            </div>
            <div class="card-body">
                {{--                @if($errors->any())--}}
                {{--                    <div class="alert alert-danger">--}}
                {{--                        @foreach($errors->all() as $error)--}}
                {{--                            <div>{{$error}}</div>--}}
                {{--                        @endforeach--}}
                {{--                    </div>--}}
                {{--                @endif--}}

                <form action="{{url('admin/update-lecturer/'.$lecturer->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Mã Giảng Viên</label>
                        <input type="text" name="magv" value="{{$lecturer->magv}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Tên Giảng Viên</label>
                        <input type="text" name="tengv" value="{{$lecturer->tengv}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Giới tính</label>
                        <input type="text" name="gioitinh" value="{{$lecturer->gioitinh}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Ngày sinh</label>
                        <input type="date" name="ngaysinh" value="{{$lecturer->ngaysinh}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Học hàm</label>
                        <input type="text" name="hocham" value="{{$lecturer->hocham}}" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

