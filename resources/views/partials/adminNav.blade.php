<div class="navbar-custom topnav-navbar topnav-navbar-dark" style="position: sticky">
    <div class="container-fluid">

        <!-- LOGO -->
        <a href="{{Route('puppy.index')}}" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="{{asset('images/pecaden.png')}}" alt="logo" height="40px">
                                </span>
            <span class="topnav-logo-sm">
                                    <img src="{{asset('images/pecaden.png')}}" alt="" height="40px">
                                </span>
        </a>

        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="dropdown notification-list d-lg-none show">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">
                    <i class="dripicons-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0 show" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(10px, 70px, 0px);" x-placement="bottom-start">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>
            {{--            <li class="dropdown notification-list">--}}
            {{--                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" id="topbar-notifydrop"--}}
            {{--                   role="button" aria-haspopup="true" aria-expanded="false">--}}
            {{--                    <i class="dripicons-bell noti-icon"></i>--}}
            {{--                    <span class="noti-icon-badge"></span>--}}
            {{--                </a>--}}
            {{--                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg"--}}
            {{--                     aria-labelledby="topbar-notifydrop">--}}
            {{--                </div>--}}
            {{--            </li>--}}

            {{--            <li class="dropdown notification-list d-none d-sm-inline-block">--}}
            {{--                <i class="dripicons-view-apps noti-icon"></i>--}}
            {{--            </li>--}}

            {{--            <li class="notification-list">--}}
            {{--                <a class="nav-link right-bar-toggle" href="javascript: void(0);">--}}
            {{--                    <i class="dripicons-gear noti-icon"></i>--}}
            {{--                </a>--}}
            {{--            </li>--}}

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop"
                   href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="account-user-avatar">
                                            <img src="{{asset('images/me.jpg')}}" alt="user-image"
                                                 class="rounded-circle">
                                        </span>

                    <span class="account-user-name">
                                                {{\Illuminate\Support\Facades\Session::has('username')?
                        \Illuminate\Support\Facades\Session::get('username') : ''}}
                                            <span class="account-position">Admin</span>
                                        </span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
                    aria-labelledby="topbar-userdrop" style="">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{route('admin.myaccount', Session::get('username') )}}" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-circle mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

        </ul>


        <div class="app-search dropdown">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." id="top-search"
                           style="border-radius: 15px; margin-right: 15px">
                    <span class="mdi mdi-magnify search-icon"></span>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" style="border-radius: 15px">Search</button>
                    </div>
                </div>

            </form>

        </div>

    </div>
</div>
</div>
