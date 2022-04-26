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
            <div class="carousel-item ">
                <img class="d-block img-fluid mx-auto"
                     src="{{asset('/images/puppy_images/bg.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="height: 100%;">
                    <h2>Welcome to PECA</h2>
                    <h3 class="text-white">Find your new best friend</h3>
                    <p>Browse pets from our network of over 11,500 shelters and rescues.</p>
                </div>
            </div>
            <div class="carousel-item active">
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
                        @foreach($pet as $each)
                            <div class="col-md-6 col-xl-3" >
                            <div class="card d-block text-dark" style="width: 300px; height: 350px; margin: 50px 50px; box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.25),
  0 5px 15px 0 rgba(0, 0, 0, 0.12)">
                                <!-- project card -->
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="{{$each->image}}"
                                         alt="project image cap" style="height: 100%; width:100%">

                                <div class="card-body position-relative" style="padding-left: unset; padding-right: unset; margin-bottom: 9px ">
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

    <section id="aboutsection" class="About-custom">

        <div>
            <h1 style="font-size: 2rem; text-align: center;">About Us</h1>
        </div>
        <br/>

        <div style="text-align: center;">
            <h2 style="font-size: 2rem;">PECA Puppy</h2>

        </div>
        <div class="row col-lg-12">
            <div class="col-lg-6">
                <div class="map row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1862.1078727215474!2d105.7901535!3d21.0240518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b329f68977%3A0x6ddf5ff1e829fc56!2zxJDhuqFpIEjhu41jIEdyZWVud2ljaA!5e0!3m2!1svi!2s!4v1650813917367!5m2!1svi!2s"
                        width="600" height="450" style="border:0; margin-top: 15px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-6">
                <h3><i class="fas fa-address-card" style="font-size: 30px;"></i> Do Nguyen Huy Hoang and Nguyen Trong
                    Dat</h3>
                <p style="font-size: 20px">2 Founder of PECA puppy shop with the mission loving pets.</p>

                <h3><i class="fas fa-building" style="font-size: 30px;"></i> Address</h3>

                <p style="font-size: 20px">2 Pham Van Bach - Dich Vong - Cau Giay - Ha Noi</p>

                <h3><i class="fas fa-phone" style="font-size: 30px;"></i> Support</h3>
                <p style="font-size: 20px">Telephone: 0123456789</p>
                <p style="font-size: 20px">Email 1: Datntgch200102@fpt.edu.vn</p>
                <p style="font-size: 20px">Email 2: Datntgch200102@fpt.edu.vn</p>

            </div>
        </div>


        <div class="row" style="text-align: center; padding-top: 30px">

            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </section>

    @include('UserView.Partial.footer')
@endsection
