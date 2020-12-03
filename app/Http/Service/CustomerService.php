<?php


namespace App\Http\Service;


use App\Http\Repository\CustomerRepository;

class CustomerService
{
    protected $customerRepo;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }

    public function getAll()
    {
        return $this->customerRepo->getAll();
    }
    public function store($request){
        return $this->customerRepo->store($request);
    }
    public function delete($id){
        $customer=$this->customerRepo->findById($id);
        $customer->delete();
    }
    public function edit($id){
        return $this->customerRepo->findById($id);

    }
    public function update($request,$id){
        return $this->customerRepo->update($request,$id);
    }
}
