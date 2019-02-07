@extends('companyadminpanel.masterLayout')
@section('content')
   
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>&nbsp;Contact Us</div>
              <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email </th>
                      <th>Phone</th>
                      <th>Message</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($contactUses as $contactUsesItem)
                    

                        <tr>
                            <td>{{$contactUsesItem['name']}}</td>
                            <td>{{$contactUsesItem['email']}}</td>
                            <td>{{$contactUsesItem['phone']}}</td>
                            <td>{{$contactUsesItem['message']}}</td>
                            
                            <td><a href="{{url('/destroy-contact-us/'.$contactUsesItem['contactUsid'])}}">Remove</a></td>
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

