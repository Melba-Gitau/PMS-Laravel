<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    public function create()
    {
        return view('users');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'contact' => 'required|string|max:20',
            'password' => 'required|string|min:6',
            'role' => 'required|in:Admin,Agent',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->contact = $validatedData['contact'];
        $user->password = bcrypt($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->save();

        return redirect()->route('userslist'); 
    }

    public function index()
    {
        $users = User::all(); 

        return view('userslist', compact('users'));
    }
}


