<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">{{ config('app.name', 'Laravel') }}</span>
        </a>

        <a class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">
            <a class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Doctor Section -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Doctor</span></li>
        <li class="menu-item {{ Request::is('admin/appointment') ? 'active' : '' }}">
            <a class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Appointments">Appointments</div>
            </a>
        </li>

    </ul>
</aside>
