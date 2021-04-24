@extends('layouts.base')

@section('content')

	<div class="container embedded_image">
		@if($data['post']['featured_image'])
		<img src="{{ url($data['post']['featured_image']) }}" alt="{{ $data['post']['featured_image_caption'] }}" />
		@endif
		<h2>{{ $data['post']['title'] }}</h2>
		{!! $data['post']['body'] !!}
	</div>
	
	<div class="container">
		@comments(['model' => $data['post']])
	</div>

@endsection