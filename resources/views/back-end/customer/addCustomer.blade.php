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
                    <input type="text" class="form-control @error('name') border-danger @enderror" name="name">
                    <div class="error-message">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Email </label>
                    <input type="text" class="form-control @error('email') border-danger @enderror" name="email">
                    <div class="error-message">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Mật Khẩu</label>
                    <input type="password" class="form-control @error('password') border-danger @enderror" name="password">
                    <div class="error-message">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input type="number" class="form-control @error('phone') border-danger @enderror" name="phone">
                    <div class="error-message">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control @error('address') border-danger @enderror" name="address">
                    <div class="error-message">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Thêm Khách Hàng</button>
            </form>
        </div>
    </div>
@endsection

