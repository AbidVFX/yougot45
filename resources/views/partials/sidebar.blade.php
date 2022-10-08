<aside class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="menu-title">
                    <span>Main menu</span>
                </li>
                <li onclick="location.href='/dashboard';" class="has-child open">
                    <a href="#" target="_self" class="{{ request()->is('dashboard*') ? 'active' : '' }}">
                        <span data-feather="home" class="nav-icon"></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-title m-top-30">
                    <span>Resources</span>
                </li>
                <li class="has-child {{ request()->is('categories*') ? 'open' : '' }}">
                    <a href="/categories" class="{{ request()->is('categories*') ? 'active' : '' }}">
                        <span data-feather="server" class="nav-icon"></span>
                        <span class="menu-text">Categories</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('categories') ? 'active' : '' }}" href="/categories">List</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
