@extends('PuppyWebsiteMaster.PuppyMaster')
@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>

        <form action="{{route('puppy.delete', ['id' =>$pet[0]->Pid])}}" method="post">
            @csrf
            {{--            <input type="hidden" name="id" value="{{$book->id}}">--}}
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('puppy.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
