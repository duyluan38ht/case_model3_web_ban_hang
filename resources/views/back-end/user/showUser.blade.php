
@extends('back-end.master')
@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <table class="table" style="text-align: center">
                        <thead class="btn-primary">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên User</th>
                            <th scope="col">Email </th>
                            <th scope="col">Xóa</th>
                            <th scope="col">Sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $key=>$value)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>
                                    <a href="" class="btn btn-danger">Del</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-success">Edit</a>
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


