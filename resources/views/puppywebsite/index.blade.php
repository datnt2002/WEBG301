@extends('PuppyWebsiteMaster.PuppyMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection
@include('partials.adminNav')
@include('partials.LeftNav');
@section('main')
<<<<<<< HEAD
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
=======
    <div class="content-page">
        <div class="content">

            <div class="container-fluid">
                <!-- start page title -->

                <!-- end page title -->
                <table class="table table-striped table-centered mb-0 ">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Breed</th>
                        <th>Gender</th>
                        <th>Area</th>
                        <th>Detail</th>
                        <th>Color</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pets as $each)
                    <tr>
                        <td>
                            {{$each->id}}
                        </td>
                        <td>
                            {{$each->name}}
                        </td>
                        <td>{{$each->breedsID}}</td>
                        <td>{{$each->gender}}</td>
                        <td>{{$each->area}}</td>
                        <td>{{$each->Detail}}</td>
                        <td>{{$each->color}}</td>
                        <td class="table-user">
                            <img src="{{$each->image}}" alt="table-user" style="width:100px;height:100px" class="rounded-circle"/>
                        </td>
                        <td class="table-action">
                            <a href="{{route('puppy.update',['id'=>$each->id])}}" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                            <a href="{{route('puppy.confirm',['id'=>$each->id])}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- end row -->

>>>>>>> 5fb7cad3ef3ef2f3c28e38a06f2ba24fcbdf026e
            </div>
        </div>
    </div>
@endsection

