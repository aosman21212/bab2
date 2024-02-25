<li class="has-child open">
    <a href="#" class="active">
        <span data-feather="home" class="nav-icon"></span>
        <span class="menu-text"> Client and  Vendor </span>
        <span class="toggle-icon"></span>
    </a>
    <ul>
        @if (Auth::user()->hasRole('setting'))
        <li>
            <a href="{{ route('babacctmanagers.index') }}" class="{{ Request::is('babacctmanagers*') ? 'active' : '' }}">
                BAB Acct. Manager
            </a>
        </li>
        @endif
        @if (Auth::user()->hasRole('User _vendor'))

        <li>
            <a href="{{ route('vendors.index') }}" class="{{ Request::is('vendors*') ? 'active' : '' }}">
                Vendors
            </a>
        </li>
        @endif

        @if (Auth::user()->hasRole('User_client'))
        <li>
            <a href="{{ route('clients.index') }}" class="{{ Request::is('clients*') ? 'active' : '' }}">
                Clients
            </a>
        </li>
        @endif
        @if (Auth::user()->hasRole('setting'))

        <li>
            <a href="{{ route('productservices.index') }}" class="{{ Request::is('productservices*') ? 'active' : '' }}">
                Client Services
            </a>
        </li>
        @endif

        @if (Auth::user()->hasRole('User_client'))
        <li>
            <a href="{{ route('clientdatas.index') }}" class="{{ Request::is('clientdatas*') ? 'active' : '' }}">
                Client Data
            </a>
        </li>
        @endif
        @if (Auth::user()->hasRole('User_client'))
        <li>
        <a href="{{ route('clientdatareports.index') }}"
       class="nav-link {{ Request::is('clientdatareports*') ? 'active' : '' }}">
        Client Data Reports
    </a>
    </li>
        @endif
        @if (Auth::user()->hasRole('User _vendor'))

        <li>
            <a href="{{ route('vendordatas.index') }}" class="{{ Request::is('vendordatas*') ? 'active' : '' }}">
                Vendor Invoice
            </a>
        </li>
        @endif
    </ul>
</li>

@if (Auth::user()->hasRole('setting'))
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a  href="{!! route('users.index') !!}" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user nav-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        <span class="menu-text">users</span>
    </a>
</li>
@endif
@if (Auth::user()->hasRole('setting'))

<li>
    <a  href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user nav-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        <span class="menu-text">Roles</span>
    </a>
</li>
@endif

<!-- <li class="nav-item">
    <a href="{{ route('clientdatareports.index') }}"
       class="nav-link {{ Request::is('clientdatareports*') ? 'active' : '' }}">
        <p>Clientdatareports</p>
    </a>
</li> -->
<!-- <li class="nav-item">
    <a href="{{ route('clientdatareports.index') }}"
       class="nav-link {{ Request::is('clientdatareports*') ? 'active' : '' }}">
        <p>Clientdatareports</p>
    </a>
</li> --><!-- <li class="nav-item">
    <a href="{{ route('clientdatareports.index') }}"
       class="nav-link {{ Request::is('clientdatareports*') ? 'active' : '' }}">
        <p>Clientdatareports</p>
    </a>
</li> -->
<!-- <li class="nav-item">
    <a href="{{ route('clientdatareports.index') }}"
       class="nav-link {{ Request::is('clientdatareports*') ? 'active' : '' }}">
        <p>Clientdatareports</p>
    </a>
</li> -->

<!-- <li class="nav-item">
    <a href="{{ route('clientdatareports.index') }}"
       class="nav-link {{ Request::is('clientdatareports*') ? 'active' : '' }}">
        <p>Clientdatareports</p>
    </a>
</li> -->
<!-- <li class="nav-item">
    <a href="{{ route('clientdatareports.index') }}"
       class="nav-link {{ Request::is('clientdatareports*') ? 'active' : '' }}">
        <p>Clientdatareports</p>
    </a>
</li> -->


