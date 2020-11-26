@extends('layout.master')
@section('content')

<div class="flex justify-center border-b pb-4">
	        <h1 class="text-2xl">Lista logs</h1>
</div>

<ul class="my-5">
	<x-alert/>

	    @foreach($furnizori as $furnizor )
        <li class="flex justify-between p-2">
        
        
        Model: furnizor
        </br>
        Id : {{$furnizor->id}}
        </br>
        @if($furnizor->created_at)
        Action : Created
        @elseif($furnizor->deleted_at)
        Action : Deleted
        @elseif($furnizor->updated_at)
        Action : Updated
        @endif

           
        
            

            </li>
        

        @endforeach
 </ul>

 
@endsection