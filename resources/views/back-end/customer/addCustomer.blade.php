@extends('back-end.master')
@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form method="post" action="{{route('customer.store')}}">
                @csrf
                <div class="form-group">
                    <label>Tên Khách Hàng</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Email </label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Mật Khẩu</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input type="number" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <button type="submit" class="btn btn-success">Thêm Khách Hàng</button>
            </form>
        </div>
    </div>
@endsection

