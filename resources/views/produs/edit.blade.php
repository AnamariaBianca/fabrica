@extends('layout.master')

@section('content')

	<h1 class="text-2xl">Modifica date produs</h1>

        <x-alert />
        <form method="post" action="{{route('produs.update',$produse->id)}}" class="py-5">
            @csrf
            @method('put')
            
            <input type="text" name="denumire_produs"  value={{$produse->denumire_produs}} class="py-2 px-2 border rounded" />
            
            <div class="py-1">
            <textarea name="descriere_produs" class="p-2 rounded border " >{{$produse->descriere_produs}}</textarea>
            </div>
            <input type="submit" value="Update" class ="p-1 border rounded-lg"/>
        </form>

<a href="{{route('produs.index')}}" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>   

@endsection