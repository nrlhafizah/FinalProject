<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\project;
use App\Models\Staff;
use App\Models\User;

class staffControl extends Controller
{
    public function show()
    {
        $data=project::all();
        return view('staff.listproject',['data'=>$data]);
    }


    function showlist()
    {
        $data=project::all();
        return view("staff.updateproj",compact("data"));

    }

    function showw()
    {
        $data=User::all();
        return view('staff.action',['data'=>$data]);
    }

    function updateProject(Request $req)
    {

        
        $upd= new Staff;

        $upd->member=$req->member;
        $upd->start_date=$req->sdate;
        $upd->end_date=$req->edate;
        $upd->duration=$req->duration;
        $upd->cost=$req->cost;
        $upd->client=$req->client;
        $upd->stage=$req->stage;
        $upd->progress=$req->progress;
        $upd->save();

        return redirect('stf');
    }

    function detail()
    {
        $x=DB::table('users', 'project')
        ->join('project_progress','users.id', "=", "project_progress.user_id", 'project_progress',
        'project.id', "=",'project_progress.project_id')->get();
        return view("staff.listproject",['x'=>$x]);
    }

    function update(Request $req)
    {
        $detail = new Staff;

        $detail->id = $req->id;
        $detail->start = $req->start;
        $detail->end = $req->end;
        $detail->duration = $req->duration;
        $detail->cost = $req->cost;
        $detail->client = $req->client;
        $detail->save();

        return redirect('test1');
    }

 

}
