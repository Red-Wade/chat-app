<?php

namespace App\Http\Controllers\SecureAuth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

use App\Http\Controllers\Controller;

/**
 * Class LoginController
 * @package App\Http\Controllers
 * 
 */
class LoginController extends Controller
{
    public function authenticate(LoginRequest $request) {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        } else {
            // Return with form error
            return redirect()->back()->withInput()->withErrors(['username' => 'Invalid username or password']);
        }

    }
}
