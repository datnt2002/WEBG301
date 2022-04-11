@extends('puppywebsite.PuppyWebsiteMaster.PuppyMaster')

@section('main')
    <div class="container-fluid">
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
                                <a class="quick-link" href="">Log out</a>
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
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>

@endsection
