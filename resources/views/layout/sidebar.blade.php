<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Madni International<span></span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ route('dashboard.index') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['price_categories']) }}">
        <a href="{{ route('pricecategory.index') }}" class="nav-link">
          <i class="fa fa-inr"></i>
          <span class="link-title">Price Categories</span>
        </a>
      </li>

      <li class="nav-item {{ active_class(['customers']) }}">
        <a href="{{ route('customers.index') }}" class="nav-link">
          <i class="fa fa-users"></i>
          <span class="link-title">Manage Customers</span>
        </a>
      </li>

      <li class="nav-item {{ active_class(['invoice']) }}">
        <a href="{{ route('invoice.index') }}" class="nav-link">
          <i class="fa fa-file-o"></i>
          <span class="link-title">Manage Invoice</span>
        </a>
      </li>

      <li class="nav-item {{ active_class(['apps/chat']) }}">
        <a href="{{ url('/apps/chat') }}" class="nav-link">
          <i class="fa fa-file-excel-o"></i>
          <span class="link-title">View Price List</span>
        </a>
      </li>
     
     
     
      
      
     
    </ul>
  </div>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted">Sidebar:</h6>
    <div class="form-group border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Version:</h6>
      <a class="theme-item active" href="https://www.nobleui.com/laravel/template/light/">
        <img src="{{ url('assets/images/screenshots/light.jpg') }}" alt="light version">
      </a>
      <h6 class="text-muted mb-2">Dark Version:</h6>
      <a class="theme-item" href="https://www.nobleui.com/laravel/template/dark">
        <img src="{{ url('assets/images/screenshots/dark.jpg') }}" alt="light version">
      </a>
    </div>
  </div>
</nav>