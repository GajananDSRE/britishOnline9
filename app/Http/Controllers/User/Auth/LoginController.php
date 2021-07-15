<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Services\User\AuthenticatesUsers;
use App\Services\User\RegistersUsers;
// use App\Services\User\JoinUsersTrait;
use Illuminate\Support\Facades\Validator;

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
    use RegistersUsers;
    // use JoinUsersTrait;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
