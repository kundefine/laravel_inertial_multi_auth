<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Attempt to log the user in
        $attempt = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember);
        if($attempt)
        {
            return redirect()->intended(route('admin.dashboard'));
        }


        // if unsuccessful
        throw ValidationException::withMessages([
            'email' => trans('auth.failed'),
        ]);

    }
}
