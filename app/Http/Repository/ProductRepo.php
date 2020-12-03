<?php


namespace App\Http\Repository;


use App\Models\Product;

class ProductRepo
{
    public function getAll()
    {
        return Product::all();
    }

    public function store($request)
    {
        $product = new Product();
        $product->fill($request->all());
        $imageName = 'upload/' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload'), $imageName);
        $product->image = $imageName;
        $product->save();
    }

    public function findById($id)
    {
        return Product::findOrFail($id);
    }

    public function update($request, $id)
    {
        $product = Product::findOrFail($id);
        $product->fill($request->all());
        $imageName = 'upload/' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload'), $imageName);
        $product->image = $imageName;
        $product->save();
    }
}
