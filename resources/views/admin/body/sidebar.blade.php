<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          My<span>Business</span>
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
          <li class="nav-item">
            <a href="{{ route('admin.dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Admin Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">My Business</li>
          
          @if(Auth::user()->can('type.menu'))
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Property Type</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">

              @if(Auth::user()->can('all.type'))
                <li class="nav-item">
                  <a href="{{ route('all.type') }}" class="nav-link">All Types</a>
                </li>
              @endif
              @if(Auth::user()->can('add.type'))
                <li class="nav-item">
                  <a href="{{ route('add.type') }}" class="nav-link">Add Type</a>
                </li>
              @endif

              </ul>
            </div>
          </li>
          @endif 
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#amenitie" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Amenities</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="amenitie">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.amenities') }}" class="nav-link">All Amenities</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('add.amenity') }}" class="nav-link">Add Amenity</a>
                </li>
              </ul>
            </div>
          </li>
          
    

          <li class="nav-item nav-category">Roles $ Permissions</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Roles $ Permissions</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="advancedUI">
              <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('all.permission') }}" class="nav-link">All Permissions</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('all.roles') }}" class="nav-link">All Roles</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('add.roles.permission') }}" class="nav-link">Assign Role To Permission</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('all.roles.permission') }}" class="nav-link">All Roles And Permissions</a>
                  </li>
                </ul>

                <li class="nav-item nav-category">ADMIN MANAGEMENT PORTAL</li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">Manage Admin User</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
              <div class="collapse" id="admin">
              <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('all.admin') }}" class="nav-link">All Admin</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('add.admin') }}" class="nav-link">Add Admin</a>
                  </li>
                 
                </ul>
      </div>
    </nav>
    