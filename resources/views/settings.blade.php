<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<br>



<ul class="metro" >
@foreach ($settings as $setting)
<li><a href="{{ route('settings.get', $setting->id) }}"><img src="{{$setting->img}}"><span>{{$setting->title}}</span></a></li>
@endforeach
</ul>
<div class="box">
<span class="close"></span>
<p></p>
</div>
</body>
</html>


