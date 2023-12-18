<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof HttpException) {
            if ($exception->getStatusCode() == 404) {
                return redirect()->route('notfound');
            }
        }

        return parent::render($request, $exception);
    }

    public function report(Throwable $exception): void
    {
        parent::report($exception);
    }

    public function renderForConsole($output, Throwable $exception): void
    {
        parent::renderForConsole($output, $exception);
    }
}
