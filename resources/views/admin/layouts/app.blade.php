<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MoodFit Admin')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D6;
            background-image: radial-gradient(at 0% 0%, hsla(48,100%,93%,1) 0px, transparent 50%),
                              radial-gradient(at 50% 0%, hsla(47,100%,90%,1) 0px, transparent 50%),
                              radial-gradient(at 100% 0%, hsla(45,100%,92%,1) 0px, transparent 50%);
        }
        .sidebar-scroll::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: rgba(252, 211, 77, 0.4);
            border-radius: 10px;
        }
    </style>
</head>

<body class="min-h-screen text-gray-800 antialiased overflow-x-hidden">

<div class="flex min-h-screen relative">

    <!-- SIDEBAR -->
    <aside id="admin-sidebar" class="w-72 bg-white/80 backdrop-blur-xl border-r border-yellow-100 shadow-xl fixed h-screen z-50 transition-all duration-300 left-0 md:translate-x-0 -translate-x-full flex flex-col justify-between">
        
        <div>
            <!-- LOGO -->
            <div class="h-24 flex items-center px-8 border-b border-yellow-100/60 justify-between">
                <div>
                    <h1 class="text-3xl font-black tracking-wider bg-gradient-to-r from-amber-600 to-yellow-500 bg-clip-text text-transparent">
                        MoodFit
                    </h1>
                    <p class="text-xs font-semibold text-amber-600 tracking-widest uppercase mt-0.5">
                        Fashion Admin
                    </p>
                </div>
                <!-- Mobile Close Button -->
                <button onclick="toggleSidebar()" class="md:hidden w-10 h-10 rounded-xl bg-amber-50 hover:bg-amber-100 text-amber-900 flex items-center justify-center transition-all">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- MENU -->
            <div class="px-5 py-6 overflow-y-auto sidebar-scroll max-h-[calc(100vh-180px)]">
                <p class="text-[10px] uppercase tracking-[3px] text-amber-600 font-bold mb-4 px-4 opacity-75">
                    Main Menu
                </p>

                <div class="space-y-1.5">
                    <!-- DASHBOARD -->
                    <a href="{{ url('/admin/dashboard') }}"
                       class="flex items-center gap-4 px-4 py-3 rounded-2xl {{ request()->routeIs('admin.dashboard') ? 'bg-gradient-to-r from-yellow-300 via-amber-200 to-yellow-100 text-amber-950 font-bold shadow-md shadow-amber-200/50' : 'hover:bg-yellow-50/60 text-gray-600 hover:text-amber-900 font-medium transition-all duration-200 hover:translate-x-1' }}">
                        <div class="w-10 h-10 rounded-xl {{ request()->routeIs('admin.dashboard') ? 'bg-white text-amber-600 shadow-sm' : 'bg-amber-50 text-amber-500' }} flex items-center justify-center transition-all duration-300">
                            <i class="fas fa-chart-pie text-sm"></i>
                        </div>
                        <div>
                            <h3 class="text-sm">Dashboard</h3>
                            <p class="text-[10px] opacity-75 {{ request()->routeIs('admin.dashboard') ? 'text-amber-800' : 'text-gray-400' }}">Overview admin</p>
                        </div>
                    </a>

                    <!-- PRODUK -->
                    <a href="{{ url('/admin/produk') }}"
                       class="flex items-center gap-4 px-4 py-3 rounded-2xl {{ request()->routeIs('produk.*') ? 'bg-gradient-to-r from-yellow-300 via-amber-200 to-yellow-100 text-amber-950 font-bold shadow-md shadow-amber-200/50' : 'hover:bg-yellow-50/60 text-gray-600 hover:text-amber-900 font-medium transition-all duration-200 hover:translate-x-1' }}">
                        <div class="w-10 h-10 rounded-xl {{ request()->routeIs('produk.*') ? 'bg-white text-amber-600 shadow-sm' : 'bg-amber-50 text-amber-500' }} flex items-center justify-center transition-all duration-300">
                            <i class="fas fa-tshirt text-sm"></i>
                        </div>
                        <div>
                            <h3 class="text-sm">Produk</h3>
                            <p class="text-[10px] opacity-75 {{ request()->routeIs('produk.*') ? 'text-amber-800' : 'text-gray-400' }}">Kelola produk</p>
                        </div>
                    </a>

                    <!-- PEMBAYARAN -->
                    <a href="{{ url('/admin/pembayaran') }}"
                       class="flex items-center gap-4 px-4 py-3 rounded-2xl {{ request()->routeIs('admin.pembayaran') ? 'bg-gradient-to-r from-yellow-300 via-amber-200 to-yellow-100 text-amber-950 font-bold shadow-md shadow-amber-200/50' : 'hover:bg-yellow-50/60 text-gray-600 hover:text-amber-900 font-medium transition-all duration-200 hover:translate-x-1' }}">
                        <div class="w-10 h-10 rounded-xl {{ request()->routeIs('admin.pembayaran') ? 'bg-white text-amber-600 shadow-sm' : 'bg-amber-50 text-amber-500' }} flex items-center justify-center transition-all duration-300">
                            <i class="fas fa-credit-card text-sm"></i>
                        </div>
                        <div>
                            <h3 class="text-sm">Pembayaran</h3>
                            <p class="text-[10px] opacity-75 {{ request()->routeIs('admin.pembayaran') ? 'text-amber-800' : 'text-gray-400' }}">Data transaksi</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- LOGOUT FOOTER -->
        <div class="p-6 border-t border-yellow-100/60 bg-yellow-50/30">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="w-full bg-red-50 hover:bg-red-100 text-red-600 font-bold py-3.5 px-5 rounded-2xl shadow-sm transition-all duration-300 hover:scale-[1.02] flex items-center justify-center gap-2">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout System</span>
                </button>
            </form>
        </div>

    </aside>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="flex-1 min-h-screen flex flex-col transition-all duration-300 md:ml-72 w-full">

        <!-- NAVBAR -->
        <header class="h-24 bg-white/70 backdrop-blur-md border-b border-yellow-100/60 flex items-center justify-between px-6 md:px-10 sticky top-0 z-40 shadow-sm">
            
            <!-- LEFT: Mobile Hamburger & Title -->
            <div class="flex items-center gap-4">
                <button onclick="toggleSidebar()" class="md:hidden w-12 h-12 rounded-2xl bg-amber-100 hover:bg-amber-200 text-amber-950 flex items-center justify-center transition-all shadow-sm">
                    <i class="fas fa-bars text-lg"></i>
                </button>
                <div>
                    <h2 class="text-xl md:text-2xl font-black text-amber-950">
                        @yield('page-title', 'Overview')
                    </h2>
                    <p class="text-[10px] md:text-xs text-amber-700 font-medium">
                        Welcome back to MoodFit 👋
                    </p>
                </div>
            </div>

            <!-- RIGHT: Profile info -->
            <div class="flex items-center gap-4">
                
                <!-- PROFILE BADGE -->
                <div class="flex items-center gap-3 bg-white/95 border border-yellow-100 px-4 py-2 rounded-2xl shadow-sm">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-400 to-yellow-300 flex items-center justify-center font-black text-amber-950 shadow-md">
                        {{ substr(auth()->guard('admin')->check() ? auth()->guard('admin')->user()->name : 'A', 0, 1) }}
                    </div>
                    <div class="hidden sm:block">
                        <h4 class="font-bold text-xs text-amber-950">
                            {{ auth()->guard('admin')->check() ? auth()->guard('admin')->user()->name : 'Administrator' }}
                        </h4>
                        <p class="text-[9px] text-amber-600 font-semibold tracking-wider uppercase">
                            Admin Manager
                        </p>
                    </div>
                </div>

            </div>

        </header>

        <!-- MAIN YIELD -->
        <main class="p-6 md:p-10 flex-1 flex flex-col justify-start">
            
            @if(session('success'))
                <div class="mb-6 bg-emerald-50 border border-emerald-100 text-emerald-700 px-6 py-4 rounded-3xl text-sm shadow-sm flex items-center gap-3 animate-pulse">
                    <i class="fas fa-check-circle text-emerald-500 text-lg"></i>
                    <span class="font-semibold">{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 bg-rose-50 border border-rose-100 text-rose-700 px-6 py-4 rounded-3xl text-sm shadow-sm flex items-center gap-3 animate-pulse">
                    <i class="fas fa-exclamation-circle text-rose-500 text-lg"></i>
                    <span class="font-semibold">{{ session('error') }}</span>
                </div>
            @endif

            @yield('content')

        </main>

        <!-- FOOTER -->
        <footer class="py-6 text-center text-xs text-amber-800/60 font-semibold border-t border-yellow-100/40 bg-white/30 backdrop-blur-md">
            <p>&copy; 2026 MoodFit Fashion. Crafted with Premium Aesthetics.</p>
        </footer>

    </div>

</div>

<!-- Sidebar toggle script -->
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('admin-sidebar');
        if (sidebar.classList.contains('-translate-x-full')) {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('translate-x-0');
        } else {
            sidebar.classList.remove('translate-x-0');
            sidebar.classList.add('-translate-x-full');
        }
    }
</script>

</body>
</html>
