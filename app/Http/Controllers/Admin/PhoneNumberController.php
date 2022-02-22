<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PhoneNumber;
use App\Organisation;
use App\Usersorganization;
use Log;



class PhoneNumberController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        return view('pages.phonenumber');
    }

}
