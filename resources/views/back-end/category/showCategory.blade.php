
@extends('back-end.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('category.create')}}">Thêm Danh Mục Sản Phẩm</a>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <table class="table" style="text-align: center">
                        <thead class="btn-primary">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên Danh Mục</th>
                            <th scope="col">Xoa</th>
                            <th scope="col">Sua</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $key=>$value)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    <a href="{{route('category.destroy',$value->id)}}" class="btn btn-danger">Del</a>
                                </td>
                                <td>
                                    <a href="{{route('category.edit',$value->id)}}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection

