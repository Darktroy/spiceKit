@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($homepage->title) ? $homepage->title : 'Homepage' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('homepages.homepage.destroy', $homepage->homepageid) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('homepages.homepage.index') }}" class="btn btn-primary" title="Show All Homepage">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('homepages.homepage.create') }}" class="btn btn-success" title="Create New Homepage">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('homepages.homepage.edit', $homepage->homepageid ) }}" class="btn btn-primary" title="Edit Homepage">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Homepage" onclick="return confirm(&quot;Delete Homepage??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Homepageid</dt>
            <dd>{{ $homepage->homepageid }}</dd>
            <dt>P1</dt>
            <dd>{{ $homepage->p1 }}</dd>
            <dt>P2</dt>
            <dd>{{ $homepage->p2 }}</dd>
            <dt>Title</dt>
            <dd>{{ $homepage->title }}</dd>

        </dl>

    </div>
</div>

@endsection