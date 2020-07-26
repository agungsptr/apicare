<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Users as UsersResource;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return (new UsersResource($users))
            ->response()
            ->setStatusCode(200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::create($request->all());
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return (new UserResource($user))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return (new UserResource($user))
            ->response()
            ->setStatusCode(200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return (new UserResource($user))
            ->response()
            ->setStatusCode(200);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'status' => 'Success deleted user'
        ]);
    }
}
