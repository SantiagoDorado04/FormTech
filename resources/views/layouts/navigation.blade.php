<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="App Logo" class="w-px-40 h-auto" />
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">FormTech</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Escritorio</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="User interface">Desplegable</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('') ? 'active' : '' }}">
                    <a href="" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Basic">Item desplegable</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->routeIs('instituciones') ? 'active' : '' }}">
            <a href="{{ route('instituciones') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-chalkboard"></i>
                <div data-i18n="Analytics">Gestion de instituciones</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('docentes') ? 'active' : '' }}">
            <a href="{{ route('docentes') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-chalkboard"></i>
                <div data-i18n="Analytics">Gestion de docentes</div>
            </a>
        </li>

        <li class="menu-item">
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <a href="#" class="menu-link" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="menu-icon tf-icons bx bx-log-out-circle"></i>
                    <div data-i18n="Logout">Cerrar sesión</div>
                </a>
            </form>
        </li>

    </ul>

</aside>
