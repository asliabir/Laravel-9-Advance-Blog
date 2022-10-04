<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li
                class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label">Website</li>
            <li
                class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                <a href="{{ route('admin.categories.index') }}" aria-expanded="false">
                    <i class="fa fa-th-large"></i><span class="nav-text">Category</span>
                </a>
            </li>
            <li
                class="{{ request()->routeIs('admin.tags.*') ? 'active' : '' }}">
                <a href="{{ route('admin.tags.index') }}" aria-expanded="false">
                    <i class="fa fa-tags"></i><span class="nav-text">Tag</span>
                </a>
            </li>
            <li
                class="{{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                <a href="{{ route('admin.posts.index') }}" aria-expanded="false">
                    <i class="fa fa-clipboard"></i><span class="nav-text">Post</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Home 1</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>
            <li class="nav-label">Settings</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./page-login.html">Login</a></li>
                    <li><a href="./page-register.html">Register</a></li>
                    <li><a href="./page-lock.html">Lock Screen</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-error-404.html">Error 404</a></li>
                            <li><a href="./page-error-403.html">Error 403</a></li>
                            <li><a href="./page-error-400.html">Error 400</a></li>
                            <li><a href="./page-error-500.html">Error 500</a></li>
                            <li><a href="./page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
