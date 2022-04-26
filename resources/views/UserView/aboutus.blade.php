@extends('UserView.UserMaster.UserMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/jquery-jvectormap-1.2.2.css')}}">
@endsection

@section('main')
            @include('UserView.Partial.navbarstatic')

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="row no-gutters" style="box-shadow: 10px 0px 5px 5px rgba(0, 0, 0, 0.25); margin-top: 30px">
                <div class="col-lg-6">
                    <img src="{{asset('/images/puppy_images/about2.jpg')}}" alt="..." style="width: 100%; height: 100%">
                </div>
                <div class="col-lg-6" style="background-color: rgb(223, 249, 251)">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 50px; text-align: center">PECA Puppy</h5>
                        <p style="font-size: 55px"><strong>Our mission</strong> is to make <strong>lives better</strong>
                            by placing <strong>healthy puppies</strong> in <strong>happy homes.</strong></p>
                        <p class="card-text">Do Nguyen Huy Hoang and Nguyen Trong Dat</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 50px 0px; box-shadow: 10px 0px 5px 5px rgba(0, 0, 0, 0.25); padding: 30px 15px; background-color: rgba(223, 230, 233,1.0)">
            <h1 style="font-size: 50px; text-align: center">About PECA shop</h1>
            <p style="font-size: 18px; text-align: center">We are a community of dog lovers, committed to connecting the
                nation’s top breeders to caring, responsible
                individuals and families. We hold ourselves and our customers to the highest standards and aim to
                improve
                the life of each puppy, breeder and owner who joins our family.</p>
        </div>

        <div class="card mb-3" style="box-shadow: 15px 0px 5px 5px rgba(0, 0, 0, 0.25); background-color: rgb(248, 239, 186)">
            <div class="row no-gutters">
                <div class="col-lg-7" style="text-align: center; padding-top: 15px">
                    <h1>Location</h1>
                    <h3><i class="fas fa-address-card" style="font-size: 30px;"></i> Do Nguyen Huy Hoang and Nguyen
                        Trong
                        Dat</h3>
                    <p style="font-size: 20px">2 Founder of PECA puppy shop with the mission loving pets.</p>

                    <h3><i class="fas fa-building" style="font-size: 30px;"></i> Address</h3>

                    <p style="font-size: 20px">2 Pham Van Bach - Dich Vong - Cau Giay - Ha Noi</p>

                    <h3><i class="fas fa-phone" style="font-size: 30px;"></i> Support</h3>
                    <p style="font-size: 20px">Telephone: 0123456789</p>
                    <p style="font-size: 20px">Email 1: Datntgch200102@fpt.edu.vn</p>
                    <p style="font-size: 20px">Email 2: Datntgch200102@fpt.edu.vn</p>

                </div>
                <div class="col-lg-5">
                    <div class="map row">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1862.1078727215474!2d105.7901535!3d21.0240518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b329f68977%3A0x6ddf5ff1e829fc56!2zxJDhuqFpIEjhu41jIEdyZWVud2ljaA!5e0!3m2!1svi!2s!4v1650813917367!5m2!1svi!2s"
                            width="100%" height="460" style="border:0" allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>


        <h2 style="text-align: center; font-size: 50px; margin-bottom: 20px">Founder</h2>


        <div class="card mb-3" style="box-shadow: 10px 0px 5px 5px rgba(0, 0, 0, 0.25); border: 1px solid black">
            <div class="row no-gutters">
                <div class="col-sm-3" style="height: 250px;width: 250px;text-align: center;">
                    <img src="{{asset('/images/me.jpg')}}" class="card-img rounded-circle" alt="founder"
                         style="height: 90%; width: 65%; margin-top: 15px">
                </div>
                <div class="col-sm-9">
                    <div class="card-body">
                        <h3 class="card-title text-dark">Do Nguyen Huy Hoang</h3>
                        <p style="font-size: 18px" class="text-dark">Founder</p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="box-shadow: 10px 0px 5px 5px rgba(0, 0, 0, 0.25); border: 1px solid black">
            <div class="row no-gutters">
                <div class="col-lg-3" style="height: 250px;width: 250px;text-align: center;">
                    <img src="{{asset('/images/dat.jpg')}}" class="card-img rounded-circle" alt="founder"
                         style="height: 90%; width: 65%; margin-top: 15px">
                </div>
                <div class="col-lg-9">
                    <div class="card-body">
                        <h3 class="card-title text-dark">Nguyen Trong Dat</h3>
                        <p style="font-size: 18px" class="text-dark">Founder</p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('UserView.Partial.footer')
@endsection
