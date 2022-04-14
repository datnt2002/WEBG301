@extends('puppywebsite.PuppyWebsiteMaster.PuppyMaster')

@section('main')
    <div class="container-fluid">
        <h1>PECA managements</h1>
        <div class="row">
            <div class="col-lg-3">
                <div class="left">
                    <div class="card">
                        <div class="card-header">
                            Quicklink
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a class="quick-link" href="">Home Page</a>
                            </li>
                            <li class="list-group-item">
                                <a class="quick-link" href="{{route('user.login')}}">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="right">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Area</th>
                            <th>Breeds</th>
                            <th>Detail</th>
                            <th>Image</th>
                            <th>Color</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            @foreach($result as $each):
                            <td>{{$each->id}}</td>
                            <td>{{$each->name}}</td>
                            <td>{{$each->gender}}</td>
                            <td>{{$each->area}}</td>
                            <td>{{$each->breedsID}}</td>
                            <td>{{$each->Detail}}</td>
                            <td>
                                <img src="{{$each->image}}" alt="">
                            </td>
                            <td>{{$each->color}}</td>
                            <td><a type="button" class="btn btn-success btn-sm" href="">Edit</a></td>
                            <td><a type="button" class="btn btn-success btn-sm" href="">Delete</a></td>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>

@endsection
