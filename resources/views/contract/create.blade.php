@extends('layout.master')
@section('content')

<h1>Adauga contract</h1>
<x-alert />
        <form method="post" action="{{route('contract.store')}}" class="py-5" >
            @csrf
           <div class="py-1">
            <input type="text" name="denumire_contract" class="py-2 px-2 border rounded" placeholder="Denumire"/>
           </div>
           <div class="py-1">
           <textarea name="descriere_contract" class="p-2 rounded border " placeholder="Descriere"></textarea>
           </div>
            <input type="submit" value="Adauga" class ="p-1 border rounded-lg"/>
            
        </form>

<a href="/contract" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>



@endsection
