<div class="form-group">
    <input type="hidden" id="simpleinput" class="form-control" name="Pid">
</div>
<div class="form-group">
    <label for="simpleinput">Name</label>
    <input type="text" id="simpleinput" class="form-control" name="name"
           value="{{old('name') ?? $pet->name }}">
    @error('name')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="simpleinput">Area</label>
    <input type="text" id="simpleinput" class="form-control" name="area"
           value="{{old('area') ?? $pet->area }}">
    @error('area')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="example-select">Breed</label>
    <select class="form-control" id="example-select" name="Breed" >
        <option value="">Choose breed</option>
        @foreach($breed as $each)
            <option value=" {{ $each->id}}"
{{--                    {{($BId != null && $breed[0]->id == $BId) ? 'selected' : '' }}--}}
                    {{old('Breed')!=null && old('Breed')==$each->id? 'selected':''}}
            >{{$each->bread}}</option>
        @endforeach
    </select>
{{--  --}}
    @error('Breed')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="example-select">Gender</label>
    <select name="gender" id="example-select" class="form-control" name="gender">
        <option value="">Choose</option>
        <option value="1"{{old('gender')!=null && old('gender')=='1'? 'selected':''}}>Male</option>
        <option value="0"{{old('gender')!=null && old('gender')=='0'? 'selected':''}}>Female</option>
    </select>
    @error('gender')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="simpleinput">Image</label>
    <input type="file" id="simpleinput" class="form-control" name="image"
           value="{{$pet->image }}">
    @error('image')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="simpleinput">Color</label>
    <input type="text" id="simpleinput" class="form-control" name="color"
           value="{{old('color') ?? $pet->color }}">
    @error('color')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="simpleinput">Detail</label>
    <input type="text" id="simpleinput" class="form-control" name="detail"
           value="{{old('detail') ?? $pet->detail }}">
    @error('detail')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
