<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Events\LoginEvent; // Import your LoginEvent


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // If the "remember" checkbox is checked

        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed...
                        
            $user = Auth::user();
            // Manually fire the LoginEvent after login
            event(new LoginEvent($user->name, $user->email));

            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['status' => 'Success', 'token' => $token, 'user' => $user], 200);
        }

        return response()->json(['message' => 'Invalid email or password', 'status' => 'Failed'], 401);
    }
        /**
     * Handle the logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            $user->tokens()->delete(); // Delete all tokens for the user
            //Auth::logout();
            return response()->json(['status' => 'Success', 'message' => 'Logged out successfully'], 200);
        }
        //Auth::logout();
    }

}
