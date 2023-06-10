<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Validation\Rules\Unique;

class AdminController extends Controller
{
    public function index() {
        return view('admin/index');
    }

    public function register(UserRequest $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $request->validate([
            'email' => [
                new Unique('users', 'email'),
            ],
        ]);

        $request->session()->put('name', $name);
        $request->session()->put('email', $email);
        $request->session()->put('password', $password);

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect()->route('admin/list');
    }

    public function list() {
        return view('admin/list');
    }

    public function login() {
        return view('admin/login');
    }
}
