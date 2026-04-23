<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function devguardSmokeTest(): mixed
    {
        return env('TOTALLY_FAKE_KEY');
    }
}
// trigger
