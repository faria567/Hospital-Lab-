<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\User;
class UserController extends Controller
{
    
public function index()
{
    $users = User::all();
    return response()->json($users);
}

public function show($id)
{
    $user = User::findOrFail($id);
    return response()->json($user);
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        
    ]);

    $user = User::create($validatedData);
    return response()->json($user, 201);
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        
    ]);

    $user->update($validatedData);
    return response()->json($user);
}

public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return response()->json(null, 204);
}

}
