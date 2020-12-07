<?php

namespace App\Http\Controllers;

use App\Http\Service\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $user = $this->userService->getAll();
        return view('back-end.user.showUser',compact('user'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('showLogin');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function showPageAdmin()

    {

        if (!$this->userCan('view-back-end-home')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));

        }

        return view("back-end.home");

    }
}
