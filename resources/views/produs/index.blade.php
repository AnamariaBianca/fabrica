@extends('layout.master')
@section('content')

<div class="flex justify-center border-b pb-4">
	        <h1 class="text-2xl">Lista produse</h1>
	        <a href="{{route('produs.create')}}" class="mx-10 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">Adauga produs</a>

</div>


<ul class="my-5">
	<x-alert/>

	    @foreach($produse as $produse)

        
        <li class="flex justify-between p-2">
            {{$produse->denumire_produs}}
            {{$produse->descriere_produs}}

            <div class="flex justify-between p-2">

					
					
					<a href="{{route('produs.edit',$produse->id)}}" class="text-yellow-400 cursor-pointer  text-white"><span class="fas fa-edit px-2"></a>



                    <span class="fas fa-trash text-red-400 p-1 cursor-pointer" onclick="event.preventDefault(); 
					if(confirm('Are you sure?')){
					document.getElementById('form-delete-{{$produse->id}}').submit()
				}"/>
					<form style="display:none" id="{{'form-delete-'.$produse->id}}" method="post" action="{{route('produs.destroy',$produse->id)}}">
						@csrf
						@method('delete')
					</form>
					



					
				</div>
            </li>
        

        @endforeach
 </ul>

 
@endsection

