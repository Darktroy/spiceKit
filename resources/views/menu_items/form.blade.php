
<div class="form-group {{ $errors->has('menuItemsId') ? 'has-error' : '' }}">
    <label for="menuItemsId" class="col-md-2 control-label">Menu Items Id</label>
    <div class="col-md-10">
        <input class="form-control" name="menuItemsId" type="text" id="menuItemsId" value="{{ old('menuItemsId', optional($menuItems)->menuItemsId) }}" minlength="1" required="true" placeholder="Enter menu items id here...">
        {!! $errors->first('menuItemsId', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Image</label>
    <div class="col-md-10">
        <input class="form-control" name="image" type="number" id="image" value="{{ old('image', optional($menuItems)->image) }}" placeholder="Enter image here...">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($menuItems)->title) }}" minlength="1" maxlength="255" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('menutypeId') ? 'has-error' : '' }}">
    <label for="menutypeId" class="col-md-2 control-label">Menutype Id</label>
    <div class="col-md-10">
        <input class="form-control" name="menutypeId" type="text" id="menutypeId" value="{{ old('menutypeId', optional($menuItems)->menutypeId) }}" minlength="1" placeholder="Enter menutype id here...">
        {!! $errors->first('menutypeId', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('itemDescription') ? 'has-error' : '' }}">
    <label for="itemDescription" class="col-md-2 control-label">Item Description</label>
    <div class="col-md-10">
        <input class="form-control" name="itemDescription" type="text" id="itemDescription" value="{{ old('itemDescription', optional($menuItems)->itemDescription) }}" minlength="1" placeholder="Enter item description here...">
        {!! $errors->first('itemDescription', '<p class="help-block">:message</p>') !!}
    </div>
</div>

