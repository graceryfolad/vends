<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Http\Requests;

class ServicesController extends Controller
{
    //
    
    private function GetSettings() {
        $userinfo = session('usr');

        $name = $userinfo->first_name . " " . $userinfo->last_name;
        $role = 1;
        $this->data['name'] = $name;
        $this->data['role'] = $role;
    }
    public function NewService(Request $req) {
        
        $service = new Services();
        $service->ser_name = $req->sername;
        $service->ser_code = $req->sercode;
        $service->cat_code = $req->catcode;
        $service->ser_logo ="";
        
        if (isset($req->servid)) {

// edit a service
            $arr = array(
            );

            if ($cat->where('cat_id', $req->catid)->update($arr)) {

                return redirect()->action("AdminController@Categories");
            } else {
                return redirect()->action("AdminController@Categories")->with('errors');
            }
        } 
        else {
            // add new service
            
            if (!$service->save()) {
                return redirect()->action("AdminController@Services")->with('errors');
            } else {
                return redirect()->action("AdminController@Services");
            }
        }
    }
}
