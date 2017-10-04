@extends('layouts.app')


@section('dynamic_nav')
	{!! $top_nav->asUl() !!}
	
	@if($data['role'] == 'admin')
		{!! $admin_nav->asUl() !!}
	@endif
@endsection


@section('content')
	<h1>Admin Dashboard</h1>
	
	<div class="function_wrap">
		@each('dashboards.sections.sub', $data['grouped'], 'group');
	</div>
@endsection