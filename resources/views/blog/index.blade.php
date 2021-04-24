@extends('layouts.base')

@section('content')

	<section class="py-3">
      <div class="container">
        <div class="row">

        	@foreach($data['posts'] as $d)
	          <div class="col-sm-12 col-md-4">
              <a href="{{url($d['slug'])}}">
                <img class="image" src="{{url($d['featured_image'])}}" alt="{{ $d['featured_image_caption'] }}">
              </a>
	            <a href="{{url($d['slug'])}}">
                <h3 class="mt-3 lead"><strong>{{ $d['title'] }}</strong></h3>
              </a>
	            <p class="lead">
	              {{ $d['summary'] }}
	            </p>
	          </div>
	         @endforeach
        </div>
      </div>
    </section>

@endsection