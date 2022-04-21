@extends('PuppyWebsiteMaster.PuppyMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection
@include('partials.adminNav');
@include('partials.LeftNav');
@section('main')
    <div class="container-fluid">
        <div class="content-page" style="padding: 0 20px 100px 20px">
            <h1>Add New Puppy</h1>
            <form action="{{route('puppy.store')}}" method="post">
                @csrf
                @include('puppywebsite.InputField')
                <button type="submit" class="btn btn-primary" style="border-radius: 15px">Submit</button>
            </form>
        </div>
    </div>
@endsection
