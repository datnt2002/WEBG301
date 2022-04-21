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
{{--        @php--}}
{{--            $Bid = old('Breed') ?? $breed[0]->id ?? null;--}}
{{--        @endphp--}}
<div class="form-group">
    <label for="example-select">Breed</label>
    <select class="form-control" id="example-select" name="Breed">
        <option value="">Choose</option>
        @foreach($breed as $each)
            <option value=" {{ $each->id}}"
                {{--                            {{ ($Bid != null && $breed[0]->id == $Bid) ? 'selected' : '' }}--}}
            >{{$each->bread}}</option>
        @endforeach

    </select>
    <div>
        {{--                {{dd($breed)}}--}}
    </div>
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
        <option value="1">Male</option>
        <option value="0">Female</option>
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
           value="{{old('image') ?? $pet->image }}">
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
