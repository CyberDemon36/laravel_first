<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Debugbar;

class TestsController extends Controller
{
    public function user($param1, $param2)
    {
        echo $param1 . ' '. $param2;
    }
}
