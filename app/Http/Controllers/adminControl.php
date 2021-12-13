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
        $data = new project;

        $data->id=$req->id;
        $data->category=$req->category;
        $data->pname=$req->pname;
        $data->leader=$req->leader;
        $data->save();

        return redirect('test');
    }
}
