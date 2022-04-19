@extends('PuppyWebsiteMaster.PuppyMaster')
@include('partials.LeftNav');
@section('main')
    <div class="container-fluid">
        <div class="content-page">
            <form action="{{route('puppy.store')}}" method="post">
                @csrf
@include('puppywebsite.InputField')
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
