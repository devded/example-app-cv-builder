<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item active">
            <a class="nav-link" href="#">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <span class="icon-bg"><i class="mdi mdi-view-headline menu-icon"></i></span>
                <span class="menu-title">Summary</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/education') }}">
                <span class="icon-bg"><i class="mdi mdi-school menu-icon"></i></span>
                <span class="menu-title">Education</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('experiece') }}">
                <span class="icon-bg"><i class="mdi mdi-briefcase menu-icon"></i></span>
                <span class="menu-title">Experience</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('keyskill') }}">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Key Skills</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('tranning') }}">
                <span class="icon-bg"><i class="mdi mdi-certificate menu-icon"></i></span>
                <span class="menu-title">Tranning</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('achivement') }}">
                <span class="icon-bg"><i class="mdi mdi-trophy menu-icon"></i></span>
                <span class="menu-title">Achivement</span>
            </a>
        </li>







        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="{{ route('logout') }}" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Log Out</span>
                </a>
            </div>
        </li>
    </ul>
</nav>
