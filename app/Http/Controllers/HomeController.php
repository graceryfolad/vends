<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }

    public function Airtime() {
        return view('guests.airtime');
    }

    public function About() {
        return view('guests.about');
    }

    public function Register() {
        return view('auth.register');
    }

    public function ResetPassword() {
        return view('paybills');
    }

    public function Paybills() {
        return view('paybills');
    }

    public function Login() {
        return view('auth.login');
    }

    public function DoRegister(Request $reqt) {
        $this->validate($reqt, [
            'firstname' => 'Required|Min:3|Max:15|Alpha',
            'lastname' => 'Required|Min:3|Max:15|Alpha',
            'email' => 'required|email|unique:users,email|Max:70',
            'phone' => 'required|unique:users,phone_number',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);
        $user = new User();

        $user->first_name = $reqt->input('firstname');
        $user->last_name = $reqt->input('lastname');
        $user->email = $reqt->input('email');
        $user->phone_number = $reqt->input('phone');
        $user->password = bcrypt($reqt->input('password'));
        $user->dist_id = 1;
        $user->type_id=1;
        $user->is_admin=0;
        if ($user->save()) {
            return redirect()->action("HomeController@Login");
        }
    }

    public function authenticate(Request $reqt) {
        $this->validate($reqt, [
            'email' => 'Required|email',
            'password' => 'required'
        ]);
//                $userLoging = DB::table('users')->where('email', '=', $reqt->input('email'))
        if (Auth::attempt(['email' => $reqt->input('email'), 'password' => $reqt->input('password')])) {
            $user = Auth::user();
            session(['usr' => $user]);
            return redirect()->intended('client');
        } else {
            return redirect()->action("HomeController@Login")->with('errors');
        }
//         $user = $users = DB::table('users')->where([['email', $reqt->input('email')],['password',$reqt->input('password') ]])->get();       
//         var_dump($users);     
    }

    public function Logout() {
        Auth::logout();
        session()->flush();
        return redirect()->action("HomeController@Login");
    }

}
