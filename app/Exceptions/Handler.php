<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

//     public function render($request, Exception $exception)
// {
//     // This will replace our 404 response with
//     // a JSON response.
//     if ($exception instanceof ModelNotFoundException &&
//         $request->wantsJson())
//     {
//         return response()->json([
//             'data' => 'Resource not found'
//         ], 404);
//     }

//     return parent::render($request, $exception);
// }
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
        
    }
    
    
}

