@extends('layout.master')
@section('content')

<div class="flex justify-center border-b pb-4">
	        <h1 class="text-2xl">Lista logs</h1>
</div>

<ul class="my-5">
	<x-alert/>

	    @foreach($furnizori as $furnizor)
        

        <li class="flex justify-center p-2">
        
            
            @if($furnizor->created_at)
            Model: furnizor
            </br>
            Id : {{$furnizor->id}}
            </br>
            Action : Created at {{$furnizor->created_at}}
            </br>
            @endif
            

            @if($furnizor->deleted_at)
            Model: furnizor
            </br>
            Id : {{$furnizor->id}}
            </br>
            Action : Deleted at {{$furnizor->deleted_at}}
            </br>
            @endif 

            
            @if($furnizor->updated_at > $furnizor->created_at && !$furnizor->deleted_at)
            Model: furnizor
            </br>
            Id : {{$furnizor->id}}
            </br>
            Action : Updated at {{$furnizor->updated_at}}
            </br>
            @endif

        
         </li>
        

        @endforeach


        

 </ul>


 <ul class="my-5">
	<x-alert/>

	    @foreach($produse as $produs)
        

        <li class="flex justify-center p-2">
            
            @if($produs->created_at)
            Model: produs
            </br>
            Id : {{$produs->id}}
            </br>
            Action : Created at {{$produs->created_at}}
            </br>
            @endif
            

            @if($produs->deleted_at)
            Model: produs
            </br>
            Id : {{$produs->id}}
            </br>
            Action : Deleted at {{$produs->deleted_at}}
            </br>
            @endif 

            
            @if($produs->updated_at > $produs->created_at && !$produs->deleted_at)
            Model: produs
            </br>
            Id : {{$produs->id}}
            </br>
            Action : Updated at {{$produs->updated_at}}
            </br>
            @endif

        
         </li>
        

        @endforeach


        

 </ul>


 <ul class="my-5">
	<x-alert/>

	    @foreach($contracte as $contract)
        

        <li class="flex justify-center p-2">
            
            @if($contract->created_at)
            Model: contract
            </br>
            Id : {{$contract->id}}
            </br>
            Action : Created at {{$contract->created_at}}
            </br>
            @endif
            

            @if($contract->deleted_at)
            Model: contract
            </br>
            Id : {{$contract->id}}
            </br>
            Action : Deleted at {{$contract->deleted_at}}
            </br>
            @endif 

            
            @if($contract->updated_at > $contract->created_at && !$contract->deleted_at)
            Model: contract
            </br>
            Id : {{$contract->id}}
            </br>
            Action : Updated at {{$contract->updated_at}}
            </br>
            @endif

        
         </li>
        

        @endforeach


        

 </ul>
 

 
@endsection