<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{

    public function getIndex() {
//        $obj = new \stdClass();
//        $obj->name='Ali';
//        $obj->age=28;
//        $obj->city='Tanta';
//        return view('welcome', compact('obj'));

        $data =[];
        $data['name']='Ahmed';
        $data['age']=25;
        $data['city']='Cairo';
        return view('welcome', compact('data'));
//        return view('welcome')->with(['name'=> 'Ahmed', 'age'=>'25', 'city'=> 'Mansoura']);
    }

    public function showAdminName() {
        return "AHmed Mohamed Elsheikh";
    }
}
