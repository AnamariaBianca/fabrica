@extends('layout.master')
@section('content')

<div class="flex justify-center border-b pb-4">
	        <h1 class="text-2xl">Lista logs</h1>
</div>

<ul class="my-5">
	<x-alert/>

		@foreach($logs as $log)
			
			<li class="flex justify-center p-2">
				@if($log->loggable_type == 'App\produs')	
					Model: Produs
				@elseif($log->loggable_type == 'App\furnizor')
					Model: Furnizor
				@elseif($log->loggable_type == 'App\contract')
					Model: Contract
				@endif
				<br>
				Model_id: {{$log->loggable_id}}
				<br>
				Action: {{$log->body}} 
			</li>
        

        @endforeach

 </ul>
 
 <a href="http://junior4.qik.ro/" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a></br></br>
 <a href="http://junior4.qik.ro/produs" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Produse</a>
 <a href="http://junior4.qik.ro/contract" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Contracte</a></br></br>
 <a href="http://junior4.qik.ro/furnizor" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Furnizori</a>

 
@endsection