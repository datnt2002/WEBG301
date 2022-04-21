@extends('UserView.UserMaster.UserMaster')
@section('main')
    @include('partials.adminNav')

    <div class="container-fluid mm-active">
        <div class="wrapper mm-show">
            {{--            @include('UserView.Partial.leftnav')--}}


            <div class="content-page">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div id="carouselExampleControls" class="carousel slide " style=""
                                         data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid mx-auto"
                                                     src="{{asset('/images/small-1.jpg')}}" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto"
                                                     src="{{asset('/images/small-1.jpg')}}" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto"
                                                     src="{{asset('/images/small-1.jpg')}}" alt="Third slide">
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
                                </div>
                            </div>
                        </div>

                        @foreach($pets as $each)
                            <div class="col-md-6 col-xl-3" style="margin-top:30px">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="{{$each->image}}"
                                         alt="project image cap">

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="{{Route('Pet.Detail',['id'=>$each->Pid])}}" class="text-title">{{$each->name}}
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
                                        <p class="mb-2 font-weight-bold">Most people like <span class="float-right">45%</span>
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
@endsection
