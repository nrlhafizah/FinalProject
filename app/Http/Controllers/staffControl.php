<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\User;
use App\Models\Project;

class staffControl extends Controller
{
    public function show()
    {
        $data=Project::all();
        return view('staff.listproject',['data'=>$data]);
    }


    function showlist($project_id)
    {
        $user=User::all();
        $data=project::find($project_id);

        return view('staff.action',['data'=>$data, 'user'=>$user]);

    }


    function updateProject(Request $req)
    {

      
        $upd=Project::find($req->project_id);
        
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

}
