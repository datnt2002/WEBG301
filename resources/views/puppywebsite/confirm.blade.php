@extends('PuppyWebsiteMaster.PuppyMaster')
@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('bookworm.bookWithRepos.bookDetails')

        <form action="{{route('book.destroy', ['id' =>$pets[0]->id])}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$book->id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('book.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection