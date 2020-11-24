@extends('layout.master')
@section('content')

<div class="flex justify-center border-b pb-4">
	        <h1 class="text-2xl">Lista contracte</h1>
	        <a href="/contract/create" class="mx-10 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">Adauga contract</a>

</div>

<ul class="my-5">
	<x-alert/>

	    @foreach($contracte as $contracte)

        
        <li class="flex justify-between p-2">
            {{$contracte->denumire_contract}}

            <div class="flex justify-between p-2">

					
					
					<a href="{{'/contract/'.$contracte->id.'/edit'}}" class="text-yellow-400 cursor-pointer  text-white"><span class="fas fa-edit px-2"></a>




					



					
				</div>
            </li>
        

        @endforeach
 </ul>
@endsection