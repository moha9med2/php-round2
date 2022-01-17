<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apiController extends Controller
{
    public function api(){

        $arr = ['ahmed','mohamed','ali'];
        // $arr = DB::select('select * from employees');

        return response()->json($arr);
    }
}
