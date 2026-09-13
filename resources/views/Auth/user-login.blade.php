<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ImmaLend</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Inter & FontAwesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body 
    class="min-h-screen flex items-center justify-center p-4 bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/bglogin.png') }}');"
>

    <!-- Container Utama Card Login -->
    <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl w-full max-w-5xl flex overflow-hidden min-h-[600px] p-4 gap-4">
        
        <!-- SISI KIRI: Banner Informasi / Ilustrasi Gambar -->
        <div class="hidden md:flex w-1/2 rounded-2xl overflow-hidden relative">
            <img 
                src="{{ asset('images/loginuser.png') }}" 
                alt="ImmaLend Banner" 
                class="w-full h-full object-cover object-center"
            >
        </div>

        <!-- SISI KANAN: Form Login -->
        <div class="w-full md:w-1/2 flex flex-col justify-center px-8 md:px-12 py-6 relative">
            
            <!-- Logo Brand & Nama (Sesuai Referensi Gambar) -->
            <div class="flex items-center justify-center gap-2 mb-6">
                <img 
                    src="{{ asset('images/logo.png') }}" 
                    alt="ImmaLend Logo" 
                    class="h-7 w-auto object-contain"
                >
                <span class="text-xl font-bold text-[#0d2b6b] tracking-tight">ImmaLend</span>
            </div>

            <!-- Header Form -->
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-1">Welcome Back!</h2>
                <p class="text-xs text-gray-400">Enter Your Details below</p>
            </div>

            <!-- Notifikasi Error dari Controller (Jika login gagal) -->
            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-100 text-red-700 text-xs rounded-lg border border-red-200">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- Form Autentikasi -->
            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Input Email -->
                <div class="relative border-b border-gray-300 focus-within:border-blue-600 pb-1">
                    <label for="email" class="block text-xs text-gray-600 mb-1">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}"
                        required 
                        class="w-full bg-transparent outline-none text-sm text-gray-800 py-1"
                    >
                </div>

                <!-- Input Password -->
                <div class="relative border-b border-gray-300 focus-within:border-blue-600 pb-1">
                    <label for="password" class="block text-xs text-gray-600 mb-1">Password</label>
                    <div class="flex items-center">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required 
                            class="w-full bg-transparent outline-none text-sm text-gray-800 py-1"
                        >
                        <button type="button" id="togglePassword" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                            <i class="fa-regular fa-eye text-sm" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between text-xs text-gray-500 pt-1">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600 focus:ring-0">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="hover:underline text-gray-500">Forgot password?</a>
                </div>

                <!-- Tombol Log In -->
                <button 
                    type="submit" 
                    class="w-full bg-[#0d2b6b] hover:bg-[#0a2152] text-white font-medium py-3 rounded-full text-sm transition duration-200 shadow-md mt-2"
                >
                    Log In
                </button>

                <!-- Tombol Login dengan Google -->
                <a 
                    href="#" 
                    class="w-full border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium py-2.5 rounded-full text-sm flex items-center justify-center gap-2 transition duration-200 mt-3"
                >
                    <svg class="w-4 h-4" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                    </svg>
                    Log in with Google
                </a>
            </form>

        </div>
    </div>

    <!-- Script Toggle Password View -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle ikon mata (terbuka/tertutup)
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>