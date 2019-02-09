@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Submenu' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('submenus.submenu.destroy', $submenu->submenuid) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('submenus.submenu.index') }}" class="btn btn-primary" title="Show All Submenu">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('submenus.submenu.create') }}" class="btn btn-success" title="Create New Submenu">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('submenus.submenu.edit', $submenu->submenuid ) }}" class="btn btn-primary" title="Edit Submenu">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Submenu" onclick="return confirm(&quot;Delete Submenu??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Submenuid</dt>
            <dd>{{ $submenu->submenuid }}</dd>
            <dt>Menu</dt>
            <dd>{{ optional($submenu->menu)->id }}</dd>
            <dt>Submenu Name</dt>
            <dd>{{ $submenu->submenu_name }}</dd>

        </dl>

    </div>
</div>

@endsection