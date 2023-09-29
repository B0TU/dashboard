<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand mt-4 d-flex">
        <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo">
               <h1>LOGO</h1>
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-autod-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <!-- Menu starting -->
    <ul class="menu-inner py-3">

        <li @class(['menu-item', 'active' => request()->routeIs('home')])>
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid-alt"></i>
                <div>Dashboard</div>
            </a>
        </li>
        

        <li @class(['menu-item', 'active open' => request()->routeIs('menu')])>
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dialpad-alt"></i>
                <div>Menu</div>
            </a>
            <ul class="menu-sub">
                <li @class(['menu-item', 'active' => request()->routeIs('menu')])>
                    <a href="/account" class="menu-link">
                        <div>Sub-menu</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- Menu ending -->

</aside>
