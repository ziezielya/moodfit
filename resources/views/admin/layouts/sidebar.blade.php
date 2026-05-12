<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">

    <div class="sidebar-brand">
      <a href="#">MOODFIT</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">MF</a>
    </div>

    <ul class="sidebar-menu">
      
      <li class="menu-header">Dashboard</li>

      <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" class="nav-link">
          <i class="fas fa-home"></i><span>Home</span>
        </a>
      </li>

      <li class="menu-header">Starter</li>

      <li class="{{ request()->routeIs('tentang') ? 'active' : '' }}">
        <a href="{{ route('tentang') }}" class="nav-link">
          <i class="fas fa-info-circle"></i> <span>Tentang</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('produk.*') ? 'active' : '' }}">
        <a href="{{ route('produk.index') }}" class="nav-link">
          <i class="fas fa-tshirt"></i> <span>Produk</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
        <a href="{{ route('gallery') }}" class="nav-link">
          <i class="fas fa-images"></i> <span>Gallery</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('kontak') ? 'active' : '' }}">
        <a href="{{ route('kontak') }}" class="nav-link">
          <i class="fas fa-phone"></i> <span>Kontak</span>
        </a>
      </li>

    </ul>

  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
  <a href="{{ route('produk.index') }}" class="btn btn-white btn-lg btn-block">
    <i class="fas fa-user"></i> Admin
  </a>
</div>

  </aside>
</div>