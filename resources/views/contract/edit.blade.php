@extends('layout.master')

@section('content')

	<h1 class="text-2xl">Modifica contract</h1>

        <x-alert />
        <form method="post" action="{{route('contract.update',$contracte->id)}}" class="py-5">
            @csrf
            @method('put')
            
            <input type="text" name="denumire_contract"  value={{$contracte->denumire_contract}} class="py-2 px-2 border rounded" />
            
            <div class="py-1">
            <textarea name="descriere_contract" class="p-2 rounded border " >{{$contracte->descriere_contract}}</textarea>
            </div>
            <input type="submit" value="Update" class ="p-1 border rounded-lg"/>
        </form>

       

@endsection