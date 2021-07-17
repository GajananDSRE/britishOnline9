<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Exception,Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try{
            $user = auth()->user();
            if($user->role_id != 3)
            {
                throw new Exception("Invalid User");
            }
            return $next($request);
        }catch(Exception $e){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            if (!$request->expectsJson()) {
                return redirect('/login');
            }else{
                $exception_arr = array('errorStatus' => true, 'authentication_required' => true, 'message' => $e->getMessage() );
                echo json_encode($exception_arr);
                
            }
        }
    }
}
