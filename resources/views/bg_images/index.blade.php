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
                <h4 class="mt-5 mb-5">Bg Images</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('bg_images.bg_images.create') }}" class="btn btn-success" title="Create New Bg Images">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($bgImagesObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Bg Images Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Bg Images</th>
                            <th>Bg Images</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($bgImagesObjects as $bgImages)
                        <tr>
                            <td>{{ $bgImages->bgImages_id }}</td>
                            <td>{{ $bgImages->bgImages }}</td>

                            <td>

                                <form method="POST" action="{!! route('bg_images.bg_images.destroy', $bgImages->bgImages_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('bg_images.bg_images.show', $bgImages->bgImages_id ) }}" class="btn btn-info" title="Show Bg Images">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('bg_images.bg_images.edit', $bgImages->bgImages_id ) }}" class="btn btn-primary" title="Edit Bg Images">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Bg Images" onclick="return confirm(&quot;Delete Bg Images?&quot;)">
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
            {!! $bgImagesObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection