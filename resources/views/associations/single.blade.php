@extends('layouts.app')

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@section('content')

	<div class="content">
		Name: {{ $data['name'] }}
	</div>

@endsection