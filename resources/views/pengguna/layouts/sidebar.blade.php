


<div class="sidebar" style="background-color: #33363F; height:100vh; margin-top: 0; padding-top: 0;">
    <!-- Sidebar Menu -->
    <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
            role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'dashboard')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>DASHBOARD</p>
                </a>
            </li>
            <br>
            {{-- <li class="nav-header">LOREM IPSUM</li> --}}
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>PENDUDUK</p>
                </a>
            </li>
            <br>
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>PERSURATAN</p>
                </a>
            </li>
            <br>
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>KELUHAN</p>
                </a>
            </li>
            <br>
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>KEUANGAN</p>
                </a>
            </li>
            <br>
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>BANSOS</p>
                </a>
            </li>
            <br>
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>INVENTORI</p>
                </a>
            </li>
        </ul>
    </nav>
</div>
<style>
    .nav-link {
        color: #ffffff; /* color for inactive menu items */
    }

    .nav-link:hover {
        color: #ff0000; /* color for hovered menu items */
        background-color: #33363F; /* background color for hovered menu items */
    }

    .nav-link.active {
        color: #652626; /* color for active menu item */
        background-color: #33363F; /* background color for active menu item */
    }
</style>