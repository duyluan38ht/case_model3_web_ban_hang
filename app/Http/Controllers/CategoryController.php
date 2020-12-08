<?php

namespace App\Http\Controllers;

use App\Http\Service\CategoryService;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $category = $this->categoryService->getAll();
        return view('back-end.category.showCategory', compact('category'));
    }


    public function create()
    {
        return view('back-end.category.addCategory');
    }


    public function store(Request $request)
    {
        $this->categoryService->store($request);


        return redirect()->route('category.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = $this->categoryService->edit($id);
        return view('back-end.category.editCategory',compact('category'));
    }


    public function update(Request $request, $id)
    {
        $this->categoryService->update($request,$id);
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $this->categoryService->delete($id);
        return redirect()->route('category.index');
    }
}
