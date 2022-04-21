@extends('PuppyWebsiteMaster.PuppyMaster');
@section('main')
    <div class="form-group">
        <label>Breed</label>
        <form action="{{Route('puppy.storeBreed')}}" method="POST">
            @csrf
            <input type="text" class="form-control" maxlength="25" data-toggle="maxlength" name="breed"
                   value="{{$Breed->breed }}">
            <button type="submit" class="btn btn-outline-primary">Save</button>
        </form>
    </div>
@endsection