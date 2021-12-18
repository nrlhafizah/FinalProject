<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\project;

class adminControl extends Controller
{
 

    function addProject(Request $req)
    {
        $data = new project;

        $data->id=$req->id;
        $data->category=$req->category;
        $data->pname=$req->pname;
        $data->leader=$req->leader;
        $data->save();

        return redirect('test');
    }
}
