<?php

namespace App\Http\Controllers;
use App\produs;
use App\furnizor;
use App\contract;
use App\log;


use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $logs = log::all();
    	return view('log.index',compact('logs'));
    }

    
}
