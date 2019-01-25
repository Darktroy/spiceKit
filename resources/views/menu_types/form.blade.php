
<div class="form-group {{ $errors->has('menuTypeId') ? 'has-error' : '' }}">
    <label for="menuTypeId" class="col-md-2 control-label">menuTypeId</label>
    <div class="col-md-10">
        <input class="form-control" name="menuTypeId" type="text" id="menuTypeId" value="{{ old('menuTypeId', optional($menuType)->menuTypeId) }}" minlength="1" required="true" placeholder="Enter menu type id here...">
        {!! $errors->first('menuTypeId', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($menuType)->name) }}" minlength="1" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

