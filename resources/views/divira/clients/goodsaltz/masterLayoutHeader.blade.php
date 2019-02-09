
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Photo Gallery | Goodsaltz Restaurant PJ</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Photo gallery of our restaurant - a space that is inspired by an eclectic family home.">
<link rel="shortcut icon" href="{{ asset('divira/clients/goodsaltz/favicon.ico')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('divira/clients/goodsaltz/main.css')}}">
<link rel="stylesheet" href="{{ asset('divira/clients/goodsaltz/nav.css')}}">
<link rel="stylesheet" href="{{ asset('divira/clients/goodsaltz/lbox.css')}}">
</head>
<body>
<div class="nav">
<ul>
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="#">Menus</a>
<ul>
    @foreach ($menus as $menu)
   
<li><a href="{{url('menuList/'.$menu['menu_id'])}}">{{$menu['menu_name']}}</a></li>
@if(count($menu['submenu'])>0)
    
        @foreach ($menu['submenu'] as $subMenu)
        <li>
        <li><a href="{{url('submenuList/'.$menu['menu_id'].'/'.$subMenu['submenuid'])}}">
                &nbsp;&nbsp;&nbsp;{{$subMenu['submenu_name']}}</a></li>
        
        </li>
        
        @endforeach
    
@endif
    @endforeach
</ul>

</li>

<li><a href="{{url('/thegallery')}}">Gallery</a></li>
<li><a href="#">Reservations</a></li>
<li><a href="#">Location</a></li>
<li><a href="{{url('/contact-us')}}">Contact</a></li>
<li><a href="{{url('/about-us')}}">About us</a></li>
<li><a href="#">Join us!</a></li>
</ul>
</div>