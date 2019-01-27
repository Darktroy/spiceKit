
<div class="form-group {{ $errors->has('bgImages_id') ? 'has-error' : '' }}">
    <label for="bgImages_id" class="col-md-2 control-label">Bg Images</label>
    <div class="col-md-10">
        <select class="form-control" id="bgImages_id" name="bgImages_id" required="true">
        	    <option value="" style="display: none;" {{ old('bgImages_id', optional($bgImages)->bgImages_id ?: '') == '' ? 'selected' : '' }} disabled selected>Enter bg images here...</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('bgImages_id', optional($bgImages)->bgImages_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('bgImages_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('bgImages') ? 'has-error' : '' }}">
    <label for="bgImages" class="col-md-2 control-label">Bg Images</label>
    <div class="col-md-10">
        <input class="form-control" name="bgImages" type="number" id="bgImages" value="{{ old('bgImages', optional($bgImages)->bgImages) }}" placeholder="Enter bg images here...">
        {!! $errors->first('bgImages', '<p class="help-block">:message</p>') !!}
    </div>
</div>

