<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientsController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth');
    }
    
    public function index() {
        echo "welcome";
//        return view('customers.index');
    }
}
