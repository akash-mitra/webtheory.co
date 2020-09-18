<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('password.confirm')->only('showChangeForm');
    }

    public function showChangeForm()
    {
        return view('auth.passwords.change');
    }

    public function change(Request $request)
    {
        $request->validate([
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);

        // get user
        $user = $request->user();

        $user->password = Hash::make($request->password);

        $user->save();

        return view('user.home');
    }
}
