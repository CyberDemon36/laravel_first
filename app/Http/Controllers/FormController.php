<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function user(){
        ?>
        <form method="post" action="/form">
            <input type="text">
            <input type="text">
            <input type="submit">
        </form>
        <?php
        if($_POST){
            echo 'форма принята';
        }
    }
}
