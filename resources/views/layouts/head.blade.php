<head prefix="og: http://ogp.me/ns#">

	<meta name="csrf-token" content="{{ csrf_token() }}" >
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if($data['meta']['title'])
    
    <meta name="author" content="Keith Zano" />
    <!-- canonical -->
    <link rel="canonical" href="{{$data['post']['canonical']}}" />


    <!-- Twiter card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="{{$data['meta']['description']}}" />
    <meta name="twitter:title" content="{{$data['meta']['title']}}" />
    <meta name="twitter:site" content="@keithzano" />
    <meta name="twitter:image" content="{{$data['post']['featured_image']}}" />
    <meta name="twitter:creator" content="@keithzano" />

    <!-- Facebook ogp -->
    <meta property="og:title" content="{{$data['meta']['title']}}">
    <meta property="og:description" content="{{$data['meta']['description']}}">
    <meta property="og:url" content="{{$data['post']['canonical']}}">
    <meta prefix="og: http://ogp.me/ns#" property="og:image" itemprop="image" content="{{$data['post']['featured_image']}}">
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="website design image" />
    <meta property="og:site_name" content="Keithzano.com">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="1518822775172289" />

    <!-- Description -->
    <meta name="description" content="{{$data['meta']['description']}}" />
    <title>{{$data['meta']['title']}}</title>
    @endif

    

	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">


    
    <!-- Styles -->	
	<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
 

	
</head>