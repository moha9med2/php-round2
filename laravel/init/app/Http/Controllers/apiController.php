<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function api(){

        $arr = ['ahmed','mohamed','ali'];
        return response()->json($arr);
    }
}
