           
<header class="navbar navbar-inverse">
    <ul class="nav navbar-nav-custom">
        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                <i class="fa fa-bars fa-fw"></i>
            </a>
        </li>
    </ul>
    <form action="page_ready_search_results.php" method="post" class="navbar-form-custom" role="search">
        <div class="form-group">
            <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
        </div>
    </form>
    <ul class="nav navbar-nav-custom pull-right">
        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');">
                <i class="gi gi-share_alt"></i>
                <!-- <span class="label label-primary label-indicator animation-floating">4</span> -->
            </a>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/user/img/img_avatar.png" alt="avatar"> <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                <li>
                    <a href="{{ route('user.information') }}">
                        <i class="fa fa-user fa-fw pull-right"></i>
                        Profile
                    </a>
                    
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}" data-confirm="Are you sure to logout?" method="POST"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</header>