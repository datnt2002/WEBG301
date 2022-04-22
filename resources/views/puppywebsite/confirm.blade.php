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
            <h1>Delete Puppy</h1>

            <form action="{{route('puppy.delete', ['id' =>$pet[0]->Pid])}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger"  style="border-radius: 15px">Delete</button>
                <a href="{{route('puppy.index')}}" class="btn btn-info" style="border-radius: 15px">Cancel</a>
            </form>

        </div>
@endsection
