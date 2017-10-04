@extends('layouts.app')

@section('dynamic_nav')
	{!! $top_nav->asUl() !!}
@endsection

@section('content')
	<h1>You are editing:</h1>
	<h3>{{ $data['name'] }}</h3>
	<h3>Role: {{ $data['role'] }}</h3>
@endsection