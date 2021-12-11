<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Log;
use App\Models\project;
use App\Models\Staff;

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
