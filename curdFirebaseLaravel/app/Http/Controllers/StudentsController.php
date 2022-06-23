<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    function index(){
        return view('Pages.add');
    }
}
