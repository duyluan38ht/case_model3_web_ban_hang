<?php


namespace App\Http\Repository;


use App\Models\Brand;

class BrandRepository
{
    public function getAll()
    {
    return Brand::all();
    }
    public function store($request)
    {
        $brand = new Brand();
        $brand->fill($request->all());
        $brand->save();
    }

    public function findById($id)
    {
        return Brand::findOrFail($id);
    }
    public function update($request,$id){
        $brand=Brand::findOrFail($id);
        $brand->fill($request->all());
        $brand->save();
    }
}
