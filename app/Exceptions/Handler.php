<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Daftar jenis pengecualian yang tidak dilaporkan.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * Daftar input yang tidak boleh dimasukkan ke sesi flash pada validasi.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Laporkan atau log pengecualian.
     */
    public function report(Throwable $e): void
    {
        parent::report($e);
    }

    /**
     * Render pengecualian menjadi respons HTTP.
     */
    public function render($request, Throwable $e)
    {
        return parent::render($request, $e);
    }
}
