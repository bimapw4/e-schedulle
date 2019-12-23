<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchedulleController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");
    }
}
