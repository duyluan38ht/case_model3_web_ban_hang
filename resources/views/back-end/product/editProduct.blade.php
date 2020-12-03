@extends('back-end.master')
@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}">
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
                    <input type="number" class="form-control" name="price" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label>Số Lượng</label>
                    <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
                </div>
                <div class="form-group" >
                    <label>Hinh Anh</label>
                        <input type="file" name="image">
                        <img src='{{asset("$product->image")}}' width='120px' height='130px'>
                </div>
                <div class="form-group">
                    <label>Ghi Chú</label>
                    <input type="text" class="form-control" name="note" value="{{$product->note}}">
                </div>
                <button type="submit" class="btn btn-success">Thêm San Pham</button>
            </form>
        </div>
    </div>
@endsection
