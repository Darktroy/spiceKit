<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About us | Goodsaltz Restaurant PJ</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The menu offers familiar,comfort food with unusual combinations in taste and 
      technique sparking excitement from the usual fare.">
<link rel="shortcut icon" href="{{ asset('divira/clients/goodsaltz/favicon.ico') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('divira/clients/goodsaltz/main.css') }}">
<link rel="stylesheet" href="{{ asset('divira/clients/goodsaltz/nav.css') }}">

    
</head>
<body id="about">
<div class="nav">
<ul>
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="#">Menus</a>
<ul>
    @foreach ($menus as $menu)
<li><a href="{{url('menuList/'.$menu['menu_id'])}}">{{$menu['menu_name']}}</a></li>
    @endforeach
</ul>
</li>
<li><a href="{{url('/thegallery')}}">Gallery</a></li>
<li><a href="#">Reservations</a></li>
<li><a href="#">Location</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Join us!</a></li>
</ul>
</div><div class="bg">
<div class="slides">
	<div class="slides-container">
            @foreach($bkimages as $bkimage)
                <img src="{{ url('bgImages/'.$bkimage['bgImages']) }}" alt="restaurant photo">
            @endforeach
	</div>
</div>
  </div>
<div class="sidebar"> 
  <p><a href="clients/goodsaltz/index.html"><img src="{{ asset('divira/clients/goodsaltz/i/logo.png') }}" 
                                                 class="logo" alt="Goodsaltz"></a></p>
  <h1>Hi there!</h1>
  <p>Goodsaltz is a family restaurant filled with good food and friendly vibe. The menu offers familiar, comfort food with unusual combinations in taste and technique sparking excitement from the usual fare.</p>
  <p> In a space that is inspired by an eclectic family home - a collection of old family pieces, garage sale collectibles and found objects recycled with a purpose. Goodsaltz is about authenticity, taking the most basic ingredients (and things) and making it tasty and special.</p>
<div class="social">Find us on these networks<br>
<a href="http://www.facebook.com/goodsaltz" target="_blank">
    <img src="{{ asset('divira/clients/goodsaltz/i/facebook.svg') }}" alt="Goodsaltz"></a> 
    <a href="http://www.twitter.com/goodsaltz" target="_blank">
        <img src="{{ asset('divira/clients/goodsaltz/i/twitter.svg') }}" alt="Goodsaltz"></a> 
    <a href="http://www.instagram.com/goodsaltz" target="_blank">
        <img src="{{ asset('divira/clients/goodsaltz/i/instagram.svg') }}" alt="Goodsaltz"></a>
    <p class="credit">&copy; Avanti Sette Sdn Bhd. Site designed by 
        <a href="http://www.tommyng.com" title="freelance web designer malaysia" target="_blank">Tommy Ng</a></p></div>
</div> <!-- end sidebar --!>  
<div class="minmax"><a href="#" class="min"><img src="{{ asset('divira/clients/goodsaltz/i/min.png') }}" alt=""></a> 
       <a href="#" class="max"><img src="{{ asset('divira/clients/goodsaltz/i/max.png') }}" alt=""></a></div>
<script src="{{ asset('divira/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}"></script>
<script>window.jQuery || document.write('<script src="jq.js"><\/script>')</script>
<script src="{{ asset('divira/clients/goodsaltz/plugins.js') }}"></script>
       <script>$(function(){$(".sidebar").animate({left:"0"},{duration: 1000});});</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37897831-4', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>