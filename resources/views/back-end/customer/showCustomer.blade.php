
@extends('back-end.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('customer.create')}}" class="btn btn-success">Thêm Khách Hàng</a>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <table class="table" style="text-align: center">
                        <thead class="btn-primary">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên Khách Hàng</th>
                            <th scope="col">Email Khách Hàng</th>
                            <th scope="col">Mật Khẩu</th>
                            <th scope="col">Số Điện Thoại</th>
                            <th scope="col">Địa Chỉ</th>
                            <th scope="col">Xoá</th>
                            <th scope="col">Sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer as $key=>$value)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->password}}</td>
                                <td>{{$value->phone}}</td>
                                <td>{{$value->address}}</td>
                                <td>
                                    <a href="{{route('customer.destroy',$value->id)}}" class="btn btn-danger">Del</a>
                                </td>
                                <td>
                                    <a href="{{route('customer.edit',$value->id)}}" class="btn btn-success">Edit</a>
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

