<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Log;
use Illuminate\Http\Response;
class LogRequestResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
 
    public function terminate($request, $response) {

      // Log request data
      $log = new Log();
      $log->request = json_encode($request->all());
      $log->response = $response->getContent();
      $log->url = $request->url();
      $log->method = $request->method();
      $log->user_agent = $request->header('User-Agent');
      $log->save();
      return response()->json($log);
}
}
