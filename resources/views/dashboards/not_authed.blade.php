@extends('layouts.app')

@section('dynamic_nav')
	{!! $top_nav->asUl() !!}
@endsection

@section('content')
	<h1>You are not authorized to view or edit other users</h1>
@endsection