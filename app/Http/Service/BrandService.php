<?php


namespace App\Http\Service;


use App\Http\Repository\BrandRepository;

class BrandService
{protected $brandRepo;
public function __construct(BrandRepository $brandRepo)
{
    $this->brandRepo=$brandRepo;
}

    public function getAll()
    {
    return  $this->brandRepo->getAll();
    }
    public function store($request){
        return $this->brandRepo->store($request);
    }
    public function delete($id){
        $category=$this->brandRepo->findById($id);
        $category->delete();
    }
    public function edit($id){
        return $this->brandRepo->findById($id);
    }
    public function update($request,$id){
        return $this->brandRepo->update($request,$id);
    }
}
