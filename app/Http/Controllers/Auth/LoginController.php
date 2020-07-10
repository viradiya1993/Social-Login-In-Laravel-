<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;

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
    }

    // Login With Facebook
   
    public function facebookToProvider()
    {
        return Socialite::driver('facebook')->redirect();
        //return Socialite::driver('facebook')->stateless()->user();

    }

    public function handleFacebookCallback()
    {
        //$user = Socialite::driver('facebook')->user();
        $userSocial = Socialite::driver('facebook')->stateless()->user();
        $findUser = User::where('email',$userSocial->email)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect(route('home'));
            return 'Done with old';
        }else{
            $user = new User;
            $user->name = $userSocial->name;
            $user->email = $userSocial->email;
            $user->password = bcrypt(123456);
            $user->save();
            Auth::login($user);
            return redirect(route('home'));
            return 'Done with new';
        }
        
    }

    // Login With Google

    public function googleToProvider()
    {
        return Socialite::driver('google')->redirect();
        //return Socialite::driver('facebook')->stateless()->user();

    }

    public function handleGoogleCallback() {

        $userSocial = Socialite::driver('google')->stateless()->user();
        $findUser = User::where('email',$userSocial->email)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect(route('home'));
            return 'Done with old';
        }else{
            $user = new User;
            $user->name = $userSocial->name;
            $user->email = $userSocial->email;
            $user->password = bcrypt(123456);
            $user->save();
            Auth::login($user);
            return redirect(route('home'));
            return 'Done with new';
        }
    }

    // Login With Twitter

    public function twitterToProvider()
    {
        return Socialite::driver('twitter')->redirect();
        //return Socialite::driver('facebook')->stateless()->user();

    }

    public function handleTwitterCallback() {

        $userSocial = Socialite::driver('twitter')->user();
        $findUser = User::where('email',$userSocial->email)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect(route('home'));
            return 'Done with old';
        }else{
            $user = new User;
            $user->name = $userSocial->name;
            $user->email = $userSocial->email;
            $user->password = bcrypt(123456);
            $user->save();
            Auth::login($user);
            return redirect(route('home'));
            return 'Done with new';
        }
    }
}
