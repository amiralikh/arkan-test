<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepo
{
    public function getAll()
    {
        return User::query()->orderBy('id')->paginate(20);
    }

    public function store($request)
    {
        User::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
    }

    public function getSingle($id)
    {
        return User::query()->findOrFail($id);
    }

    public function update($id,$request)
    {
        User::query()->findOrFail($id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        if ($request->has('password')) {
            User::query()->findOrFail($id)->update([
                'password' => Hash::make($request->input('password')),
            ]);
        }
    }

    public function destroy($id)
    {
        User::query()->findOrFail($id)->delete();
    }
}
