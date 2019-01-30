@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Menu' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('menus.menu.destroy', $menu->menu_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('menus.menu.index') }}" class="btn btn-primary" title="Show All Menu">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('menus.menu.create') }}" class="btn btn-success" title="Create New Menu">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('menus.menu.edit', $menu->menu_id ) }}" class="btn btn-primary" title="Edit Menu">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Menu" onclick="return confirm(&quot;Delete Menu??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Menu</dt>
            <dd>{{ $menu->menu_id }}</dd>
            <dt>Menu Name</dt>
            <dd>{{ $menu->menu_name }}</dd>

        </dl>

    </div>
</div>

@endsection