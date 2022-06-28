<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErpatController extends Controller
{
    public function init(Request $request) {
        return response()->json( array("success"=>true) );
    }

    public function setup(Request $request) {
        return response()->json( array("success"=>true) );
    }
}
