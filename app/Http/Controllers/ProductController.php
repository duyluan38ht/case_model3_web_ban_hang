<?php

namespace App\Http\Controllers;

use App\Http\Requests\add_productRequest;
use App\Http\Service\ProductService;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $product = $this->productService->getAll();
        return view('back-end.product.showProduct', compact('product'));
    }


    public function create()
    {
        $brand=Brand::all();
        $category=Category::all();
        return view('back-end.product.addProduct',compact('category','brand'));
    }


    public function store(add_productRequest $request)
    {
        $this->productService->store($request);
        return redirect()->route('product.index');
    }


    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $category=Category::all();
        $brand=Brand::all();
        $product=$this->productService->edit($id);
        return view('back-end.product.editProduct',compact('product','category','brand'));
    }


    public function update(Request $request, $id)
    {
        $this->productService->update($request,$id);
//        dd($this->productService);
        return redirect()->route('product.index');
    }


    public function destroy($id)
    {
        $this->productService->delete($id);
        return redirect()->route('product.index');
    }
}
