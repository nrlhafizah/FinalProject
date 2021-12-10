<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Lists;
use App\Models\project;

class adminControl extends Controller
{
    public function list()
    {
        $data=Lists::all();
        return view("admin.list",compact("data"));
    }

    function addProject(Request $req)
    {
        $project = new project;

        $project->research=$req->research;
        $project->pname=$req->pname;
        $project->leader=$req->leader;
        $project->save();

        return redirect('test');
    }
}
