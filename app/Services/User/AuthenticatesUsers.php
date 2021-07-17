<?php

namespace App\Services\User;

use App\Models\User;
use DB,Exception,Validator;
use Illuminate\Http\Request;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
trait AuthenticatesUsers
{
	/**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {

        return view('users.login');
    }
    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function login(SignInRequest $request)
    {
        $userid = $request->userid;
        $user = DB::table('users')->where('userid', $userid)->first();
        if(!empty($user)){
            $checkUser = $this->checkUserAuthenticated($user);
            if($checkUser['errorCode']){
                return redirect()->back()->withErrors($checkUser['message'])->withInput();
            }else{
                    $creds = $request->only(['userid', 'password']);
                    $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
                    if (Auth::attempt($creds, $remember_me)){
                        $request->session()->regenerate();
                        $auth = Auth::user();
                        $user = User::where(["userid" => $creds['userid']])->first();
                        Auth::login($user, $remember_me);
                        return redirect()->to('/')->withSuccess("You are logged in successfully!");
                    }else{
                        return redirect()->back()->withErrors("User id or password invalid")->withInput();
                    }
                }
        }else{
            return redirect()->back()->withErrors("User id or password invalid")->withInput(); 
        }
    }
    /**
     * check user invalid or not  for our domain.
    */
    protected function checkUserAuthenticated($user){
    try{
            $constant_local_domain  = config('constant.DOMAINS.LOCAL_DOMAIN_URL');
            $constant_main_domain   = config('constant.DOMAINS.MAIN_DOMAIN_URL');
            $user_parent_ids = $user->parents;
            $user_parent_id_arr = explode(',',$user_parent_ids);
            $user_parent_arr = DB::table('users')->whereIn('id',$user_parent_id_arr)->selectRaw('is_lock_user,site,role_id')->get();
            $user_parent_arr = json_decode(json_encode($user_parent_arr),true);
            $user_parent_lock_arr = array_column($user_parent_arr,'is_lock_user');
            $user_parent_role_arr = array_column($user_parent_arr,'role_id');
            $user_parent_site_arr = array_column($user_parent_arr,'site');
            array_push($user_parent_lock_arr,$user->is_lock_user);
            if(in_array(1,$user_parent_lock_arr)){
                throw new Exception("Your ID is locked!");
            }
            return array('errorCode' => false);
        }catch(Exception $e){
            return array('errorCode' => true,'message' => $e->getMessage());
        } 
    }
    public function logout(Request $request)
    { 
        Session::flush();
        Auth::logout();
        return redirect()->to('login')->withSuccess("Logged out successfully");
    }


}