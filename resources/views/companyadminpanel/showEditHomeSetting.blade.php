@extends('companyadminpanel.masterLayout')
@section('content')
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Edit Employee </div>
        <div class="card-body">
            
      
            <form method="POST" action="{{ url('/Home-Side') }}" 
                  accept-charset="UTF-8" id="homeSideSetting" name="homeSideSetting"
                  class="contact100-form validate-form">
                

            {{ csrf_field() }}
                
            <!--//////////////////////////////////?-->
                
            <div class="form-group">
              <div class="form-label-group">
                  <input type="text" id="title" name="title" class="form-control" value="{{$data['title']}}" required="required">
                <label for="title">Title</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                  <h6>First Paragraph</h6>
                  <textarea type="text" id="p1" name="p1" class="form-control" 
                         rows="10" cols="10"
                         required="required">{{$data['p1']}}</textarea>
                <!--<label for="p1">First Paragraph </label>-->
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                  <h6>Second Paragraph</h6>
                  <textarea type="text" id="p2" name="p2" class="form-control" 
                         rows="10" cols="10"
                         required="required">{{$data['p2']}}</textarea>
<!--                  <input type="text" id="p2" name="p2" class="form-control" 
                         rows="4" cols="10"
                         value="{{$data['p2']}}" required="required">
                <label for="p2">Second Paragraph </label>-->
              </div>
            </div>
            
                <button class="btn btn-primary btn-block">
                                Update
                        </button>
          </form>
          <div class="text-center">
<!--            <a class="d-block small mt-3" href="login.html">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
          </div>
        </div>
      </div>
    </div>
@endsection

