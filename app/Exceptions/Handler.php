<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
     /**
     * Since there is no one exception to handle multiple api request exceptions,
     * like file not found, model not found, route incorrect, etc...
     * this approach is used. This does not make use of the request or the exception.
     * Instead it just throws a simple standard user friendly response. 
     * https://medium.com/@leandrorr/solving-the-error-route-login-not-defined-in-laravel-5-5-64de3ca974e
     */
        //return parent::render($request, $exception);
        return response()->json([
        'error_message' => 'This resource or page is not found.'
        ], 404);
    }
}
