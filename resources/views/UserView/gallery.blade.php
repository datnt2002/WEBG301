@extends('UserView.UserMaster.UserMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/jquery-jvectormap-1.2.2.css')}}">
@endsection

@section('main')

    <div class="row">
        <div class="col-lg-3" style="background-color: #1e1e1e; max-height: 100%">
            <img src="{{asset('/images/pecaden.png')}}" alt="" style="width: 70px;height: 70px">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Featured
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-9" >
            <div style="background-color: #000000">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 500px; width: 500px">
                <div class="carousel-inner" role="listbox" style="height: 100%; width: 100%">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{asset('/images/puppy_images/bonnie.jpg')}}"
                             alt="First slide">
                    </div>
                    @foreach($pets as $pet)
                        <div class="carousel-item " style="height: 100%">
                            <img class="card-img-top" src="{{$pet->image}}"
                                 alt="project image cap">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>

@endsection
