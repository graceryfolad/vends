<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ClientController extends Controller {

    private $ur;
    private $vdata = array();
    public function __construct() {

//        $this->middleware('auth');
    }

    public function index() {
        $this->ur = session('usr');
        if (is_null($this->ur)) {
            return redirect()->action("HomeController@Login");
        } else {
            
            $clientname = $this->ur->first_name . " " . $this->ur->last_name;
            $this->vdata['name']=$clientname;
        	return view('customers.index',  $this->vdata);
        }
    }
    
    public function Profile(Request $req) {
        if (is_null($this->ur)) {
            return redirect()->action("HomeController@Login");
        } else {
            
            $clientname = $this->ur->first_name . " " . $this->ur->last_name;
            $this->vdata['name']=$clientname;
        	return view('customers.index',  $this->vdata);
        }
    }
    public function Faq(Request $req) {
        $this->ur = session('usr');
        if (is_null($this->ur)) {
            return redirect()->action("HomeController@Login");
        } else {
            
            $cat = $req->cat;
       echo $cat;
        }
    }
    public function Business(Request $req) {
        // the the list of business
        
    }
    public function Support(Request $req) {
        
    }
    public function History(Request $req) {
        
    }
    
    public function Category(Request $req) {
       $this->ur = session('usr');
       if (is_null($this->ur)) {
            return redirect()->action("HomeController@Login");
        } else {
            
            $clientname = $this->ur->first_name . " " . $this->ur->last_name;
            $this->vdata['name']=$clientname;
            $cat = $req->cat;
            $type = "";
            if(!is_null($req->type)){
                $type = $req->type;
            }
            
            if(strlen($type) > 0){
               return view('customers.airtimepurchase',  $this->vdata); 
            }
            else{
                switch ($cat){
                case 101:
                    // show airtime
                    return view('customers.airtime',  $this->vdata);
                    break;
                case 102:
                    // show pay bills
                    return view('customers.paybills',  $this->vdata);
                     break;
                 case 103:
                     break;
            }
            }
            
       
        }
        
        
    }
    public function Vendor(Request $req) {
       if (is_null($this->ur)) {
            return redirect()->action("HomeController@Login");
        } else {
            
            $cat = $req->cat;
       echo $cat;
        }
    }
}
