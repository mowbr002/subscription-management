@extends('layouts.app')

@section('dynamic_nav')
	{!! $top_nav->asUl() !!}
@endsection

@section('content')

		<h1>Hi {{ $data['name'] }}</h1>
		<h3>Role: {{ $data['role'] }}</h3>
@endsection