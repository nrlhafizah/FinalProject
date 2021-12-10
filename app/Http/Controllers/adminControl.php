<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;

class adminControl extends Controller
{
    public function list()
    {
        $data=lists::all();
        return view("admin.list",compact("data"));
    }
}
