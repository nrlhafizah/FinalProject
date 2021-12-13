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

    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1')
        {
            $data=Log::all();
            return view("admin.list",compact("data"));
            return view('admin.list');
        }
        else
        {
            $data=project::all();
            return view('staff.listproject',['data'=>$data]);
     
        }
    }
    
}
