@extends('companyadminpanel.masterLayout')
@section('content')
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add new to menu</div>
        <div class="card-body">
          
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
      
            <form method="POST" enctype="multipart/form-data" action="{{ url('/bg_images/upload') }}" accept-charset="UTF-8" 
                  id="addImage" name="addImage" class="contact100-form validate-form">
            {{ csrf_field() }}
            
            <div class="form-group">
              <div class="form-label-group">
                  <input type="file" id="bgImages" name="bgImages" class="form-control" value="" required="required">
                <label for="bgImages">Image</label>
              </div>
            </div>
            
            <!--alias-->
                <button class="btn btn-primary btn-block">
                                Add
                        </button>
          </form>
          <div class="text-center">
          </div>
        </div>
      </div>
    </div>
@endsection

