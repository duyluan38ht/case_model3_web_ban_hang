@extends('back-end.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 style="color: red;text-align: center"><?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?></h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" class="form-control @error('name') border-danger @enderror()" name="name">
                    <div class="error-message">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Danh Muc</label>
                    <select name="category_id" class="form-control">
                        @foreach($category as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nhan Hieu</label>
                    <select name="brand_id" class="form-control">
                        @foreach($brand as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="number" class="form-control @error('price') border-danger @enderror()" name="price">
                    <div class="error-message">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('price') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Số Lượng</label>
                    <input type="number" class="form-control @error('quantity') border-danger @enderror()"
                           name="quantity">
                    <div class="error-message">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('quantity') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label>Ghi Chú</label>
                    <input type="text" class="form-control" name="note">
                    <div class="error-message">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('note') }}</p>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Thêm San Pham</button>
            </form>
        </div>
    </div>
@endsection
