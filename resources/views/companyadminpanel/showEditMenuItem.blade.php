@extends('companyadminpanel.masterLayout')
@section('content')
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Edit {{$menuItemsObject['title']}} </div>
        <div class="card-body">
            
      
            <form method="POST" action="{{ url('/menu_items/menu_items_edit/'.$menuItemsObject['menuItemsId']) }}" accept-charset="UTF-8" id="editMenu" name="editMenu" class="contact100-form validate-form">
            
            {{ csrf_field() }}
            <div class="form-group">
              <div class="form-label-group">
                  <!--<input type="text" id="gender" name="gender" class="form-control" placeholder="Gender ..." required="required">-->
                  <select name="menutypeId" class="form-control">
                    @foreach ($menuTypes as $menuType)
                            @if($menuItemsObject['type']['menuTypeId'] == $menuType['menuTypeId'])
                            <option value="{{$menuType['menuTypeId']}}" selected>{{$menuType['name']}}</option>
                        @else
                            <option value="{{$menuType['menuTypeId']}}" >{{$menuType['name']}}</option>
                        @endif
                    @endforeach
                        
                  </select> 
                <!--<label for="gender">Gender</label>-->
              </div>
            </div>
                
            <div class="form-group">
              <div class="form-label-group">
                  <input type="text" id="title" name="title" class="form-control" value="{{$menuItemsObject['title']}}" required="required">
                <label for="title">Title</label>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-label-group">
                  <input type="text" id="itemDescription" name="itemDescription" class="form-control" value="{{$menuItemsObject['itemDescription']}}" required="required">
                <label for="itemDescription">Description</label>
              </div>
            </div>
            
            
            <div class="form-group">
              <div class="form-label-group">
                  <input type="int" id="price" name="price" class="form-control" value="{{$menuItemsObject['price']}}" required="required">
                <label for="price">price RG</label>
              </div>
            </div>
            
            <!--alias-->
                <button class="btn btn-primary btn-block">
                                Update
                        </button>
          </form>
          <div class="text-center">
          </div>
        </div>
      </div>
    </div>
@endsection

