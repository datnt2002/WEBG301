@extends('PuppyWebsiteMaster.PuppyMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection


@section('main')
    @include('partials.adminNav')
    @include('partials.LeftNav');
    <div class="container-fluid">
        <div class="content-page" style="padding: 0 20px 100px 20px">
            <h1>Admin Account</h1>
            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{$admin->Aid}}</dd>

                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{$admin->name}}</dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{$admin->email}}</dd>

                <dt class="col-sm-3">Phone</dt>
                <dd class="col-sm-9">{{$admin->phone}}</dd>

                <dt class="col-sm-3">Gender</dt>
                <dd class="col-sm-9">{{$admin->gender}}</dd>

                <dt class="col-sm-3">Username</dt>
                <dd class="col-sm-9">{{$admin->username}}</dd>

            </dl>
            <a href="{{route('admin.edit', Session::get('username') )}}" class="btn btn-danger mb-2"
               style="border-radius: 15px; background-color: #0eac5c; border-color: #0eac5c">Edit <i class="mdi mdi-pencil"></i> </a>



    {{--            <form action="{{route('puppy.update',['id'=> $pets[0]->Pid])}}" method="post">--}}
    {{--                @csrf--}}
    {{--                @foreach($pets as $pet)--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="simpleinput">Name</label>--}}
    {{--                        <input type="text" id="simpleinput" class="form-control" name="name" value="{{$pet->name}}">--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="simpleinput">Area</label>--}}
    {{--                        <input type="text" id="simpleinput" class="form-control" name="area" value="{{$pet->area}}">--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="example-select">Breed</label>--}}
    {{--                        <select class="form-control" id="example-select" name="Breed">--}}
    {{--                            @foreach($breed as $each)--}}
    {{--                                <option value=" {{ $each->id}}">{{$each->bread}}</option>--}}
    {{--                            @endforeach--}}
    {{--                        </select>--}}
    {{--                        <div>--}}
    {{--                            --}}{{--                {{dd($breed)}}--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="example-select">Gender</label>--}}
    {{--                        <select name="gender" id="example-select" class="form-control" name="gender">--}}
    {{--                            <option value="1">Male</option>--}}
    {{--                            <option value="0">Female</option>--}}
    {{--                        </select>--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="simpleinput">image</label>--}}
    {{--                        <input type="file" id="simpleinput" class="form-control" name="image" value="{{$pet->image}}">--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="simpleinput">Color</label>--}}
    {{--                        <input type="text" id="simpleinput" class="form-control" name="color" value="{{$pet->color}}">--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="simpleinput">Detail</label>--}}
    {{--                        <input type="text" id="simpleinput" class="form-control" name="detail" value="{{$pet->Detail}}">--}}
    {{--                    </div>--}}
    {{--                @endforeach--}}

    {{--                <button type="submit" class="btn btn-primary" style="border-radius: 15px">Update</button>--}}
    {{--            </form>--}}
@endsection
