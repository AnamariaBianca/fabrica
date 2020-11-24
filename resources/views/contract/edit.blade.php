@extends('layout.master')

@section('content')

	<h1 class="text-2xl">Modifica contract</h1>

        <x-alert />
        <form method="post" action="{{route('contract.update',$contracte->id)}}" class="py-5">
            @csrf
            @method('put')
            
            <input type="text" name="denumire_contract"  class="py-2 px-2 border rounded" value={{$contracte->denumire_contract}}/>
            
            <div class="py-1">
            <textarea name="descriere_contract" class="p-2 rounded border " >{{$contracte->descriere_contract}}</textarea>
            </div>
            <input type="submit" value="Update" class ="p-1 border rounded-lg"/>
        </form>

        <a href="/contract" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>

@endsection