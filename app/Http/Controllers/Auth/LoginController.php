<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function __invoke(){
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // Validasi data yang diterima dari form
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response(['message' => 'User ini Tidak Terdaftar!'], 401);
        } 

        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return response(['user' => auth()->user(), 'access_token' => $accessToken], 200);
    }

    public function logout(Request $request)
    {
        // Hapus semua token yang terkait dengan pengguna saat ini
        $request->user()->token()->revoke();

        return response(['message' => 'Successfully logged out']);
    }
}