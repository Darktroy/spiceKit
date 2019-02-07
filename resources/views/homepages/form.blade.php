
<div class="form-group {{ $errors->has('homepageid') ? 'has-error' : '' }}">
    <label for="homepageid" class="col-md-2 control-label">Homepageid</label>
    <div class="col-md-10">
        <input class="form-control" name="homepageid" type="number" id="homepageid" value="{{ old('homepageid', optional($homepage)->homepageid) }}" required="true" placeholder="Enter homepageid here...">
        {!! $errors->first('homepageid', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('p1') ? 'has-error' : '' }}">
    <label for="p1" class="col-md-2 control-label">P1</label>
    <div class="col-md-10">
        <input class="form-control" name="p1" type="text" id="p1" value="{{ old('p1', optional($homepage)->p1) }}" minlength="1" placeholder="Enter p1 here...">
        {!! $errors->first('p1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('p2') ? 'has-error' : '' }}">
    <label for="p2" class="col-md-2 control-label">P2</label>
    <div class="col-md-10">
        <input class="form-control" name="p2" type="text" id="p2" value="{{ old('p2', optional($homepage)->p2) }}" minlength="1" placeholder="Enter p2 here...">
        {!! $errors->first('p2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($homepage)->title) }}" minlength="1" maxlength="255" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

