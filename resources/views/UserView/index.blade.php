@extends('UserView.UserMaster.UserMaster')
@section('main')
    @include('UserView.Partial.navbar')
    <div class="container-fluid mm-active">
        <div class="wrapper mm-show">
            @include('UserView.Partial.leftnav')
            <div class="content-page">
                <div class="content">
                    <div class="row">
                        @foreach($pets as $each)
                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="{{$each->image}}"
                                         alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-secondary p-1">Ongoing</div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="apps-projects-details.html" class="text-title">Company logo
                                                design</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>3</b> Tasks
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>104</b> Comments
                                            </span>
                                        </p>
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                               title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                     class="rounded-circle avatar-xs"
                                                     alt="friend">
                                            </a>

                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                               title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="assets/images/users/avatar-5.jpg"
                                                     class="rounded-circle avatar-xs"
                                                     alt="friend">
                                            </a>

                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                               title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="assets/images/users/avatar-9.jpg"
                                                     class="rounded-circle avatar-xs"
                                                     alt="friend">
                                            </a>
                                        </div>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Progress <span class="float-right">45%</span>
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
