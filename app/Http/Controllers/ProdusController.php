<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProdusCreateRequest;
use Illuminate\Http\Request;
use App\produs;


class ProdusController extends Controller
{
    public function index()
    {
        $produse= produs::all();
        return view('produs.index',compact('produse'));
    }

    public function create()
    {
        return view('produs.create');
    }

    public function store(ProdusCreateRequest $request)
     {
        
        // dd($request->all());
        $produs=produs::create($request->all());
        $produs->logs()->create(['body' => 'Created']);
        return redirect()->back()->with ('message', 'Produs adaugat!');
     }

    public function edit(produs $produse)
    {
         
    	return view('produs.edit',compact('produse'));
    }
     public function update(ProdusCreateRequest $request, produs $produse)
    {
        //dd($request->all());
        $produse->update(['denumire_produs'=> $request->denumire_produs]);
        $produse->update(['descriere_produs'=> $request->descriere_produs]);
        $produse->logs()->create(['body' => 'Updated']);
        return redirect(route('produs.index'))->with('message','Updated');
    }

    public function delete($id)
    {
        $produs = produs::findOrFail($id);
        $produs->delete();
        $produs->logs()->create(['body' => 'Deleted']);

        return redirect()->back()->with('message', 'Produs sters!');
    } 
}
