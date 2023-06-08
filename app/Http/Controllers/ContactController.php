<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('input');
    }

    public function confirm(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $content = $request->input('content');

        $request->session()->put('name', $name);
        $request->session()->put('email', $email);
        $request->session()->put('content', $content);
        
        return view('confirm', compact('name', 'email', 'content'));
    }
}
