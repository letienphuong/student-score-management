@extends('layouts.master')

@section('title','Blog Dashboard')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>View Posts</h4>
                <a href="{{url('admin/add-student')}}" class="btn btn-primary float-end">Thêm sinh viên</a>
            </div>
            <div class="card-body">
{{--                @if(session('message'))--}}
{{--                    <div class="alert alert-success">{{session('message')}}</div>--}}
{{--                @endif--}}
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Post Name</th>
                        <th>State</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @foreach($posts as $item)--}}
{{--                        <tr>--}}
{{--                            <td>{{$item->id}}</td>--}}
{{--                            <td>{{$item->category->name}}</td>--}}
{{--                            <td>{{$item->name}}</td>--}}
{{--                            <td>{{$item->status == '1' ? 'Hidden':'Visible'}}</td>--}}
{{--                            <td>--}}
{{--                                <a href="{{url('admin/post/'.$item->id)}}" class="btn btn-info">Edit</a>--}}
{{--                                <a href="{{url('admin/delete-post/'.$item->id)}}" class="btn btn-danger">Delete</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    </tbody>

                </table>
            </div>
        </div>

    </div>

@endsection
