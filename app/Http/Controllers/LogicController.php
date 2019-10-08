<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    //
    public function numbers()
    {
        for($i = 1 ; $i <= 1000 ; $i++)
        {
            echo $i;
            echo "<br>";
            if( $i % 2 == 0 ||  $i % 3 == 0 )
            {
                echo "*";
                echo "<br>";
            }
        }
    }
}
