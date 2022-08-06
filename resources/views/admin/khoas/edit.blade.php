@extends('layouts.master')

@section('title','Sửa Khoa')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Sửa Khoa</h1>
            </div>
            <div class="card-body">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                @endif

                <form action="{{url('admin/update-department/'.$department->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Mã Khoa</label>
                        <input type="text" name="makhoa" value="{{$department->makhoa}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Tên Khoa</label>
                        <input type="text" name="tenkhoa" value="{{$department->tenkhoa}}" class="form-control">
                    </div>


                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

