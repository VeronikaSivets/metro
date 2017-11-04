<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	We are on page with settings id = {{$setting->id}} with title {{$setting->title}}
	@if ($setting->has('diseases'))
	<ul>
		@foreach ($setting->diseases as $disease)
		 <li> <a href="{{ route('disease', $disease->id)}}">{{$disease->title}} - {{$disease->description}}</a> </li>
		@endforeach
	<ul>
	
	@endif
</body>
</html>


