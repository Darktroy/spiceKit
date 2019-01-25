@extends('companyadminpanel.masterLayout')
@section('content')
   
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>&nbsp;<button><a href="{{url('/galleries/create')}}">Add New</a></button> </div>
              <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>image</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($galleries as $galItem)
                    

                        <tr>
                            <td><img src="{{url('gallery/'.$galItem['image'])}}" height="250" width="250"></td>
                            
                            <td><a href="{{url('galleries/del-gallery/'.$galItem['galleryId'])}}">Remove</a></td>
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

