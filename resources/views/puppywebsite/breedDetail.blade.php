@extends('PuppyWebsiteMaster.PuppyMaster')
@section('main')
    <div class="container-fluid">
        <div class="content-page" style="padding: 0 0px 100px 0px">
            <div class="content">
                <div class="container-fluid">
                    <h1>Edit Puppy</h1>
                    <form action="{{route('breed.Edit',['id'=> $breed[0]->id])}}" method="post">
                        @csrf
                        @foreach($breed as $each)
                            <div class="form-group">
                                <label for="simpleinput">Name</label>
                                <input type="text" id="simpleinput" class="form-control" name="breed"
                                       value="{{$each->bread}}">
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary" style="border-radius: 15px">Update</button>
                    </form>
@endsection

