<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Debugbar;

class UserController extends Controller
{
    public function user($id = null)
    {
        if($id != null){
            echo $id;
        } else {
            echo "Пользователь не найден";
        }
    }
}
