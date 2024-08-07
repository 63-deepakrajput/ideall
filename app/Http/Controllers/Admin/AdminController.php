<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function login() {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to dashboard
            return redirect()->route('account.dashboard');
        } else {
            return redirect()->route('account.login')->with('error', 'Either email or password is incorrect');
        }
    }

    public function dashboard() {
        return view('dashboard');
    }


}
