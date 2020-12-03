<?php


namespace App\Http\Service;


use App\Http\Repository\CategoryRepository;
use App\Models\Category;


class CategoryService
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo=$categoryRepo;
    }

    public function getAll()
    {
        return $this->categoryRepo->getAll();
    }
    public function store($request){
        return $this->categoryRepo->store($request);
    }
    public function delete($id){
        $category=$this->categoryRepo->findById($id);
        $category->delete();
    }
    public function edit($id){
        return $this->categoryRepo->findById($id);
    }
    public function update($request,$id){
        return $this->categoryRepo->update($request,$id);
    }




}
