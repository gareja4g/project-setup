<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        @if (auth()->check())
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                {{ auth()->check() ? auth()->user()->name : '' }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="nav-link"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="far fa-sign-out nav-icon"></i>
                                        <p>Log Out</p>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item @if (request()->route()->named('business.*') || request()->route()->named('branches.*')) menu-open @endif">
                    <a href="#" class="nav-link @if (request()->route()->named('business.*') || request()->route()->named('branches.*')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Business Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('business.list') }}"
                                class="nav-link @if (request()->route()->named('business.*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Business</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('branches.list') }}"
                                class="nav-link @if (request()->route()->named('branches.*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Branches</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
