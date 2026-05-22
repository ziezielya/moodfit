<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">

    <div class="sidebar-brand">
      <a href="{{ url('/home') }}"><i class="fas fa-star mr-2"></i>MOODFIT</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('/home') }}">MF</a>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>

      <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ url('/home') }}" class="nav-link">
          <i class="fas fa-home"></i><span>Home</span>
        </a>
      </li>

      <li class="menu-header">Menu</li>

      <li class="{{ request()->routeIs('tentang') ? 'active' : '' }}">
        <a href="{{ url('/tentang') }}" class="nav-link">
          <i class="fas fa-info-circle"></i> <span>Tentang</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('produk.*') ? 'active' : '' }}">
        <a href="{{ url('/produk') }}" class="nav-link">
          <i class="fas fa-tshirt"></i> <span>Produk</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
        <a href="{{ url('/gallery') }}" class="nav-link">
          <i class="fas fa-images"></i> <span>Gallery</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('kontak') ? 'active' : '' }}">
        <a href="{{ url('/kontak') }}" class="nav-link">
          <i class="fas fa-phone"></i> <span>Kontak</span>
        </a>
      </li>

      <li class="menu-header">Admin</li>

      <li class="{{ request()->routeIs('produk.*') ? 'active' : '' }}">
        <a href="{{ url('/admin/produk') }}" class="nav-link">
          <i class="fas fa-box-open"></i> <span>Kelola Produk</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('pembayaran.index') ? 'active' : '' }}">
        <a href="{{ url('/admin/pembayaran') }}" class="nav-link">
          <i class="fas fa-lock"></i> <span>Data Pembelian</span>
        </a>
      </li>
    </ul>

  </aside>
</div>
