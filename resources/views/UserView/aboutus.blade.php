@extends('UserView.UserMaster.UserMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/jquery-jvectormap-1.2.2.css')}}">
@endsection

@section('main')
{{--        @include('UserView.Partial.navbar')--}}

    <div>
        <h1>About Us</h1>
    </div>
    <div class="container-fluid">
        <div class="card mb-3" >
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <img src="{{asset('/images/puppy_images/about2.jpg')}}" alt="..." style="width: 100%; height: 100%">
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"> Our mission is to make lives better by placing healthy puppies in happy homes</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-lg-6">--}}
{{--                <img src="{{asset('/images/puppy_images/about2.jpg')}}" alt="" style="width: 100%;height: 100%">--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                Our mission is to make lives better by placing healthy puppies in happy homes--}}
{{--            </div>--}}
{{--        </div>--}}

        <h1>About PECA shop</h1>
        <p>We are a community of dog lovers, committed to connecting the nation’s top breeders to caring, responsible
            individuals and families. We hold ourselves and our customers to the highest standards and aim to improve
            the life of each puppy, breeder and owner who joins our family</p>



            <div class="card mb-3" >
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <h1>Location</h1>
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
                    <div class="col-lg-6">
                        <div class="map row">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1862.1078727215474!2d105.7901535!3d21.0240518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b329f68977%3A0x6ddf5ff1e829fc56!2zxJDhuqFpIEjhu41jIEdyZWVud2ljaA!5e0!3m2!1svi!2s!4v1650813917367!5m2!1svi!2s"
                                width="600" height="450" style="border:0; margin-top: 15px" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>


        </div>



    <div style="text-align: center;">
        <h2 style="font-size: 2rem;">PECA Puppy</h2>

    </div>




    </div>

@endsection
