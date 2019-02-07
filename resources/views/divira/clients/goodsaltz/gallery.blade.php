@extends('divira.clients.goodsaltz.masterLayout')

@section('sidemenu')
 
  <h1>Photo Gallery</h1>
  <p class="lbox">
      @foreach( $galleries as $image) 
      <a href="{{url('/gallery/'.$image['image'])}}">
          <img src="{{url('/gallery/'.$image['image'])}}" alt="restaurant photo"></a>
      @endforeach
 </p>
 @endsection