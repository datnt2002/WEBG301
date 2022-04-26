@extends('PuppyWebsiteMaster.PuppyMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection

@section('main')
    @include('partials.adminNav')
    @include('partials.LeftNav');
    <div class="container-fluid">
        <div class="content-page" style="padding: 0 0px 100px 0px">
            <div class="content">
                <div class="container-fluid">
                    <h1>Edit Puppy</h1>
                    <form action="{{route('puppy.update',['id'=> $pets[0]->Pid])}}" method="post">
                        @csrf
                        @foreach($pets as $pet)
                            <div class="form-group">
                                <label for="simpleinput">Name</label>
                                <input type="text" id="simpleinput" class="form-control" name="name"
                                       value="{{$pet->name}}">
                                @error('name')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">Area</label>
                                <input type="text" id="simpleinput" class="form-control" name="area"
                                       value="{{$pet->area}}">
                                @error('area')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="example-select">Breed</label>
                                <select class="form-control" id="example-select" name="Breed">
                                    @foreach($breed as $each)
                                        <option value=" {{ $each->id}}">{{$each->bread}}</option>
                                    @endforeach
                                </select>
                                @error('Breed')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="example-select">Gender</label>
                                <select name="gender" id="example-select" class="form-control" name="gender">
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">image</label>
                                <input type="file" id="simpleinput" class="form-control" name="image"
                                       value="{{$pet->image}}">
                                @error('image')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">Color</label>
                                <input type="text" id="simpleinput" class="form-control" name="color"
                                       value="{{$pet->color}}">
                                @error('color')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">Detail</label>
                                <input type="text" id="simpleinput" class="form-control" name="detail"
                                       value="{{$pet->Detail}}">
                                @error('detail')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary" style="border-radius: 15px">Update</button>
                    </form>
@endsection
