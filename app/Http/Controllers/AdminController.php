<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\NewsController;

class AdminController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, User $user)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
        'is_admin' => 'boolean',
    ]);

    $user->name = $validated['name'];
    $user->email = $validated['email'];
    $user->is_admin = $request->has('is_admin');
    
    if (!empty($validated['password'])) {
        $user->password = Hash::make($validated['password']);
    }

    $user->save();

    return redirect()->route('admin.index')->with('success', 'User updated successfully.');
}

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User deleted successfully.');
    }
}