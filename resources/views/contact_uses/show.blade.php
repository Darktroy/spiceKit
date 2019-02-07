@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($contactUs->name) ? $contactUs->name : 'Contact Us' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('contact_uses.contact_us.destroy', $contactUs->contactUsid) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('contact_uses.contact_us.index') }}" class="btn btn-primary" title="Show All Contact Us">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('contact_uses.contact_us.create') }}" class="btn btn-success" title="Create New Contact Us">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('contact_uses.contact_us.edit', $contactUs->contactUsid ) }}" class="btn btn-primary" title="Edit Contact Us">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Contact Us" onclick="return confirm(&quot;Delete Contact Us??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Contact Usid</dt>
            <dd>{{ $contactUs->contactUsid }}</dd>
            <dt>Message</dt>
            <dd>{{ $contactUs->message }}</dd>
            <dt>Phone</dt>
            <dd>{{ $contactUs->phone }}</dd>
            <dt>Name</dt>
            <dd>{{ $contactUs->name }}</dd>
            <dt>Email</dt>
            <dd>{{ $contactUs->email }}</dd>

        </dl>

    </div>
</div>

@endsection