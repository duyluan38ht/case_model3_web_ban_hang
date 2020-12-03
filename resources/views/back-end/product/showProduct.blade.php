
@extends('back-end.master')
@section('content')
    <div class="card">
        <div class="card-header">
           Danh Sach San Pham
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <table class="table" style="text-align: center">
                        <thead class="btn-primary">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên Sản Phẩm</th>
                            <th scope="col">Danh Mục</th>
                            <th scope="col">Nhãn Hiệu</th>
                            <th scope="col">Gía</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Ghi Chú</th>
                            <th scope="col">Xoa</th>
                            <th scope="col">Sua</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $key=>$value)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->category->name}}</td>
                                <td>{{$value->brand->name}}</td>
                                <td>{{$value->price}}</td>
                                <td>{{$value->quantity}}</td>
                                <td><img src='{{asset("$value->image")}}' width="50px" height="70px"></td>
                                <td>{{$value->note}}</td>
                                <td>
                                    <a href="{{route('product.destroy',$value->id)}}" class="btn btn-danger">Del</a>
                                </td>
                                <td>
                                    <a href="{{route('product.edit',$value->id)}}" class="btn btn-success">Edit</a>
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

