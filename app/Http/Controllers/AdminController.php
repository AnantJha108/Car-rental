<?php

namespace App\Http\Controllers;

use App\Models\Companye;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data['company'] = Companye::all();
        $data['users'] = User::all();
        return view('frontend/Adminview',$data);
    }
}
