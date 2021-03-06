<?php

namespace App\Http\Controllers;
use App\Http\Requests\FurnizorCreateRequest;
use Illuminate\Http\Request;
use App\furnizor;


class FurnizorController extends Controller
{
    public function index()
    {
        $furnizori= furnizor::all();
        return view('furnizor.index',compact('furnizori'));
    }

    public function create()
    {
        return view('furnizor.create');
    }

    public function store(FurnizorCreateRequest $request)
     {
        // dd($request->all());
        $furnizor=furnizor::create($request->all());
        $furnizor->logs()->create(['body' => 'Created']);
        return redirect()->back()->with ('message', 'Furnizor adaugat!');
     }

    public function edit(furnizor $furnizori)
    {
         
    	return view('furnizor.edit',compact('furnizori'));
    }
     public function update(FurnizorCreateRequest $request, furnizor $furnizori)
    {
        //dd($request->all());
        $furnizori->update(['denumire_furnizor'=> $request->denumire_furnizor]);
        $furnizori->logs()->create(['body' => 'Updated']);

        return redirect(route('furnizor.index'))->with('message','Updated');
    }

    public function delete($id)
    {
        $furnizor = furnizor::findOrFail($id);
        $furnizor->delete();
        $furnizor->logs()->create(['body' => 'Deleted']);

        return redirect()->back()->with('message', 'Furnizor sters!');
    } 
}
