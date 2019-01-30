
<div class="form-group {{ $errors->has('menu_id') ? 'has-error' : '' }}">
    <label for="menu_id" class="col-md-2 control-label">Menu</label>
    <div class="col-md-10">
        <select class="form-control" id="menu_id" name="menu_id">
        	    <option value="" style="display: none;" {{ old('menu_id', optional($menu)->menu_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select menu</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('menu_id', optional($menu)->menu_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('menu_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('menu_name') ? 'has-error' : '' }}">
    <label for="menu_name" class="col-md-2 control-label">Menu Name</label>
    <div class="col-md-10">
        <input class="form-control" name="menu_name" type="text" id="menu_name" value="{{ old('menu_name', optional($menu)->menu_name) }}" minlength="1" placeholder="Enter menu name here...">
        {!! $errors->first('menu_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

