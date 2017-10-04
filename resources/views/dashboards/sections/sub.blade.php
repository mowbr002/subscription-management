<div class="function_group">
<h3>{{ $group['name'] }}</h3>
	<ul>
	@foreach($group['functions'] as $function)
		<li><a href="{{ $function['route'] }}">{{ $function['name'] }}</a></li>
	@endforeach
	</ul>
</div>