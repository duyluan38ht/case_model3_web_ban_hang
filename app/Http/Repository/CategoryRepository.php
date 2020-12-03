<?php


namespace App\Http\Repository;


use App\Models\Category;

class CategoryRepository
{
    public function getAll()
    {
        return Category::all();
    }

    public function store($request)
    {
        $category = new Category();
        $category->fill($request->all());
        $category->save();
    }

    public function findById($id)
    {
        return Category::findOrFail($id);
    }
    public function update($request,$id){
        $category=Category::findOrFail($id);
        $category->fill($request->all());
        $category->save();
    }
}
