<div class="site-header">
    <nav class="navbar navbar-light">
        <ul class="nav navbar-nav">
            <li class="nav-item m-r-1 hidden-lg-up">
                <a class="nav-link collapse-button" href="#">
                    <i class="ti-menu"></i>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="avatar box-32">
                        <img src="img/avatars/1.jpg" alt="">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right animated flipInY">
                    <a class="dropdown-item" href="#">
                        <i class="ti-user m-r-0-5"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="ti-settings m-r-0-5"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="ti-help m-r-0-5"></i> Help</a>
                   <a class="dropdown-item" href="{{ route('logout') }}"><i class="ti-power-off m-r-0-5"></i> Sign out</a>
                </div>
            </li>
        </ul>
    </nav>
</div>