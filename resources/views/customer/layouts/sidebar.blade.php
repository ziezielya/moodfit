<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">

    <div class="sidebar-brand">
      <a href="{{ route('home') }}"><i class="fas fa-star mr-2"></i>MOODFIT</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('home') }}">MF</a>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>

      <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" class="nav-link">
          <i class="fas fa-home"></i><span>Home</span>
        </a>
      </li>

      <li class="menu-header">Menu</li>

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

      <li class="menu-header">Admin</li>

      <li class="{{ request()->routeIs('produk.*') ? 'active' : '' }}">
        <a href="{{ route('produk.index') }}" class="nav-link">
          <i class="fas fa-box-open"></i> <span>Kelola Produk</span>
        </a>
      </li>

      <li class="{{ request()->routeIs('pembayaran.index') ? 'active' : '' }}">
        <a href="{{ route('pembayaran.index') }}" class="nav-link">
          <i class="fas fa-lock"></i> <span>Data Pembelian</span>
        </a>
      </li>
    </ul>

  </aside>
</div>
