<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        // $request->validate([
        //     'email' => 'email|required',
        //     'password' => 'required'
        // ]);

        if( $this->guard('api')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            $user = Auth::user();

            $token = $user->createToken($user->email.'-'.now());

            return response()->json([
                'token' => $token->accessToken
            ]);
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];
        // // $user = User::where('email', $request->email)->first();

        // // if ($user) {
        // //     if (Hash::check($request->password, $user->password)) {
        // //         return response()->json('token', 200);
        // //     }
        // // }
        // if (Auth::attempt($credentials)) {
        // // if (auth()->attempt($credentials)) {
        //     $token = auth()->user()->createToken('TutsForWeb')->accessToken;
        //     return response()->json(['token' => $token], 200);
        // } else {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }
        // return response("OK", 200);
    }
}
