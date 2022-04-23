<div class="navbar-custom topnav-navbar topnav-navbar-dark" style="position: sticky">

    <div class="container-fluid">

        <!-- LOGO -->
        <a href="{{Route('user.view')}}" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="{{asset('images/pecaden.png')}}" alt="logo" height="40px">
                                </span>
            <span class="topnav-logo-sm">
                                    <img src="{{asset('images/pecaden.png')}}" alt="" height="40px">
                                </span>
        </a>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="dropdown notification-list d-lg-none show">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="true">
                    <i class="dripicons-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0 show"
                     style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(10px, 70px, 0px);"
                     x-placement="bottom-start">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..."
                               aria-label="Recipient's username" name="petname">
                    </form>
                </div>
            </li>

        </ul>
        <div class="app-search dropdown">
            <form action="{{route('user.FindPetByName')}}" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." id="top-search"
                           style="border-radius: 15px; margin-right: 15px" name="petname">
                    <span class="mdi mdi-magnify search-icon"></span>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" style="border-radius: 15px">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>



