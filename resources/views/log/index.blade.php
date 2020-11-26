@extends('layout.master')
@section('content')

<div class="flex justify-center border-b pb-4">
	        <h1 class="text-2xl">Lista logs</h1>
</div>

<ul class="my-5">
	<x-alert/>

	    @foreach($furnizori as $furnizor )
        

        <li class="flex justify-between p-2">
        
        
       


        </li>
        

        @endforeach


        

 </ul>

 
@endsection