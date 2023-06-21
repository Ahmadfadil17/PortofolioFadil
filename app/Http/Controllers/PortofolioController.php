<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Profile;

class PortofolioController extends Controller
{
    //
    function show(){
        $data['admin'] = Admin::all();
        $data['profile'] = Profile::all();
        return view('portofolio',$data);
    }
}
