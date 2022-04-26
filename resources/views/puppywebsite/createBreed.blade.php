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
            <h1>Add New Breed</h1>
            <form action="{{Route('puppy.storeBreed')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="simpleinput">Breed</label>
                    <input type="text" class="form-control" name="breed" id="simpleinput"
                           value="{{$Breed->breed }}">
                    @error('breed')
                    <div class="alert alert-warning" role="alert">
                        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                    </div>
                    @enderror
                    <button type="submit" class="btn btn-primary" style="border-radius: 15px; margin-top: 10px ">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
