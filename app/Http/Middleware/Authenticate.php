<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if (! $request->expectsJson()) {
        //     return route('login');
        // }
         if (! $request->expectsJson()) {

            if(strpos($request->url(), 'ag.') !== false) {
                return route('admin.auth.login');
            }else{
                return route('users.auth.login');
            }
        }else{
            $auth_response_arr = array('success' => true, 'message' => 'Authenticate Failed', 'errorStatus' => true, 'authentication_required' => true);
            return response()->json($auth_response_arr);
        }
    }
}
