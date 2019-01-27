@extends('companyadminpanel.masterLayout')
@section('content')
   
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>&nbsp;<button><a href="{{url('/bg_images/create')}}">Add New</a></button> </div>
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

                    @foreach($bgImagesObjects as $bgImagesItem)
                    

                        <tr>
                            <td><img src="{{url('bgImages/'.$bgImagesItem['bgImages'])}}" height="250" width="250"></td>
                            
                            <td><a href="{{url('bg_images/del-bg_images/'.$bgImagesItem['bgImages_id'])}}">Remove</a></td>
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

