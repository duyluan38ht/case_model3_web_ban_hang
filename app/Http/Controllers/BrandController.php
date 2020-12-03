<?php

namespace App\Http\Controllers;

use App\Http\Service\BrandService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    public function index()
    {
        $brand = $this->brandService->getAll();
        return view('back-end.brand.showBrand', compact('brand'));
    }


    public function create()
    {
        return view('back-end.brand.addBrand');
    }


    public function store(Request $request)
    {
        $this->brandService->store($request);
        return redirect()->route('brand.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $brand = $this->brandService->edit($id);
        return view('back-end.brand.editBrand',compact('brand'));
    }


    public function update(Request $request, $id)
    {
        $this->brandService->update($request,$id);
        return redirect()->route('brand.index');
    }

    public function destroy($id)
    {
        $this->brandService->delete($id);
        return redirect()->route('brand.index');
    }
}
