
<!doctype html>
<html>
    
<head>
<meta charset="utf-8">
<title>Breakfast Menu | GOODSALTZ</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimal-ui">
<meta name="description" content="Assemble Your Own Platter - Choose one from A, B, &amp; C to construct your own personal breakfast fare">
<link rel="shortcut icon" href="{{ asset('divira/clients/goodsaltz/favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('divira/clients/goodsaltz/menu.css') }}">
<link rel="stylesheet" href="{{ asset('divira/clients/goodsaltz/nav.css') }}">
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
    <div class="container">
<section class="main"> 
  <div id="rm-container" class="rm-container"> 
    <div class="rm-wrapper"> 
      <div class="rm-cover"> 
        <div class="rm-front"> 
          <div class="rm-content">
            <a href="#" class="rm-button-open"><img src="{{ asset('divira/clients/goodsaltz/i/logo.png') }}" alt="logo"></a>
        </div>
      </div>
      <div class="rm-back"> 
        <div class="rm-content"> 
          <h4>Assemble Your Own Platter (RM20*)</h4>
          <h5>Choose one from A, B, & C to construct your own personal breakfast fare: </h5>
          <br>
          <dl>
              @foreach ($menuItemsObjects as $menuItem)
              @if($menuItem['menutypeId'] == 1)
              <dt>{{$menuItem['title']}}</dt>
              <dt >Regular {{$menuItem['price']}}RG / Member  {{$menuItem['memberprice']}}RG</dt>
                            <dd>
                                {{$menuItem['itemDescription']}}
                            </dd>
                @endif
            @endforeach
            
          </dl>
          <div class="rm-order"> 
            <h6>*All prices are in Ringgit Malaysia & subject to: 6% Govt. Tax & 10% Service Fees</h6>
            <p class="chef"><img src="{{ asset('divira/clients/goodsaltz/i/ico.png') }}" style="width:20px; vertical-align: bottom" alt=""> 
                Chef's Recommendation</p>
          </div>
        </div>
        <div class="rm-overlay"></div>
      </div>
    </div>
    <div class="rm-middle"> 
      <div class="rm-inner"> 
       <div class="rm-content"> 
          <h4>All Day Sunnies Breakfast</h4>
          
          <dl>
              @foreach ($menuItemsObjects as $menuItem)
              @if($menuItem['menutypeId'] == 2)
              <dt>{{$menuItem['title']}}&nbsp; Regular {{$menuItem['price']}}RG / Member  {{$menuItem['memberprice']}}RG</dt>
                            <dd>
                                {{$menuItem['itemDescription']}}
                            </dd>
                @endif
            @endforeach
          </dl>
          
        </div>
        <div class="rm-overlay"></div>
      </div>
    </div>
    <div class="rm-right"> 
      <div class="rm-front"> </div>
      <div class="rm-back"> 
        <div class="rm-content"> 
          <h4>TOASTIES & PANCAKES</h4>

          <dl>
              @foreach ($menuItemsObjects as $menuItem)
              @if($menuItem['menutypeId'] == 3)
              <dt>{{$menuItem['title']}}&nbsp; Regular {{$menuItem['price']}}RG / Member  {{$menuItem['memberprice']}}RG</dt>
                            <dd>
                                {{$menuItem['itemDescription']}}
                            </dd>
                @endif
            @endforeach
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>
</section> </div>
<script src="{{ asset('divira/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}"></script>
<script>window.jQuery || document.write('<script src="jq.j"><\/script>')</script>
<script src="{{ asset('divira/clients/goodsaltz/menu.js') }}"></script>
<script src="{{ asset('divira/clients/goodsaltz/plugins.js') }}"></script>
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