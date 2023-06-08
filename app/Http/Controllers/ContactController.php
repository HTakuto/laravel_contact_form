<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index() {
        return view('input');
    }

    public function confirm(ContactRequest $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $content = $request->input('content');

        $request->session()->put('name', $name);
        $request->session()->put('email', $email);
        $request->session()->put('content', $content);

        return view('confirm', compact('name', 'email', 'content'));
    }

    public function complete(Request $request) {
        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $content = $request->session()->get('content');

        return view('complete', compact('name', 'email', 'content'));
    }
}
