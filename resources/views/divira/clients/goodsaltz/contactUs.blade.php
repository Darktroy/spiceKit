@extends('divira.clients.goodsaltz.masterLayout')

@section('sidemenu')
  <p class="lbox">
 
  <h1>Contact Us</h1>
  <form method="POST" action="{{ url('contactus/')}}" 
                  accept-charset="UTF-8" id="contactUs" name="contactUs"
                  class="contact100-form validate-form">
            {{ csrf_field() }}
              <div class="form-label-group">
                  <label >Name</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="name" required="required">
              </div>
              <div class="form-label-group">
                  <label >E-mail</label>
                  <input type="text" id="email" name="email" 
                         class="form-control" placeholder="email" required="required">
              </div>
              <div class="form-label-group">
                  <label >Phone</label>
                  <input type="integer" id="phone" 
                         name="phone" class="form-control" placeholder="phone" required="required">
              </div>
              <div class="form-label-group">
                  <label >Message</label>
                  <textarea class="form-control" name="message" style="resize:none;"
                            rows="6" cols="30" required="required"> </textarea>
              </div>
                <button class="btn btn-primary btn-block">
                                Send
                        </button>
          </form>
    
 </p>
 @endsection