<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = $request->input("password");
        $user->save();
        return "store success";
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if($request->input("name"))
        {
            $user->name = $request->input("name");
        }
        if($request->input("email"))
        {
            $user->email = $request->input("email");
        }

        $user->save();
        return "update success";
    }

    public function destroy($id)
    {   
        User::destroy($id);
        return "destroy success";
    }
}
