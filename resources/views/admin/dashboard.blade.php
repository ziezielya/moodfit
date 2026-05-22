<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoodFit - Admin Dashboard</title>

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
        .custom-scroll::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scroll::-webkit-scrollbar-thumb {
            background: rgba(252, 211, 77, 0.4);
            border-radius: 10px;
        }
    </style>
</head>

<body class="min-h-screen text-gray-800 antialiased overflow-x-hidden">

    <div class="flex min-h-screen relative">

        <!-- SIDEBAR -->
        <aside id="dashboard-sidebar" class="w-72 bg-white/80 backdrop-blur-xl border-r border-yellow-100 shadow-2xl fixed left-0 top-0 h-screen z-50 transition-all duration-300 -translate-x-full md:translate-x-0 flex flex-col justify-between">
            
            <div>
                <!-- Logo -->
                <div class="px-8 py-8 border-b border-yellow-100 flex items-center justify-between">
                    <div>
                        <h1 class="text-4xl font-black bg-gradient-to-r from-amber-600 to-yellow-500 bg-clip-text text-transparent tracking-wider">
                            MoodFit
                        </h1>
                        <p class="text-xs text-amber-600 font-bold uppercase tracking-widest mt-1">
                            Admin Dashboard
                        </p>
                    </div>
                    <!-- Mobile Close -->
                    <button onclick="toggleSidebar()" class="md:hidden w-10 h-10 rounded-xl bg-amber-50 hover:bg-amber-100 text-amber-900 flex items-center justify-center transition-all">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Menu -->
                <nav class="p-5 space-y-2 overflow-y-auto custom-scroll max-h-[calc(100vh-180px)]">
                    <p class="text-[10px] uppercase tracking-[3px] text-amber-600 font-bold mb-4 px-4 opacity-75">
                        Main Menu
                    </p>

                    <a href="{{ url('/admin/dashboard') }}"
                       class="flex items-center gap-4 px-4 py-3.5 rounded-2xl bg-gradient-to-r from-yellow-300 via-amber-200 to-yellow-100 text-amber-950 font-bold shadow-md shadow-amber-200/50">
                        <div class="w-10 h-10 rounded-xl bg-white text-amber-600 shadow-sm flex items-center justify-center">
                            <i class="fas fa-chart-pie text-sm"></i>
                        </div>
                        <div>
                            <h3 class="text-sm">Dashboard</h3>
                            <p class="text-[10px] text-amber-800 opacity-75">Overview admin</p>
                        </div>
                    </a>

                    <a href="{{ url('/admin/produk') }}"
                       class="flex items-center gap-4 px-4 py-3.5 rounded-2xl hover:bg-yellow-50/60 text-gray-600 hover:text-amber-950 font-medium transition-all duration-200 hover:translate-x-1">
                        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center">
                            <i class="fas fa-tshirt text-sm"></i>
                        </div>
                        <div>
                            <h3 class="text-sm">Produk</h3>
                            <p class="text-[10px] text-gray-400">Kelola produk</p>
                        </div>
                    </a>

                    <a href="{{ url('/admin/pembayaran') }}"
                       class="flex items-center gap-4 px-4 py-3.5 rounded-2xl hover:bg-yellow-50/60 text-gray-600 hover:text-amber-950 font-medium transition-all duration-200 hover:translate-x-1">
                        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center">
                            <i class="fas fa-credit-card text-sm"></i>
                        </div>
                        <div>
                            <h3 class="text-sm">Pembayaran</h3>
                            <p class="text-[10px] text-gray-400">Data transaksi</p>
                        </div>
                    </a>
                </nav>
            </div>

            <!-- Logout -->
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

        <!-- CONTENT -->
        <div class="flex-1 min-h-screen flex flex-col md:ml-72 transition-all duration-300 w-full">

            <!-- Topbar -->
            <header class="h-24 bg-white/70 backdrop-blur-md border-b border-yellow-100/60 flex items-center justify-between px-6 md:px-10 sticky top-0 z-40 shadow-sm">
                
                <div class="flex items-center gap-4">
                    <button onclick="toggleSidebar()" class="md:hidden w-12 h-12 rounded-2xl bg-amber-100 hover:bg-amber-200 text-amber-950 flex items-center justify-center transition-all shadow-sm">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                    <div>
                        <h2 class="text-xl md:text-2xl font-black text-amber-950">
                            Dashboard
                        </h2>
                        <p class="text-[10px] md:text-xs text-amber-700 font-medium">
                            Welcome back, Admin 👋
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="hidden sm:block text-right">
                        <h3 class="font-bold text-xs text-amber-950">Admin MoodFit</h3>
                        <p class="text-[9px] text-amber-600 font-semibold uppercase tracking-wider">Fashion Manager</p>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-amber-400 to-yellow-300 flex items-center justify-center text-amber-950 font-black text-lg shadow-md">
                        A
                    </div>
                </div>

            </header>

            <main class="p-6 md:p-10 flex-1 flex flex-col justify-start">

                <!-- Stats Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">

                    <!-- Card 1 -->
                    <div class="bg-white/80 backdrop-blur-md p-6 rounded-[32px] shadow-md border border-yellow-100/80 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex items-center justify-between group">
                        <div>
                            <p class="text-xs font-semibold text-amber-700/80 uppercase tracking-wider">
                                Total Produk
                            </p>
                            <h3 class="text-3xl font-black mt-2 text-amber-950 tracking-tight group-hover:scale-105 transition-all">
                                120
                            </h3>
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 group-hover:bg-gradient-to-br group-hover:from-amber-400 group-hover:to-yellow-300 text-amber-600 group-hover:text-amber-950 flex items-center justify-center text-2xl shadow-sm transition-all duration-300">
                            <i class="fas fa-tags"></i>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white/80 backdrop-blur-md p-6 rounded-[32px] shadow-md border border-yellow-100/80 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex items-center justify-between group">
                        <div>
                            <p class="text-xs font-semibold text-amber-700/80 uppercase tracking-wider">
                                Total Customer
                            </p>
                            <h3 class="text-3xl font-black mt-2 text-amber-950 tracking-tight group-hover:scale-105 transition-all">
                                85
                            </h3>
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 group-hover:bg-gradient-to-br group-hover:from-amber-400 group-hover:to-yellow-300 text-amber-600 group-hover:text-amber-950 flex items-center justify-center text-2xl shadow-sm transition-all duration-300">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white/80 backdrop-blur-md p-6 rounded-[32px] shadow-md border border-yellow-100/80 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex items-center justify-between group">
                        <div>
                            <p class="text-xs font-semibold text-amber-700/80 uppercase tracking-wider">
                                Total Order
                            </p>
                            <h3 class="text-3xl font-black mt-2 text-amber-950 tracking-tight group-hover:scale-105 transition-all">
                                230
                            </h3>
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 group-hover:bg-gradient-to-br group-hover:from-amber-400 group-hover:to-yellow-300 text-amber-600 group-hover:text-amber-950 flex items-center justify-center text-2xl shadow-sm transition-all duration-300">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                    </div>

                </div>

                <!-- Recent Products Table Section -->
                <div class="bg-white/80 backdrop-blur-md rounded-[32px] shadow-lg border border-yellow-100 p-6 md:p-8">

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                        <div>
                            <h3 class="text-xl md:text-2xl font-black text-amber-950 tracking-tight">
                                Produk Terbaru
                            </h3>
                            <p class="text-xs text-amber-700/80 font-medium">
                                Ikhtisar item busana terbaru yang diunggah ke sistem.
                            </p>
                        </div>

                        <a href="{{ url('/admin/produk/create') }}" class="bg-gradient-to-r from-amber-400 via-yellow-400 to-amber-500 hover:from-amber-500 hover:to-yellow-500 text-amber-950 font-black px-6 py-3.5 rounded-2xl shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 text-sm text-center flex items-center justify-center gap-2">
                            <i class="fas fa-plus-circle text-xs"></i>
                            <span>Tambah Produk</span>
                        </a>
                    </div>

                    <div class="overflow-x-auto rounded-2xl border border-yellow-100/50">
                        <table class="w-full min-w-[600px] border-collapse">
                            <thead>
                                <tr class="bg-yellow-50/50 text-left border-b border-yellow-100">
                                    <th class="px-6 py-4 text-xs font-black tracking-wider uppercase text-amber-900">Produk</th>
                                    <th class="px-6 py-4 text-xs font-black tracking-wider uppercase text-amber-900">Kategori</th>
                                    <th class="px-6 py-4 text-xs font-black tracking-wider uppercase text-amber-900">Harga</th>
                                    <th class="px-6 py-4 text-xs font-black tracking-wider uppercase text-amber-900">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-yellow-50/40 bg-white/40">
                                <tr class="hover:bg-yellow-50/30 transition-all duration-200">
                                    <td class="px-6 py-4 font-bold text-amber-950">Hoodie Oversize</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">Fashion</td>
                                    <td class="px-6 py-4 text-sm font-bold text-amber-950">Rp 250.000</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 px-3 py-1.5 rounded-xl text-xs font-bold shadow-sm border border-emerald-100">
                                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                                            Active
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-yellow-50/30 transition-all duration-200">
                                    <td class="px-6 py-4 font-bold text-amber-950">T-Shirt Vintage</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">Fashion</td>
                                    <td class="px-6 py-4 text-sm font-bold text-amber-950">Rp 150.000</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1.5 bg-amber-50 text-amber-700 px-3 py-1.5 rounded-xl text-xs font-bold shadow-sm border border-amber-100">
                                            <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                            Pending
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-yellow-50/30 transition-all duration-200">
                                    <td class="px-6 py-4 font-bold text-amber-950">Cargo Pants</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">Fashion</td>
                                    <td class="px-6 py-4 text-sm font-bold text-amber-950">Rp 320.000</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 px-3 py-1.5 rounded-xl text-xs font-bold shadow-sm border border-emerald-100">
                                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                                            Active
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </main>

            <!-- Footer -->
            <footer class="py-6 text-center text-xs text-amber-800/60 font-semibold border-t border-yellow-100/40 bg-white/30 backdrop-blur-md">
                <p>&copy; 2026 MoodFit Fashion. Crafted with Premium Aesthetics.</p>
            </footer>

        </div>

    </div>

    <!-- Toggle Sidebar JS -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('dashboard-sidebar');
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