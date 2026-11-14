<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ImmaLend - User Login' }}</title>

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

    <!-- Main Login Card -->
    <div
        class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl w-full max-w-5xl flex overflow-hidden min-h-[600px] p-4 gap-4">

        <!-- Left Side: Banner -->
        <div class="hidden md:flex w-1/2 rounded-2xl overflow-hidden relative">
            <img src="{{ asset('images/loginuser.png') }}" alt="ImmaLend Banner"
                class="w-full h-full object-cover object-center">
        </div>

        <!-- Right Side: Login Form -->
        <div class="w-full md:w-1/2 flex flex-col justify-center px-8 md:px-12 py-6 relative">

            <!-- Logo -->
            <div class="flex items-center justify-center gap-2 mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="ImmaLend Logo" class="h-7 w-auto object-contain">
                <span class="text-xl font-bold text-[#173863] tracking-tight">
                    ImmaLend
                </span>
            </div>

            <!-- Header -->
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-1">
                    Welcome Back!
                </h2>
                <p class="text-xs text-gray-400">
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
            <form action="{{ route('login.store') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email -->
                <div class="relative border-b border-gray-300 focus-within:border-[#173863] pb-1">
                    <label for="email" class="block text-xs text-gray-600 mb-1">
                        Email
                    </label>

                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        placeholder="Enter your email" autocomplete="email" required
                        class="w-full bg-transparent outline-none text-sm text-gray-800 py-1">
                </div>

                <!-- Password -->
                <div class="relative border-b border-gray-300 focus-within:border-[#173863] pb-1">
                    <label for="password" class="block text-xs text-gray-600 mb-1">
                        Password
                    </label>

                    <div class="flex items-center">
                        <input type="password" id="password" name="password" placeholder="Enter your password"
                            autocomplete="current-password" required
                            class="w-full bg-transparent outline-none text-sm text-gray-800 py-1">

                        <button type="button" id="togglePassword"
                            class="text-gray-500 hover:text-[#173863] focus:outline-none" aria-label="Show password">
                            <i class="fa-regular fa-eye text-sm" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center text-xs text-gray-500 pt-1">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}
                            class="rounded border-gray-300 text-[#173863] focus:ring-0">
                        <span>Remember me</span>
                    </label>
                </div>

                <!-- Login Button -->
                <button type="submit"
                    class="w-full bg-[#173863] hover:bg-[#10294a] text-white font-medium py-3 rounded-full text-sm transition duration-200 shadow-md mt-2">
                    Log In
                </button>

            </form>

        </div>
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