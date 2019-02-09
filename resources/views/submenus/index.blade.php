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
                <h4 class="mt-5 mb-5">Submenus</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('submenus.submenu.create') }}" class="btn btn-success" title="Create New Submenu">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($submenus) == 0)
            <div class="panel-body text-center">
                <h4>No Submenus Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Submenuid</th>
                            <th>Menu</th>
                            <th>Submenu Name</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($submenus as $submenu)
                        <tr>
                            <td>{{ $submenu->submenuid }}</td>
                            <td>{{ optional($submenu->menu)->id }}</td>
                            <td>{{ $submenu->submenu_name }}</td>

                            <td>

                                <form method="POST" action="{!! route('submenus.submenu.destroy', $submenu->submenuid) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('submenus.submenu.show', $submenu->submenuid ) }}" class="btn btn-info" title="Show Submenu">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('submenus.submenu.edit', $submenu->submenuid ) }}" class="btn btn-primary" title="Edit Submenu">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Submenu" onclick="return confirm(&quot;Delete Submenu?&quot;)">
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
            {!! $submenus->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection