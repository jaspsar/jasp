@extends('layouts.app')
@section('content')
<div class="container">

	<form action="{{ url('/plagas/'.$plaga->id)}}" method="post">
		@csrf
		{{method_field('PATCH')}}
		@include('plagas.form',['modo'=>'Editar']);
	</form>
</div>
@endsection
<!---->