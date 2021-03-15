<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    $user =Auth::user();
    return view('home',compact('user');)
}
