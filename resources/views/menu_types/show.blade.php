@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($menuType->name) ? $menuType->name : 'Menu Type' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('menu_types.menu_type.destroy', $menuType->menuTypeId) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('menu_types.menu_type.index') }}" class="btn btn-primary" title="Show All Menu Type">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('menu_types.menu_type.create') }}" class="btn btn-success" title="Create New Menu Type">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('menu_types.menu_type.edit', $menuType->menuTypeId ) }}" class="btn btn-primary" title="Edit Menu Type">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Menu Type" onclick="return confirm(&quot;Delete Menu Type??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>menuTypeId</dt>
            <dd>{{ $menuType->menuTypeId }}</dd>
            <dt>name</dt>
            <dd>{{ $menuType->name }}</dd>

        </dl>

    </div>
</div>

@endsection