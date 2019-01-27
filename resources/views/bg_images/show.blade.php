@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Bg Images' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('bg_images.bg_images.destroy', $bgImages->bgImages_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('bg_images.bg_images.index') }}" class="btn btn-primary" title="Show All Bg Images">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('bg_images.bg_images.create') }}" class="btn btn-success" title="Create New Bg Images">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('bg_images.bg_images.edit', $bgImages->bgImages_id ) }}" class="btn btn-primary" title="Edit Bg Images">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Bg Images" onclick="return confirm(&quot;Delete Bg Images??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Bg Images</dt>
            <dd>{{ $bgImages->bgImages_id }}</dd>
            <dt>Bg Images</dt>
            <dd>{{ $bgImages->bgImages }}</dd>

        </dl>

    </div>
</div>

@endsection