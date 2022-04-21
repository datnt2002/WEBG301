@extends('PuppyWebsiteMaster.PuppyMaster')
@section('main')
    <div class="col-md-6 col-lg-3">

        <!-- Simple card -->
        <div class="card d-block">
            <img class="card-img-top" src="{{$pet[0]->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$pet[0]->name}}</h5>
                <p class="card-text">{{$pet[0]->Detail}}</p>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
@endsection