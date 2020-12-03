@extends('back-end.master')
@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form method="post" action="{{route('category.update',$category->id)}}">
                @csrf
                <div class="form-group">
                    <label>Tên Danh Mục</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                </div>

                <button type="submit" class="btn btn-success">Sửa Danh Mục</button>
            </form>
        </div>
    </div>
@endsection
