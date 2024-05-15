<header style="display: flex; justify-content: space-between; padding: 10px; background-color: #f8f9fa; margin-left: 0px;">
    <h1 style="font-size: 20px; color: grey;">Welcome</h1>
    <div>
        <a href="{{ url('/dark-mode') }}" style="margin-right: 20px;">
            <i class="fa fa-sun-o" style="color: black !important;"></i>
        </a>
        <a href="{{ url('/profile') }}" style="margin-right: 20px;">
            <i class="fa fa-user" style="color: black !important;"></i>
        </a>
        <a href="{{ url('/logout') }}">
            <i class="fa fa-sign-out" style="color: black !important;"></i>
        </a>
    </div>
</header>