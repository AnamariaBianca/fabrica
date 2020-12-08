@extends('layout.master')

@section('content')

	<h1 class="text-2xl">Modifica contract</h1>

        <x-alert />
        <form method="post" action="{{route('contract.update',$contracte->id)}}" class="py-5">
            @csrf
            @method('put')
            
            <input type="text" name="denumire_contract" class="py-2 px-2 border rounded" value={{$contracte->denumire_contract}}>
            
            <div class="py-1">
            <textarea name="descriere_contract" class="p-2 rounded border " >{{$contracte->descriere_contract}}</textarea>
            </div>

            
           <select class="form-control m-bot15" name="furnizor_id" required>
           <option>Selecteaza furnizor</option>
          
            @foreach($furnizori as $furnizor)
            @if ($furnizor->id == $contracte->furnizor_id)
		   {
			<option value="{{$furnizor->id}}" selected >{{$furnizor->denumire_furnizor}}</option>
		   }
		   @else 
		   {
			<option value="{{$furnizor->id}}" >{{$furnizor->denumire_furnizor}}</option>
		   }
           @endif
           @endForeach
          
           </select></br></br>

           <select multiple class="form-control m-bot15" name="produse[]" required>
           <option>Selecteaza produs</option>
           @foreach($produse as $produs)
           
           
        <option value="{{$produs->id}}" @if( in_array( $produs->id, $contracte->produse->pluck('id')->toArray() ) ) 
                selected="selected" @endif>{{$produs->denumire_produs}}</option>
             
            
        
          @endForeach
           </select></br>

            <input type="submit" value="Update" class ="p-1 border rounded-lg"/>
        </form>

 <a href="{{route('contract.index')}}" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>

@endsection