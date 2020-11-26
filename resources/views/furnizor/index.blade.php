@extends('layout.master')
@section('content')

<div class="flex justify-center border-b pb-4">
	        <h1 class="text-2xl">Lista furnizori</h1>
	        <a href="{{route('furnizor.create')}}" class="mx-10 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">Adauga furnizor</a>

</div>


<ul class="my-5">
	<x-alert/>

	    @foreach($furnizori as $furnizori)

        
        <li class="flex justify-between p-2">
            {{$furnizori->denumire_furnizor}}
            

            <div class="flex justify-between p-2">

					
					
					<a href="{{route('furnizor.edit',$furnizori->id)}}" class="text-yellow-400 cursor-pointer  text-white"><span class="fas fa-edit px-2"></a>



                    <span class="fas fa-trash text-red-400 p-1 cursor-pointer" onclick="event.preventDefault(); 
					if(confirm('Are you sure?')){
					document.getElementById('form-delete-{{$furnizori->id}}').submit()
				}"/>
					<form style="display:none" id="{{'form-delete-'.$furnizori->id}}" method="post" action="{{route('furnizor.destroy',$furnizori->id)}}">
						@csrf
						@method('delete')
					</form>
					



					
				</div>
            </li>
        

        @endforeach
 </ul>

 
@endsection
