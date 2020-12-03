@extends('back-end.master')
@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form method="post" action="{{route('customer.update',$customer->id)}}">
                @csrf
                <div class="form-group">
                    <label>Tên Khách Hàng</label>
                    <input type="text" class="form-control" name="name" value="{{$customer->name}}">
                </div>
                <div class="form-group">
                    <label>Email </label>
                    <input type="text" class="form-control" name="email" value="{{$customer->email}}">
                </div>
                <div class="form-group">
                    <label>Mật Khẩu</label>
                    <input type="password" class="form-control" name="password" value="{{$customer->password}}">
                </div>
                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input type="number" class="form-control" name="phone" value="{{$customer->phone}}">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="{{$customer->address}}">
                </div>
                <button type="submit" class="btn btn-success">Sửa Khách Hàng</button>
            </form>
        </div>
    </div>
@endsection

