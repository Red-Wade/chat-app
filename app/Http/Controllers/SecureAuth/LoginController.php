<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;

/**
 * Class LoginController
 * @package App\Http\Controllers
 * 
 */
class LoginController extends Controller
{
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            dd($request);
            return redirect()->intended('dashboard');
        }

    }
}
