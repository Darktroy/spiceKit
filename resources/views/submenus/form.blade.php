
<div class="form-group {{ $errors->has('submenuid') ? 'has-error' : '' }}">
    <label for="submenuid" class="col-md-2 control-label">Submenuid</label>
    <div class="col-md-10">
        <input class="form-control" name="submenuid" type="text" id="submenuid" value="{{ old('submenuid', optional($submenu)->submenuid) }}" minlength="1" placeholder="Enter submenuid here...">
        {!! $errors->first('submenuid', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('menu_id') ? 'has-error' : '' }}">
    <label for="menu_id" class="col-md-2 control-label">Menu</label>
    <div class="col-md-10">
        <select class="form-control" id="menu_id" name="menu_id">
        	    <option value="" style="display: none;" {{ old('menu_id', optional($submenu)->menu_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select menu</option>
        	@foreach ($menus as $key => $menu)
			    <option value="{{ $key }}" {{ old('menu_id', optional($submenu)->menu_id) == $key ? 'selected' : '' }}>
			    	{{ $menu }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('menu_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('submenu_name') ? 'has-error' : '' }}">
    <label for="submenu_name" class="col-md-2 control-label">Submenu Name</label>
    <div class="col-md-10">
        <input class="form-control" name="submenu_name" type="text" id="submenu_name" value="{{ old('submenu_name', optional($submenu)->submenu_name) }}" minlength="1" placeholder="Enter submenu name here...">
        {!! $errors->first('submenu_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

