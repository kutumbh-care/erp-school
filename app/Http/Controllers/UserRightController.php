<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRightController extends Controller
{
    public function UserRight(){
        return view('user_right.user_right');
    }
}
