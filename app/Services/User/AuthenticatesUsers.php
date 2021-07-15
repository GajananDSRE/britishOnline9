<?php

namespace App\Services\User;

use App\Models\User;
use DB,Exception,Validator;
use Illuminate\Http\Request;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;
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
        $input = $request->all();
        $user = DB::table('users')->where('userid', $userid)->first();
            if(!empty($user))
            {
                $checkUser = $this->checkUserAuthenticated($user);
                if($checkUser['errorCode'])
                {
                    return response()->json(['authentication_required' => true, 'errorStatus' => true, 'message' => $checkUser['message']]); 
                }else
                {
                        $creds['userid'] = $user->userid;
                        $creds['password'] = $input['password'];

                        if($this->guard()){
                            //$request->session()->regenerate();
                            return response()->json(['authentication_required' => false, 'errorStatus' => false, 'message' => "You are logged in successfully!"]);
                        }else
                        {
                            return response()->json(['authentication_required' => true, 'errorStatus' => true, 'message' => "User id or password invalid"]);
                        }
                }
            }else
            {
                return response()->json(['authentication_required' => true, 'errorStatus' => true, 'message' => "User id or password invalid"]);
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
            $host = request()->getHost();
            $host =  count(explode('.', $host)) == 3 ? explode('.', $host)[1] : (count(explode('.', $host)) == 2 ? explode('.', $host)[0] : "");
            $host = strtolower($host);
            if($constant_local_domain != $host){
                 if(in_array(9,$user_parent_role_arr)){
                        $user_parent_site_arr = array_values(array_filter($user_parent_site_arr));
                        print_r($user_parent_site_arr);
                        if(isset($user_parent_site_arr[0]) && strtolower($user_parent_site_arr[0]) != $host){
                            throw new Exception("User id or password invalid");
                        }
                    }else{
                       if($constant_main_domain != $host){
                            throw new Exception("User id or password invalid");
                        } 
                    }
            }
            return array('errorCode' => false);
        }catch(Exception $e){
            return array('errorCode' => true,'message' => $e->getMessage());
        } 
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

}