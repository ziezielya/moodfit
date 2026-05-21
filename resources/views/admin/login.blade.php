<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoodFit - Admin Login</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;950&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D6;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-4 sm:p-6 overflow-hidden relative">

    <!-- Background decorative blur blobs -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-yellow-300 opacity-40 blur-3xl rounded-full animate-pulse"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-amber-400 opacity-30 blur-3xl rounded-full animate-pulse" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-yellow-200/20 opacity-30 blur-3xl rounded-full"></div>

    <!-- MAIN CARD WRAPPER -->
    <div class="relative z-10 w-full max-w-5xl bg-white/70 backdrop-blur-2xl shadow-2xl rounded-[40px] border border-white/50 overflow-hidden grid md:grid-cols-12 min-h-[600px] transition-all duration-500">

        <!-- LEFT SIDE: Branding Illustration -->
        <div class="hidden md:flex md:col-span-5 flex-col justify-between bg-gradient-to-br from-amber-400 to-yellow-500 p-12 text-amber-950 relative overflow-hidden">
            
            <!-- Graphic details -->
            <div class="absolute -right-16 -top-16 w-48 h-48 bg-white/10 rounded-full blur-xl"></div>
            <div class="absolute -left-12 bottom-20 w-36 h-36 bg-amber-300/30 rounded-full blur-md"></div>
            
            <div class="relative z-10">
                <h1 class="text-4xl font-black tracking-widest uppercase">
                    MoodFit
                </h1>
                <p class="text-xs uppercase tracking-widest text-amber-900 font-extrabold mt-1">
                    Fashion Platform
                </p>
            </div>

            <div class="relative z-10 my-8">
                <h2 class="text-3xl font-black leading-tight text-amber-950">
                    Aesthetics Meet Management
                </h2>
                <p class="mt-4 text-sm text-amber-900/90 font-medium leading-relaxed">
                    Kelola produk busana, pantau pembayaran dari customer, dan atur katalog fashion Anda dalam satu dasbor premium yang intuitif.
                </p>
            </div>

            <div class="relative z-10 flex items-center gap-2">
                <div class="w-12 h-1.5 bg-amber-950 rounded-full"></div>
                <div class="w-3 h-1.5 bg-amber-950/40 rounded-full"></div>
                <div class="w-3 h-1.5 bg-amber-950/40 rounded-full"></div>
            </div>

        </div>

        <!-- RIGHT SIDE: Login Form -->
        <div class="col-span-12 md:col-span-7 p-8 sm:p-14 flex flex-col justify-center bg-white/40">
            
            <div class="mb-8">
                <div class="md:hidden flex items-center gap-2 mb-4">
                    <span class="text-2xl font-black tracking-widest text-amber-600">MOODFIT</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-black text-amber-950 tracking-tight">
                    Admin Access
                </h2>
                <p class="text-amber-700/80 text-sm font-medium mt-2">
                    Selamat datang kembali. Silakan masuk ke akun Administrator Anda.
                </p>
            </div>

            <!-- Error Notifications -->
            @if(session('error'))
                <div class="mb-6 bg-red-50 border border-red-100 text-red-600 px-5 py-4 rounded-2xl text-xs sm:text-sm font-semibold shadow-sm flex items-center gap-2">
                    <i class="fas fa-exclamation-circle text-red-500"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 bg-red-50 border border-red-100 text-red-600 px-5 py-4 rounded-2xl text-xs sm:text-sm font-semibold shadow-sm flex items-center gap-2">
                    <i class="fas fa-exclamation-circle text-red-500"></i>
                    <span>{{ $errors->first('email') ?? 'Email atau password salah. Silakan coba lagi.' }}</span>
                </div>
            @endif

            <!-- Form -->
            <form action="/admin/login" method="POST" class="space-y-6">
                @csrf

                <!-- Email Input -->
                <div class="space-y-2">
                    <label class="block text-xs font-black tracking-wider uppercase text-amber-900/80">
                        Email Address
                    </label>
                    <div class="relative">
                        <span class="absolute left-5 top-1/2 -translate-y-1/2 text-amber-500/70">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input
                            type="email"
                            name="email"
                            placeholder="admin@gmail.com"
                            class="w-full pl-12 pr-5 py-4 rounded-2xl border border-yellow-100 bg-white/80 focus:bg-white text-gray-800 font-medium placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-yellow-300/50 focus:border-yellow-400 transition-all duration-300"
                            required
                        >
                    </div>
                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label class="block text-xs font-black tracking-wider uppercase text-amber-900/80">
                            Security Password
                        </label>
                    </div>
                    <div class="relative">
                        <span class="absolute left-5 top-1/2 -translate-y-1/2 text-amber-500/70">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            class="w-full pl-12 pr-5 py-4 rounded-2xl border border-yellow-100 bg-white/80 focus:bg-white text-gray-800 font-medium placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-yellow-300/50 focus:border-yellow-400 transition-all duration-300"
                            required
                        >
                    </div>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-amber-400 via-yellow-400 to-amber-500 hover:from-amber-500 hover:to-yellow-500 text-amber-950 font-black py-4 rounded-2xl shadow-xl shadow-amber-300/30 hover:shadow-amber-400/40 transition-all duration-300 hover:scale-[1.01] active:scale-[0.99] flex items-center justify-center gap-2"
                >
                    <span>Masuk ke Dasbor</span>
                    <i class="fas fa-arrow-right text-xs"></i>
                </button>
            </form>

        </div>

    </div>

</body>
</html>