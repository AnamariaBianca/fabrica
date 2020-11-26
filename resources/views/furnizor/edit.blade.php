@extends('layout.master')

@section('content')

	<h1 class="text-2xl">Modifica date furnizor</h1>

        <x-alert />
        <form method="post" action="{{route('furnizor.update',$furnizori->id)}}" class="py-5">
            @csrf
            @method('put')
            
            <input type="text" name="denumire_furnizor"  value={{$furnizori->denumire_furnizor}} class="py-2 px-2 border rounded" />
            
            
            <input type="submit" value="Update" class ="p-1 border rounded-lg"/>
        </form>

<a href="{{route('furnizor.index')}}" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>

@endsection