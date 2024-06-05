<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming you have a User model

class UserController extends Controller
{
    // Method to fetch all users
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    // Method to create a new user
    public function store(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,doctor,patient',
        ]);

        // Create new user
        $user = User::create($validatedData);

        return response()->json($user, 201);
    }

    // Method to fetch a single user
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    // Method to update a user
    public function update(Request $request, $id)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,doctor,patient',
        ]);

        // Find the user
        $user = User::findOrFail($id);

        // Update user
        $user->update($validatedData);

        return response()->json($user, 200);
    }

    // Method to delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(null, 204);
    }
}