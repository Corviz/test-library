<?php

namespace Corviz\TestLib;

use Corviz\DI\Provider;

class TestProvider extends Provider
{

    /**
     * @inheritDoc
     */
    public function register()
    {
        echo "<p>Hello! I am a provider!</p>";
    }
}