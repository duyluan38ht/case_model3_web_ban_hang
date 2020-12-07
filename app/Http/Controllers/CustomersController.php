<?php

namespace App\Http\Controllers;



use App\Http\Requests\add_CustomerRequest;
use App\Http\Service\CustomerService;
use App\Models\Customers;
use Illuminate\Http\Request;


class CustomersController extends Controller
{
   protected $customerService;
   public function __construct(CustomerService $customerService)
   {
       $this->customerService=$customerService;
   }

    public function index()
    {
        $customer=$this->customerService->getAll();
        return view('back-end.customer.showCustomer',compact('customer'));
    }


    public function create()
    {
        return view('back-end.customer.addCustomer');
    }

    public function store(add_CustomerRequest $request)
    {
        $this->customerService->store($request);
        return redirect()->route('customer.index');
    }


    public function show(Customers $customers)
    {
        //
    }


    public function edit($id)
    {
        $customer= $this->customerService->edit($id);
        return view('back-end.customer.editCustomer',compact('customer'));
    }


    public function update(Request $request, $id)
    {
        $this->customerService->update($request,$id);
        return redirect()->route('customer.index');
    }


    public function destroy($id)
    {
        $this->customerService->delete($id);
        return redirect()->route('customer.index');
    }
}
