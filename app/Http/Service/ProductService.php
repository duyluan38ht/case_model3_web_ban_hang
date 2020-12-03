<?php


namespace App\Http\Service;


use App\Http\Repository\ProductRepo;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductRepo $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getAll()
    {
    return $this->productRepo->getAll();
    }
    public function store($request){
        return $this->productRepo->store($request);
    }
    public function delete($id){
        $product=$this->productRepo->findById($id);
        $product->delete();
    }
    public function edit($id){
        return $this->productRepo->findById($id);

    }
    public function update($request,$id){
        return $this->productRepo->update($request,$id);
    }
}
