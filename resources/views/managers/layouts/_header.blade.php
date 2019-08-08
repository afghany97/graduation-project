<header class="main-header">
    <!-- Logo -->
    <a href="{{user()->role == config('auth.roles.department_manager') ? route('manager.department_manager.dashboard') : route('manager.chancellor.dashboard') }}"
       class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>H</b>TI</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b style="font-size: 16px;">HTI Management System</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('manager/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{"Dr " . user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('manager/dist/img/user2-160x160.jpg')}}" class="img-circle"
                                 alt="User Image">

                            @php

                                $manager = user();

                                $department = $manager->department ? $manager->department->name : null;

                            @endphp

                            <p>
                                {{"Dr " . $manager->name}}

                                <small>{{$manager->role == config('auth.roles.department_manager') ? "Dr $manager->name manager of $department department" : "Dr $manager->name dean of Higher Technology Institute"}}</small>

                            </p>

                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat" onclick="event.preventDefault();

                                                     document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('manager.auth.logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
