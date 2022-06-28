<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErpatController extends Controller
{
    public function initialize(Request $request) {
        return response()->json( array("success"=>true) );
    }
}
