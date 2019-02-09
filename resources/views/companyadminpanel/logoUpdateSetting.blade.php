@extends('companyadminpanel.masterLayout')
@section('content')
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Edit Employee </div>
        <div class="card-body">
            
      
            <form method="POST" action="{{ url('/Home-Side') }}" enctype="multipart/form-data"
                  accept-charset="UTF-8" id="homeSideSetting" name="homeSideSetting"
                  class="contact100-form validate-form">
                

            {{ csrf_field() }}
                
            <!--//////////////////////////////////?-->
                
            <div class="form-group">
              <div class="form-label-group">
                  <h6>New logo</h6>
                  <input type="file" id="logo" name="logo" class="form-control"
                         required="required">
                
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

