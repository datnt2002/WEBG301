@extends('UserView.UserMaster.UserMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection
@section('main')
    @include('UserView.Partial.navbar')

    <div class="row" style="padding-top: 50px">
        <div class="col-md-6 col-lg-6">
            <img class="card-img-top" src="{{$pet[0]->image}}" alt="Dog detail" style="object-fit: cover; height: 500px; width: 600px;margin-left: 100px; margin-bottom: 30px">
        </div>

        <div class="col-lg-6" style="padding-right: 50px ">
            <h1 style="text-align: center">Puppy Detail</h1>
            <dl class="row">
                <dt class="col-sm-3"><h4>Name: </h4></dt>
                <dd class="col-sm-9"><h4>{{$pet[0]->name}}</h4></dd>

                <dt class="col-sm-3"><h4>Gender: </h4></dt>
                <dd class="col-sm-9"><h4>{{$pet[0]->gender}}</h4></dd>

                <dt class="col-sm-3"><h4>Area: </h4></dt>
                <dd class="col-sm-9"><h4>{{$pet[0]->area}}</h4></dd>

                <dt class="col-sm-3"><h4>Breed: </h4></dt>
                <dd class="col-sm-9"><h4>{{$pet[0]->breedsID}}</h4></dd>

                <dt class="col-sm-3"><h4>Color: </h4></dt>
                <dd class="col-sm-9"><h4>{{$pet[0]->color}}</h4></dd>

                <dt class="col-sm-3"><h4>Detail: </h4></dt>
                <dd class="col-sm-9"><h4>{{$pet[0]->Detail}}</h4></dd>
            </dl>
        </div>
    </div>
@include('UserView.Partial.footer')
@endsection
