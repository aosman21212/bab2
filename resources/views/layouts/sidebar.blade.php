<!-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside> -->



<aside class="sidebar-wrapper">
            <div class="sidebar sidebar-collapse" id="sidebar">
                <div class="sidebar__menu-group">
                    <ul class="sidebar_nav">
                    <li class="menu-title">
                            <span>Main menu</span>
                        </li>
                        <li class="has-child open">
                            <a href="#" class="active">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text">Dashboard</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                             
                                <li>
                                    <a class=""  href="{{ route('home') }}">Dashboard</a>
                                </li>
                              
                              
                            </ul>
                        </li>
                    @include('layouts.menu')

                    </ul>
                </div>
            </div>
        </aside>