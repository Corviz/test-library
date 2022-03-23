<?php

namespace Corviz\TestLib;

use Closure;
use Corviz\Http\Middleware;
use Corviz\Http\Response;

class TestMiddleware extends Middleware
{

    /**
     * @inheritDoc
     */
    public function handle(Closure $next): Response
    {
        echo "<p>Hello! I am a middleware</p>";
        return $next();
    }
}