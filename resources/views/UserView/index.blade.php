@extends('UserView.UserMaster.UserMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/jquery-jvectormap-1.2.2.css')}}">
@endsection

@section('main')
    {{--    @include('UserView.Partial.leftnav')--}}
    @include('UserView.Partial.navbar')
    {{--@include('UserView.Partial.leftnav')--}}
    <div id="carouselExampleControls" class="carousel slide "
         data-ride="carousel" style="height: 500px">
        <div class="carousel-inner" role="listbox" style="height: 100%; width: 100%">
            <div class="carousel-item active">
                <img class="d-block img-fluid mx-auto"
                     src="{{asset('/images/puppy_images/bg.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="height: 100%;">
                    <h2>Welcome to PECA</h2>
                    <h3 class="text-white">Find your new best friend</h3>
                    <p>Browse pets from our network of over 11,500 shelters and rescues.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid mx-auto"
                     src="{{asset('/images/puppy_images/big.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="height: 100%;">
                    <h2>Welcome to PECA</h2>
                    <h3 class="text-white">Find your new best friend</h3>
                    <p>Browse pets from our network of over 11,500 shelters and rescues.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid mx-auto"
                     src="{{asset('/images/puppy_images/carousel2.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="height: 100%;">
                    <h2>Welcome to PECA</h2>
                    <h3 class="text-white">Find your new best friend</h3>
                    <p>Browse pets from our network of over 11,500 shelters and rescues.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
           data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
           data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid mm-active">
        <div class="wrapper mm-show">
            {{--            @include('UserView.Partial.leftnav')--}}
            <div class="content-page">
                <div class="content">

                    <div class="row">
                        @foreach($pets as $each)
                            <div class="col-md-6 col-xl-3" style="margin-top:30px">
                                <!-- project card -->

                                <div class="card d-block" style="width: 330px; height: 350px; margin: 50px 50px">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="{{$each->image}}"
                                         alt="project image cap" style="height: 100%; width:100%">

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="{{Route('Pet.Detail',['id'=>$each->Pid])}}"
                                               class="text-title">{{$each->name}}</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class=" dripicons-star"></i>
                                                <b>{{$each->bread}}</b>
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="uil-home"></i>
                                                <b>{{$each->area}}</b>
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="uil-meh-alt"></i>
                                                <b>{{$each->color}}</b>
                                            </span>
                                        </p>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Most people like <span
                                                class="float-right">45%</span>
                                        </p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="45"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                        @endforeach<!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('UserView.Partial.footer')
@endsection
