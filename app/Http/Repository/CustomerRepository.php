<?php


namespace App\Http\Repository;


use App\Models\Customers;

class CustomerRepository
{
    public function getAll()
    {
        return Customers::all();
    }
    public function store($request){
        $customer = new Customers();
        $customer->fill($request->all());
        $customer->save();
    }
    public function findById($id){
        return Customers::findOrFail($id);
    }
    public function update($request,$id){
        $customer = Customers::findOrFail($id);
        $customer->fill($request->all());
        $customer->save();
    }
}
