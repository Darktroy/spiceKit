@extends('companyadminpanel.masterLayout')
@section('content')
   
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>&nbsp;<button><a href="{{url('/menu_items/create')}}">Add New</a></button> </div>
              <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>title</th>
                      <th>Description </th>
                      <th>price</th>
                      <th>Menu type</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($menuItemsObjects as $menuItem)
                    

                        <tr>
                            <td>{{$menuItem['title']}}</a></td>
                            <td>{{$menuItem['itemDescription']}}</td>
                            <td>{{$menuItem['price']}}</td>
                            <td>{{$menuItem['type']->name}}</td>
                            
                            <td><a href="{{url('/menu_items/'.$menuItem['menuItemsId'].'/edit')}}">Edit</a>&nbsp;,&nbsp;
                                <a href="{{url('/menu_items/remove/'.$menuItem['menuItemsId'])}}">Remove</a></td>
                        </tr>
                    @endforeach

                    
                  </tbody>
                </table>
                  <hr />
              </div>
            </div>
            <div class="card-footer small text-muted">Updated </div>
          </div>

@endsection

