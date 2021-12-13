<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\project;
use App\Models\Log;

class homeControl extends Controller
{
    function index()
    {
        return view("home");
    }

    function indexadmin()
    {
        return view("admin.adminpage");
    }

    function test2()
    {
        return view("admin.createproject");
    }


    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1')
        {
           
            return view('admin.adminpage');
        }
        else
        {
            $data=project::all();
            return view('staff.listproject',['data'=>$data]);
     
        }
    }
    
}
