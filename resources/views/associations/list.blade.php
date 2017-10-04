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

@section('dynamic_nav')
	{!! $top_nav->asUl() !!}
@endsection

@section('content')
	<div class="content">
		<ul>
			@foreach ($associations as $association)
				<li>
					<a href="association/{{ $association['aid'] }}">{{ $association['name'] }}</a>
				</li>
			@endforeach
		</ul>
	</div>
@endsection