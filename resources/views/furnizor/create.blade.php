@extends('layout.master')
@section('content')

<h1>Adauga furnizor</h1>
<x-alert />
        <form method="post" action="{{route('furnizor.store')}}" class="py-5" >
            @csrf
           <div class="py-1">
            <input type="text" name="denumire_furnizor" class="py-2 px-2 border rounded" placeholder="Denumire"/>
           </div>
          
            <input type="submit" value="Adauga" class ="p-1 border rounded-lg"/>
            
        </form>

<a href="{{route('furnizor.index')}}" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>



@endsection
