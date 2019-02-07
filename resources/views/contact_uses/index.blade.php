@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Contact Uses</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('contact_uses.contact_us.create') }}" class="btn btn-success" title="Create New Contact Us">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($contactUses) == 0)
            <div class="panel-body text-center">
                <h4>No Contact Uses Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Contact Usid</th>
                            <th>Phone</th>
                            <th>Name</th>
                            <th>Email</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contactUses as $contactUs)
                        <tr>
                            <td>{{ $contactUs->contactUsid }}</td>
                            <td>{{ $contactUs->phone }}</td>
                            <td>{{ $contactUs->name }}</td>
                            <td>{{ $contactUs->email }}</td>

                            <td>

                                <form method="POST" action="{!! route('contact_uses.contact_us.destroy', $contactUs->contactUsid) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('contact_uses.contact_us.show', $contactUs->contactUsid ) }}" class="btn btn-info" title="Show Contact Us">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('contact_uses.contact_us.edit', $contactUs->contactUsid ) }}" class="btn btn-primary" title="Edit Contact Us">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Contact Us" onclick="return confirm(&quot;Delete Contact Us?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $contactUses->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection