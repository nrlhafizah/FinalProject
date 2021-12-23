<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;

use App\Models\project;
use App\Models\Staff;
use App\Models\User;

class staffControl extends Controller
{

    function showForm($project_id)
    {
        $data=Project::find($project_id);
        return view('staff.action',['data'=>$data]);
    }


    function updateProject(Request $req)
    {

        $upd= Project::find($req->project_id);

        echo $upd->member=implode(',',(array)$req->member);
        $upd->start_date=$req->sdate;
        $upd->end_date=$req->edate;
        $upd->cost=$req->cost;
        $upd->client=$req->client;
        $upd->stage=$req->stage;
        $upd->progress=$req->progress;

        $startdate = new DateTime($upd->start_date);
        $enddate = new DateTime($upd->end_date);
        $interval = $startdate->diff($enddate);
        $upd->duration=$interval->format('%m');

        $upd->save();

        return redirect('stf');
    }


    function deleteProject($project_id)
    {
        $data=Project::find($project_id);
        $data->delete();
        return redirect("/list");
    }
}
