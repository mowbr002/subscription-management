<!-- Extends app layout template -->
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
	
	@if($data['role'] == 'admin')
		{!! $admin_nav->asUl() !!}
	@endif
@endsection

@section('content')
<div id="container" class="content">
<form id="association_add" method="post" action="add">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="association_fields">
		<div class="labels">
			<label for="name">Association name:</label>
		</div>
		<div class="fields">
			<input type="text" name="name" id="name" />
		</div>
	</div>
	<input type="submit" value="Add">
</form>

</div>
@endsection