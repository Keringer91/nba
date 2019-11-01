<?php

namespace App\Http\Middleware;

use Closure;

class CheckComments
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
        $forbiddenWords = [
            'hate',
            'idiot',
            'stupid'
        ];

        foreach($forbiddenWords as $item) {
            if(strstr($request->content, $item)) {

                return redirect('error-message');
            }
        }

        return $next($request);
    }
}
