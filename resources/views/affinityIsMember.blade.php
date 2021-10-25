@extends('layouts.appmaster')
@section('title', 'Affinity Groups')
@section('content')

       <p>   You are a member of  {{ $groupName }}  </p>
            <form action="remove" method="get">
        		@csrf
    			<button name="removeMember" type="submit" class="btn btn-dark">Remove</button>
			</form>   
       
@endsection  