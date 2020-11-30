<?php

namespace App\Http\Controllers;
use App\produs;
use App\furnizor;
use App\contract;


use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $produse= produs::withTrashed()->get();
        $furnizori= furnizor::withTrashed()->get();
        $contracte = contract::withTrashed()->get();
        //$trashedAndNotTrashed = produs::withTrashed()->get();
    	return view('log.index',compact('contracte','furnizori','produse'));
    }
}
