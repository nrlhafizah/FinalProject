<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminControl extends Controller
{
    public function user()
    {
        return view("admin.users");
    }
}
