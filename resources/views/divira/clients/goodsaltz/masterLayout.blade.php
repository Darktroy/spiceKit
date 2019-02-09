
@include('divira.clients.goodsaltz.masterLayoutHeader')
    <div class="bg">
<div class="slides">
    <div class="slides-container">
            @foreach($bkimages as $bkimage)
                <img src="{{ url('bgImages/'.$bkimage['bgImages']) }}" alt="restaurant photo">
            @endforeach
	</div>
</div>
  </div>
<div class="sidebar" > 
  <p><a href="../../clients/goodsaltz/index.html"><img src="{{ asset('divira/clients/goodsaltz/i/logo.png')}}" class="logo" alt="Goodsaltz"></a></p>
   @yield('sidemenu')
<div class="social">Find us on these networks<br>
<a href="http://www.facebook.com/goodsaltz" target="_blank">
    <img src="{{ asset('divira/clients/goodsaltz/i/fb.png')}}" alt="Goodsaltz"></a> 
    <a href="http://www.twitter.com/goodsaltz" target="_blank"><img src="{{ asset('divira/clients/goodsaltz/i/twit.png')}}" alt="Goodsaltz"></a> 
    <a href="http://www.instagram.com/goodsaltz" target="_blank"><img src="{{ asset('divira/clients/goodsaltz/i/insta.jpeg')}}" alt="Goodsaltz"></a>
    <p class="credit">&copy; Avanti Sette Sdn Bhd. Site designed by <a href="http://www.tommyng.com" title="freelance web designer malaysia" 
                                                                       target="_blank">Tommy Ng</a></p></div>
</div> 
    
    
    <!-- end sidebar --!>  
<div class="minmax"><a href="#" class="min"><img src="{{ asset('divira/clients/goodsaltz/i/min.png')}}" alt="">
       </a> <a href="#" class="max"><img src="{{ asset('divira/clients/goodsaltz/i/max.png')}}" alt=""></a></div>
<script src="{{ asset('divira/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="jq.js"><\/script>')</script>
<script src="{{ asset('divira/clients/goodsaltz/plugins.js')}}"></script>
       <script src="{{ asset('divira/clients/goodsaltz/lbox.js')}}">
       </script>
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