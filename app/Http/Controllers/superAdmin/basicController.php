<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Session;
use Validator;
use Auth;

class basicController extends Controller
{
    public function index(){
    	return view('superAdmin.homepage');
    }
}
