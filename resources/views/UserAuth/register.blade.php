@extends('PuppyWebsiteMaster.loginMaster')

@section('main')
    <section>
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="text-align: center">Sign up</h3>
                            <form action="{{route('user.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="fullName">Full Name</label>
                                            <input type="text" id="fullName" name="fullName"
                                                   class="form-control form-control-lg" value=""/>
                                        </div>
                                        @error('fullName')
                                        <div class="alert alert-warning" role="alert">
                                            <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="email" id="email" name="email"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg"
                                                id="address"
                                            />
                                            <label for="address" class="form-label">Address</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6 class="mb-2 pb-1">Gender: </h6>
                                        <div class="form-check form-check-inline">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="femaleGender"
                                                value="1"
                                                checked
                                            />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="maleGender"
                                                value="2"
                                            />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="otherGender"
                                                value="6"
                                            />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="text" id="username" name="username"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="username">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="password" id="password" name="password"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit"/>
                                </div>

                                <div class="signup_link">
                                    Have a account? <a href="{{route('user.login')}}">Sign in</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
