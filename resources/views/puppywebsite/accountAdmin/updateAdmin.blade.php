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
            <h1>Edit Admin</h1>
            <form action="{{route('admin.update', Session::get('username'))}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="simpleinput">ID</label>
                    <input type="text" id="simpleinput" class="form-control" name="aid" disabled
                           value="{{$admin->Aid}}">
                </div>
                    <div class="form-group">
                        <label for="simpleinput">Name</label>
                        <input type="text" id="simpleinput" class="form-control" name="name" disabled
                               value="{{Session::get('username')}}">
                    </div>
                    <div class="form-group">
                        <label for="simpleinput">Email</label>
                        <input type="text" id="simpleinput" class="form-control" name="email"
                               value="{{$admin->email}}">
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Phone</label>
                        <input
                            type="text" name="phone"
                            class="form-control"
                            id="address"
                            value="{{$admin->phone}}"
                        />

                        <div class="form-group">
                            <label for="example-select">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="border-radius: 15px">Update</button>

            </form>
@endsection
