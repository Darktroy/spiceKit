@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($menuItems->title) ? $menuItems->title : 'Menu Items' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('menu_items.menu_items.destroy', $menuItems->menuItemsId) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('menu_items.menu_items.index') }}" class="btn btn-primary" title="Show All Menu Items">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('menu_items.menu_items.create') }}" class="btn btn-success" title="Create New Menu Items">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('menu_items.menu_items.edit', $menuItems->menuItemsId ) }}" class="btn btn-primary" title="Edit Menu Items">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Menu Items" onclick="return confirm(&quot;Delete Menu Items??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Menu Items Id</dt>
            <dd>{{ $menuItems->menuItemsId }}</dd>
            <dt>Image</dt>
            <dd>{{ $menuItems->image }}</dd>
            <dt>Title</dt>
            <dd>{{ $menuItems->title }}</dd>
            <dt>Menutype Id</dt>
            <dd>{{ $menuItems->menutypeId }}</dd>
            <dt>Item Description</dt>
            <dd>{{ $menuItems->itemDescription }}</dd>

        </dl>

    </div>
</div>

@endsection