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
        produs::create($request->all());
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
        return redirect(route('produs.index'))->with('message','Updated');
    }

    public function destroy($id)
    {
        $produs = produs::findOrFail($id);
        $produs->delete();
        return redirect()->back()->with('message', 'Produs sters!');
    } 
}
