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
                <h4 class="mt-5 mb-5">Menu Items</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('menu_items.menu_items.create') }}" class="btn btn-success" title="Create New Menu Items">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($menuItemsObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Menu Items Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Menu Items Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Menutype Id</th>
                            <th>Item Description</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($menuItemsObjects as $menuItems)
                        <tr>
                            <td>{{ $menuItems->menuItemsId }}</td>
                            <td>{{ $menuItems->image }}</td>
                            <td>{{ $menuItems->title }}</td>
                            <td>{{ $menuItems->menutypeId }}</td>
                            <td>{{ $menuItems->itemDescription }}</td>

                            <td>

                                <form method="POST" action="{!! route('menu_items.menu_items.destroy', $menuItems->menuItemsId) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('menu_items.menu_items.show', $menuItems->menuItemsId ) }}" class="btn btn-info" title="Show Menu Items">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('menu_items.menu_items.edit', $menuItems->menuItemsId ) }}" class="btn btn-primary" title="Edit Menu Items">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Menu Items" onclick="return confirm(&quot;Delete Menu Items?&quot;)">
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
            {!! $menuItemsObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection