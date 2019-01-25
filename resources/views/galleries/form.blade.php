
<div class="form-group {{ $errors->has('galleryId') ? 'has-error' : '' }}">
    <label for="galleryId" class="col-md-2 control-label">Gallery Id</label>
    <div class="col-md-10">
        <input class="form-control" name="galleryId" type="text" id="galleryId" value="{{ old('galleryId', optional($gallery)->galleryId) }}" minlength="1" required="true" placeholder="Enter gallery id here...">
        {!! $errors->first('galleryId', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Image</label>
    <div class="col-md-10">
        <input class="form-control" name="image" type="number" id="image" value="{{ old('image', optional($gallery)->image) }}" placeholder="Enter image here...">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

