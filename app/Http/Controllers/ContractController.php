<?php

namespace App\Http\Controllers;
use App\contract;
use App\produs;
use App\furnizor;
use App\Http\Requests\ContractCreateRequest;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contracte= contract::all();
        return view('contract.index',compact('contracte'));
    }

    public function create()
    {
        return view('contract.create');
    }

    public function store(ContractCreateRequest $request)
     {
         dd($request->all());
        // contract::create($request->all());
        // return redirect()->back()->with ('message', 'Contract adaugat!');
     }
}
