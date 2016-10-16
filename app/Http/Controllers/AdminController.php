<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Services;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {

    private $data = array();

    public function __construct() {
        //$this->middleware('auth:admin');
    }

    public function Dashboard() {

        if (!is_null(session('usr'))) {
            //print_r($admin);
            $this->GetSettings();
            $this->data['page'] = "Dashboard";
            return view('admin.dashboard', $this->data);
        } else {
            return redirect()->action("AdminController@Login");
        }
    }

    public function Login() {
        return view('admin.login');
    }

    public function Services() {

        if (!is_null(session('usr'))) {
            $this->GetSettings();
            $cats = new \App\Categories();
            $service = new Services();
            $this->data['services'] = $service
                    ->join('categories','categories.cat_code','=','services.cat_code')
                    ->orderBy('ser_name','asc')
                    ->get();
            
            $cat = $cats->orderBy('cat_name', 'asc')->get();
            $this->data['cats'] = $cat;
            $this->data['page'] = "Services";
            return view('admin.services', $this->data);
        } else {
            return redirect()->action("AdminController@Login");
        }
    }

    public function Categories(Request $req) {

        if (!is_null(session('usr'))) {
            $this->GetSettings();
            //print_r($admin);
            $catid = 0;
            $cats = new \App\Categories();
            $this->data['page'] = "Services Categories";
            if (!is_null($req->cid)) {
                $catid = $req->cid;
                $acat = $cats->where(array('cat_id' => $catid))->first();
                $this->data['acat'] = $acat;
            } else {

                $cat = $cats->all();


                $this->data['cats'] = $cat;
            }
            return view('admin.categories', $this->data);
        } else {
            return redirect()->action("AdminController@Login");
        }
    }

    public function Commision() {
        $this->GetSettings();
        if (!is_null(session('usr'))) {
            //print_r($admin);
            $this->data['page'] = "Dashboard";
            return view('admin.commission', $this->data);
        } else {
            return redirect()->action("AdminController@Login");
        }
    }

    public function Reports() {
        $this->GetSettings();
        if (!is_null(session('usr'))) {
            //print_r($admin);
            $this->data['page'] = "Dashboard";
            return view('admin.report', $this->data);
        } else {
            return redirect()->action("AdminController@Login");
        }
    }

    public function LogOut() {
        Auth::logout();
        session()->flush();
        return redirect()->action("AdminController@Login");
    }

    public function Profile() {
        $this->GetSettings();
        if (!is_null(session('usr'))) {
            //print_r($admin);
            $this->data['page'] = "Dashboard";
            return view('admin.profile', $this->data);
        } else {
            return redirect()->action("AdminController@Login");
        }
    }

    public function Transactions() {
        $this->GetSettings();
        if (!is_null(session('usr'))) {
            //print_r($admin);
            $this->data['page'] = "Dashboard";
            return view('admin.transactions', $this->data);
        } else {
            return redirect()->action("AdminController@Login");
        }
    }

    public function NewCat(Request $req) {
        $cat = new \App\Categories();
        $code = $req->input('catcode');
        $name = $req->input('catname');

        $cat->cat_name = $name;
        $cat->cat_code = $code;

        if (isset($req->catid)) {


            $arr = array(
                'cat_name' => $name,
                'cat_code' => $code
            );

            if ($cat->where('cat_id', $req->catid)->update($arr)) {

                return redirect()->action("AdminController@Categories");
            } else {
                return redirect()->action("AdminController@Categories")->with('errors');
            }
        } else {
            if (!$cat->save()) {
                return redirect()->action("AdminController@Categories")->with('errors');
            } else {
                return redirect()->action("AdminController@Categories");
            }
        }
    }

    public function DoLogin(Request $req) {
        $this->validate($req, [
            'email' => 'required',
            'apassword' => 'required'
        ]);


        if (Auth::attempt(['email' => $req->input('email'), 'password' => $req->input('apassword')])) {
            $user = Auth::user();
            session(['usr' => $user]);
            if ($user->is_admin) {

                return redirect()->intended('admin');
            } else {
                return redirect()->intended('client');
            }
        } else {
            return redirect()->action("AdminController@Login")->with('errors');
        }

//        if (is_object($usr)) {
//            //echo $usr->admin_id;
////            echo $usr->user_name;
//            
//            var_dump($usr);        } else {
//
//            //return redirect()->intended('/admin');
//            return redirect()->action("AdminController@Login")->with('errors');
//        }
    }

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
