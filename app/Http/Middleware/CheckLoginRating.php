<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginRating
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

        public function handle($request, Closure $next)
        {
            if (!get_data_user('web'))
            {
                return redirect()->route('get.login')->with('alert','Vui lòng đăng nhập, trước khi đánh giá..');
            }
            return $next($request);
        }
    }

