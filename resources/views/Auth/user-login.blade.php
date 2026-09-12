<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImmaLend — User Login</title>
    <!-- Tailwind utility classes only. Tidak ada <script> / JavaScript di file ini. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Poppins', ui-sans-serif, system-ui, sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-slate-100 flex items-center justify-center p-6">

    <div class="w-full max-w-6xl bg-slate-100 rounded-3xl grid grid-cols-1 lg:grid-cols-2 gap-10 items-center p-4">

        <!-- LEFT ILLUSTRATION PANEL -->
        <div class="relative bg-white rounded-3xl p-10 overflow-hidden">
            <svg class="absolute top-8 left-8 w-5 h-5 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2l2 2-2 2-2-2z m0 16l2 2-2 2-2-2z M2 12l2-2 2 2-2 2z m16 0l2-2 2 2-2 2z" />
            </svg>
            <svg class="absolute top-10 right-14 w-16 h-2 text-blue-300 rotate-12" fill="none" viewBox="0 0 64 8"
                stroke="currentColor" stroke-width="4">
                <path stroke-linecap="round" d="M2 6L62 2" />
            </svg>
            <div class="absolute bottom-24 right-10 w-4 h-4 rounded-full bg-blue-200"></div>

            <h1 class="text-4xl font-extrabold text-[#173863] leading-snug relative">Borrow what you need,<br>when you
                need it.</h1>
            <p class="text-sm text-slate-400 mt-4 max-w-sm relative">ImmaLend makes it easy to find, request, and manage
                the items you need for school activities.</p>

            <div class="mt-10 flex items-end gap-4 relative">
                <svg class="w-28 h-20 text-slate-700" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                    stroke-width="1.5">
                    <rect x="2" y="4" width="30" height="20" rx="2" />
                    <path d="M0 26h34" />
                </svg>
                <svg class="w-16 h-12 text-slate-500" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                    stroke-width="1.5">
                    <rect x="4" y="8" width="30" height="16" rx="3" />
                    <circle cx="38" cy="16" r="6" />
                </svg>
                <svg class="w-16 h-12 text-slate-400" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                    stroke-width="1.5">
                    <circle cx="8" cy="8" r="4" />
                    <circle cx="40" cy="8" r="4" />
                    <circle cx="8" cy="24" r="4" />
                    <circle cx="40" cy="24" r="4" />
                    <rect x="18" y="12" width="12" height="8" rx="2" />
                </svg>
            </div>

            <svg class="absolute bottom-6 left-10 w-6 h-2 text-blue-300" fill="none" viewBox="0 0 24 8"
                stroke="currentColor" stroke-width="4">
                <path stroke-linecap="round" d="M2 4h20" />
            </svg>
        </div>

        <!-- RIGHT LOGIN PANEL -->
        <div class="relative px-4 lg:px-10 py-10">

            <p
                class="absolute inset-0 flex items-center justify-center text-6xl font-extrabold text-slate-200/60 select-none pointer-events-none leading-none text-center">
                KRISTEN<br>IMMANUEL
            </p>

            <div class="relative">
                <div class="flex items-center justify-center gap-2 mb-6">
                    <svg class="w-6 h-6 text-[#173863]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>
                    <span class="text-lg font-extrabold text-[#173863]">ImmaLend</span>
                </div>

                <h1 class="text-4xl font-extrabold text-slate-900 text-center">Welcome Back!</h1>
                <p class="text-sm text-slate-400 text-center mt-2 mb-8">Enter Your Details below</p>

                <form action="" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm text-slate-500 mb-1">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full border-0 border-b border-slate-300 focus:border-[#173863] outline-none py-2 text-sm text-slate-700 bg-transparent">
                    </div>

                    <div>
                        <label for="password" class="block text-sm text-slate-500 mb-1">Password</label>
                        <div class="flex items-center border-b border-slate-300 focus-within:border-[#173863]">
                            <input type="password" id="password" name="password"
                                class="w-full border-0 outline-none py-2 text-sm text-slate-700 bg-transparent">
                            <svg class="w-5 h-5 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2 text-slate-500">
                            <input type="checkbox" name="remember"
                                class="w-4 h-4 rounded border-slate-300 text-teal-700">
                            Remember me
                        </label>
                        <a href="" class="text-slate-500 hover:text-teal-700">Forgot password?</a>
                    </div>

                    <button type="submit"
                        class="w-full bg-teal-800 hover:bg-teal-900 text-white text-sm font-semibold py-3.5 rounded-xl">Log
                        In</button>

                    <button type="button"
                        class="w-full flex items-center justify-center gap-3 border border-slate-200 text-slate-700 text-sm font-semibold py-3.5 rounded-xl bg-white">
                        <svg class="w-5 h-5" viewBox="0 0 48 48">
                            <path fill="#FFC107"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                            <path fill="#FF3D00"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                            <path fill="#4CAF50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                            <path fill="#1976D2"
                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                        </svg>
                        Log in with Google
                    </button>
                </form>
            </div>
        </div>

    </div>

</body>

</html>