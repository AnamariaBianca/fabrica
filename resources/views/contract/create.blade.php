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
           <div class="py-1">

           <select multiple class="form-control m-bot15" name="furnizor_id" required>
           <option>Selecteaza furnizor</option>
          @foreach($furnizori as $furnizor)
           <option value="{{$furnizor->id}}">{{$furnizor->denumire_furnizor}}</option>
          @endForeach
          
           </select></br></br>

           <select multiple class="form-control m-bot15" name="produse[]" required>
           <option>Selecteaza produs</option>
          @foreach($produse as $produs)
           <option value="{{$produs->id}}">{{$produs->denumire_produs}}</option>
          @endForeach
          
           </select></br>
           

            
            <input type="submit" value="Adauga" class ="p-1 border rounded-lg"/>
            
        </form>

        

<a href="{{route('contract.index')}}" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>



@endsection
