<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Log;
use App\Models\project;

class adminControl extends Controller
{
    public function list()
    {
        $data=Log::all();
        return view("admin.list",compact("data"));
    }

    function addProject(Request $req)
    {
        $project = new project;

        $project->id=$req->id;
        $project->category=$req->category;
        $project->pname=$req->pname;
        $project->leader=$req->leader;
        $project->save();

        return redirect('test');
    }
}
