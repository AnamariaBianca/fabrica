<?php

namespace App\Http\Controllers;
use App\contract;
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
        // dd($request->all());
        contract::create($request->all());
        return redirect()->back()->with ('message', 'Contract adaugat!');
     }

    public function edit(contract $contracte)
    {
         
    	return view('contract.edit',compact('contracte'));
    }
     public function update(ContractCreateRequest $request, contract $contracte)
    {
        //dd($request->all());
        $contract = contract::find($id);
        $contracte->update(['denumire_contract'=> $request->denumire_contract]);
        $contracte->update(['descriere_contract'=> $request->descriere_contract]);
        return redirect(route('contract.index'))->with('message','Updated');
    }

    public function destroy($id)
    {
        //dd($contracte);
        $contract = contract::findOrFail($id);
        $contract->delete();
        return redirect()->back()->with('message', 'Contract sters!');
    } 

    
}
