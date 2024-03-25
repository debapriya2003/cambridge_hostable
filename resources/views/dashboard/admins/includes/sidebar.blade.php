<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div>
        <!-- Brand Logo -->
        <a href="{{ route('dashboard.admins.index') }}" class="brand-link ">
            {{-- <img src="{{ asset('images/logo.png') }}" alt="" class=""
                style="opacity: 1;width: 100%; height:50px;
                background: aliceblue;" width="50"> --}}
            CAMBRIDGE SCHOOL
        </a>

    </div>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2 pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent  nav-legacy" data-widget="treeview"
                role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="{{ route('dashboard.admins.news.index') }}"
                        class="nav-link {{ request()->is('dashboard/admins/news') || request()->is('dashboard/admins/news/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            news
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ route('dashboard.admins.topRanker.index') }}"
                        class="nav-link {{ request()->is('dashboard/admins/topRanker') || request()->is('dashboard/admins/topRanker/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Top Rankers
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ route('dashboard.admins.admin.index') }}"
                        class="nav-link {{ request()->is('dashboard/admins/admin') || request()->is('dashboard/admins/admin/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Admins
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('dashboard.admins.contact.index')}}"
                        class="nav-link {{ request()->is('dashboard/admins/contact') || request()->is('dashboard/admins/contact/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Contacts
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
