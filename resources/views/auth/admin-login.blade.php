<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>{{ $title ?? 'ImmaLend - Admin Login' }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-4 bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/bglogin.png') }}');">

    <!-- Admin Login Card -->
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-[440px] px-8 sm:px-10 py-10">

        <!-- Logo -->
        <div class="flex items-center justify-center gap-2 mb-4">
            <img src="{{ asset('images/logo.png') }}" alt="ImmaLend Logo" class="h-7 w-auto object-contain">
            <span class="text-xl font-bold text-[#173863] tracking-tight">
                ImmaLend
            </span>
        </div>

        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-medium text-gray-900 mb-1">
                Welcome Back!
            </h2>
            <p class="text-xs text-gray-500">
                Enter your details below
            </p>
        </div>

        <!-- Error Notification -->
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 text-xs rounded-lg border border-red-200">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('admin.login.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Email -->
            <div class="border-b border-gray-400 focus-within:border-[#173863] pb-1">
                <label for="email" class="block text-sm text-gray-700 mb-1">
                    Email
                </label>

                <input type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="email" required
                    autofocus class="w-full bg-transparent outline-none text-sm text-gray-800 py-1">
            </div>

            <!-- Password -->
            <div class="border-b border-gray-400 focus-within:border-[#173863] pb-1">
                <label for="password" class="block text-sm text-gray-700 mb-1">
                    Password
                </label>

                <div class="flex items-center">
                    <input type="password" id="password" name="password" autocomplete="current-password" required
                        class="w-full bg-transparent outline-none text-sm text-gray-800 py-1">

                    <button type="button" id="togglePassword"
                        class="text-gray-700 hover:text-[#173863] focus:outline-none" aria-label="Show password">
                        <i class="fa-regular fa-eye text-sm" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between text-xs text-gray-500">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}
                        class="rounded border-gray-300 text-[#173863] focus:ring-0">
                    <span>Remember me</span>
                </label>

                {{-- TODO: ganti href="#" dengan route reset password setelah fitur itu dibuat --}}
                <a href="#" class="hover:text-[#173863] hover:underline">
                    Forgot password?
                </a>
            </div>

            <!-- Login Button -->
            <button type="submit"
                class="w-full bg-[#173863] hover:bg-[#10294a] text-white font-medium py-3 rounded-full text-sm transition duration-200 shadow-md">
                Log In
            </button>

        </form>
    </div>

    <!-- Toggle Password Script -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function () {
            const isPassword = passwordInput.type === 'password';

            passwordInput.type = isPassword ? 'text' : 'password';

            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');

            togglePassword.setAttribute(
                'aria-label',
                isPassword ? 'Hide password' : 'Show password'
            );
        });
    </script>

</body>

</html>