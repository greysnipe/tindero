@extends('layout')

@section('content')
    @foreach($users as $user)
        <h6>
        	<p>{{ $user->name }}</p>
    	</h6>
    @endforeach
@stop