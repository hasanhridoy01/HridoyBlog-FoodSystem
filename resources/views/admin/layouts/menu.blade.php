<div class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <a href="index.html">
            <img src="assets/img/logo-icon.png" class="img-fluid" alt="">
        </a>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ (Route::currentRouteName() == 'admin.dashboard' ? 'active' : '') }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                </li>
                <li class="{{ (Route::currentRouteName() == 'category.index' ? 'active' : '') }}">
                    <a href="{{ route('category.index') }}"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
                </li>
                <li class="">
                    <a href=""><i class="fas fa-tags"></i></i> <span>Tags</span></a>
                </li>
                <li>
                    <a href="subscriptions.html"><i class="far fa-calendar-alt"></i> <span>CopyRight</span></a>
                </li>
                <li>
                    <a href="wallet.html"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
                </li>
                <li>
                    <a href="service-providers.html"><i class="fas fa-user-tie"></i> <span> Service Providers</span></a>
                </li>
                <li>
                    <a href="users.html"><i class="fas fa-user"></i> <span>Users</span></a>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i> <span> Settings</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>