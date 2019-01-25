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
      
            <form method="POST" enctype="multipart/form-data" action="{{ url('/menu_items/add') }}" accept-charset="UTF-8" 
                  id="addMenu" name="addMenu" class="contact100-form validate-form">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="form-label-group">
                  <!--<input type="text" id="gender" name="gender" class="form-control" placeholder="Gender ..." required="required">-->
                  <select name="menutypeId" class="form-control">
                    @foreach ($menuTypes as $menuType)
                            <option value="{{$menuType['menuTypeId']}}">{{$menuType['name']}}</option>
                    @endforeach
                        
                  </select> 
                <!--<label for="gender">Gender</label>-->
              </div>
            </div>
                
            <div class="form-group">
              <div class="form-label-group">
                  <input type="text" id="title" name="title" class="form-control" value="title ..." required="required">
                <label for="title">Title</label>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-label-group">
                  <input type="text" id="itemDescription" name="itemDescription" class="form-control" value="Description ..." required="required">
                <label for="itemDescription">Description</label>
              </div>
            </div>
            
            
            <div class="form-group">
              <div class="form-label-group">
                  <input type="number" id="price" name="price" class="form-control" value="Price " required="required">
                <label for="price">price RG</label>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-label-group">
                  <input type="file" id="image" name="image" class="form-control" value="" required="required">
                <label for="image">Image</label>
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

