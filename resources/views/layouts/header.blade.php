<header style="display: flex; justify-content: space-between; padding: 10px; background-color: #f8f9fa; margin-left: 0px;">
  <h1>Welcome</h1>
  <div>
      <a href="{{ url('/user') }}" style="margin-right: 20px;">
          <i class="fas fa-user"></i> User
      </a>
      <a href="{{ url('/settings') }}" style="margin-right: 20px;">
          <i class="fas fa-cog"></i> Settings
      </a>
      <a href="{{ url('/logout') }}">
          <i class="fas fa-sign-out-alt"></i> Logout
      </a>
  </div>
</header>