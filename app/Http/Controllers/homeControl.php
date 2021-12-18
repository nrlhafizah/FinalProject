<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\project;
use App\Models\Staff;
use App\Models\User;

class homeControl extends Controller
{
    function index()
    {
        return view("home");
    }


    public function show()
    {
        $data=User::all();
        return view('admin.createproject',['data'=>$data]);
    }

    function showlist()
    {
        $data=Staff::all();
        return view("admin.list",compact("data"));

    }

    function addProject(Request $req)
    {

        $newproject= new project;

        $newproject->project_category=$req->type;
        $newproject->project_name=$req->name;
        $newproject->project_leader=$req->select;
        $newproject->save();

        return redirect('create');
    }

    function leader()
    {
        
        $x=DB::table('users')
        ->join('project','users.id', "=", "project.project_leader")->get();
        return view("admin.list",['x'=>$x]);
    }

    function leader1()
    {
        
        $x=DB::table('users')
        ->join('project','users.id', "=", "project.project_leader")->get();
        return view("staff.listproject",['x'=>$x]);
    }

    function listonly()
    {
        
        $id=Auth::user()->id;
        $lead=project::all('project_leader')->first();

        if($id==$lead->project_leader)
        {
            $data=$lead->project;
            return view('staff.listproject',['data'=>$data]);
        }
      
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
            return view('staff.staffpage');
     
        }
    }
    
}
