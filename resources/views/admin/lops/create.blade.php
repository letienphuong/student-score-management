@extends('layouts.master')

@section('title','Khoa')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Thêm Lớp</h1>
            </div>
            <div class="card-body">
{{--                @if($errors->any())--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        @foreach($errors->all() as $error)--}}
{{--                            <div>{{$error}}</div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                @endif--}}

                <form action="{{'add-class'}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Mã Lớp</label>
                        <input type="text" name="malop" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Tên Lớp</label>
                        <input type="text" name="tenlop" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

