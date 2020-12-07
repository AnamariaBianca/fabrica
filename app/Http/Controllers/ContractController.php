<?php

namespace App\Http\Controllers;
use App\contract;
use App\furnizor;
use App\produs;
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
        $contracte= contract::all();
        $produse= produs::all();
        $furnizori= furnizor::all();
        return view('contract.create',compact('contracte','produse','furnizori'));
    }

    public function store(ContractCreateRequest $request)
     {
        //dd($request->all());
       $contract=new contract(request(['denumire_contract','descriere_contract','furnizor_id']));
       $contract->save();
       $contract->produse()->attach(request('produse'));
       $contract->logs()->create(['body' => 'Created']);

        return redirect()->back()->with ('message', 'Contract adaugat!');
     }

    public function edit(contract $contracte)
    {
        $contracte = contract::findorFail($contracte->id);
        $produse= produs::all();
        $furnizori= furnizor::all();
        
    	return view('contract.edit',compact('contracte','produse','furnizori'));
    }
     public function update(ContractCreateRequest $request, contract $contracte)
    {
        //dd($request->all());
        $contract = contract::find($request->id);
        $contracte->update(['denumire_contract'=> $request->denumire_contract]);
        $contracte->update(['descriere_contract'=> $request->descriere_contract]);
        $contracte->update(['furnizor_id'=> $request->furnizor_id]);
        $contracte->update(['produs_id'=> $request->produs_id]);
        $contracte->produse()->sync(request('produse'));
        $contracte->logs()->create(['body' => 'Updated']);


        
        return redirect(route('contract.index'))->with('message','Updated');
    }

    public function delete($id)
    {
        //dd($contracte);
        $contract = contract::findOrFail($id);
        $contract->delete();
        $contract->logs()->create(['body' => 'Deleted']);

        return redirect()->back()->with('message', 'Contract sters!');
    } 

    
    
}
