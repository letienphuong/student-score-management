@extends('layouts.master')

@section('title','Giảng Viên')

@section('content')

    <div class="container-fluid px-4">

        <div class="card">
            <div class="card-header">
                <h4>Danh sách Khoa
                    {{-- <a href="url{{'admin/add-category'}}" class="btn btn-primary btn-sm float-end">Add Category</a> --}}
                    <a href="{{url('admin/add-department')}}" class="btn btn-primary btn-sm float-end">Thêm Khoa</a>

                </h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>

                @endif

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Mã Khoa</th>
                        <th>Tên Khoa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($department as $item)
                        <tr>
                            <td>{{$item->makhoa}}</td>
                            <td>{{$item->tenkhoa}}</td>
                            <td>
                                <a href="{{url('admin/edit-department/'.$item->id)}}" class="btn btn-success">Sửa</a>
                                <a href="{{url('admin/delete-department/'.$item->id)}}" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection

