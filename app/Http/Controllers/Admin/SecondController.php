<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SecondController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('showString3');
    }

    public function showString0() {
        return "Static Data 0";
    }
    public function showString1() {
        return "Static Data 1";
    }
    public function showString2() {
        return "Static Data 2";
    }
    public function showString3() {
        return "Static Data 3";
    }
    public function showString4() {
        return "Static Data 4";
    }
}
