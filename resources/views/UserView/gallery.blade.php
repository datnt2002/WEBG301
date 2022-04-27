@extends('UserView.UserMaster.UserMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/jquery-jvectormap-1.2.2.css')}}">
@endsection

@section('main')

    <div class="row">
        <div class="col-lg-3" style="background-color: #1e1e1e; max-height: 100%; text-align: center">
            <div class="sticky-top">
                <img src="{{asset('/images/pecaden.png')}}" alt="" style="width: 200px;height: 60px; margin: 100px 0">
                <h4 style="color: #00bdbd; margin: 30px; padding: 0 25px">We are a creative digital studio
                    and we don't like normal things</h4>
                <h5 style="color: rgba(200,200,200,0.99); padding: 0 40px">PECA is a creative digital studio based in
                    Viet Nam. We like to experiment and create
                    things that have personality, challenges are
                    our bread and we don't know what limit means.</h5>

                <h5 style="color: rgba(236,236,236,0.99); margin-top: 20px; margin-bottom: 90px">New puppy is
                    coming!</h5>

                <a href="https://www.facebook.com/profile.php?id=100009220811268"><i class=" mdi mdi-facebook" style="color: rgba(239,239,239,0.99); font-size: 25px;"></i></a>
                <i class=" mdi mdi-instagram" style="color: rgba(239,239,239,0.99); font-size: 25px"></i>

                <h5 style="color: rgba(226,226,226,0.99);">Datntgch200102@fpt.edu.vn</h5>
                <h5 style="color: rgba(226,226,226,0.99);">Hoanghip108@gmail.com</h5>
                <a href="{{route('user.view')}}" style="color: #00bdbd; font-size: 20px">Back to main page</a>
            </div>
        </div>

        <div class="col-lg-9" style="padding: unset; background-color: #000000">
            <div class="container-fluid">
                <div class="row">
                    @foreach($pets as $pet)
                        <div class="card d-block" style="height: 300px; width: 300px; margin: 30px">
                            <img class="card-img-top" src="{{$pet->image}}"
                                 alt="project image cap" style="width: 100%; height: 100%">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
