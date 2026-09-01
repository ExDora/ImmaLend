<aside class="w-[300px] shrink-0 min-h-screen bg-[#EAEEFF] border-r border-[#C0CADD] flex flex-col">

    <!-- Logo & Brand -->
    <div class="flex flex-col items-center pt-20">

        <!-- Logo -->
        <div class="w-32 h-32 flex items-center justify-center">
            <img src="{{ asset('images/immalend-logo.png') }}" alt="ImmaLend Logo" class="w-full h-full object-contain">
        </div>

        <!-- Brand Name -->
        <div class="text-center mt-5">
            <p class="text-[38px] font-extrabold text-[#0B3478] leading-none">
                ImmaLend
            </p>

            <p class="text-[15px] font-medium text-[#0B3478] mt-3">
                School Inventory Lending
            </p>
        </div>

    </div>


    <!-- Navigation -->
    <nav class="px-5 mt-10 space-y-2">

        <!-- Home -->
        <a href="#" class="flex items-center gap-5 px-5 py-4 rounded-xl bg-[#0B3478] text-white">
            <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 3.5 3 10v10h6v-6h6v6h6V10l-9-6.5Z" />
            </svg>

            <span class="text-base font-medium">
                Home
            </span>
        </a>


        <!-- List of Items -->
        <a href="#"
            class="flex items-center gap-5 px-5 py-4 rounded-xl text-[#0B3478] hover:bg-white/60 transition">
            <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16M8 6v.01M8 12v.01M8 18v.01" />
            </svg>

            <span class="text-base font-medium">
                List of Items
            </span>
        </a>


        <!-- My Borrowings -->
        <a href="#"
            class="flex items-center gap-5 px-5 py-4 rounded-xl text-[#0B3478] hover:bg-white/60 transition">
            <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 3.75h9l4 4v12.5A1.75 1.75 0 0 1 17.25 22h-11A1.75 1.75 0 0 1 4.5 20.25V5.5A1.75 1.75 0 0 1 6 3.75Z" />

                <path stroke-linecap="round" d="M8 11h8M8 15h6M8 7.5h1" />
            </svg>

            <span class="text-base font-medium">
                My Borrowings
            </span>
        </a>


        <!-- Borrowings History -->
        <a href="#" class="flex items-center gap-5 px-5 py-4 rounded-xl text-[#0B3478] hover:bg-white/60 transition">
            <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />

                <path stroke-linecap="round" stroke-linejoin="round" d="M5 4.5 3.5 7M3.5 7H7M3.5 7a9 9 0 1 1-1 6" />
            </svg>

            <span class="text-base font-medium">
                Borrowings History
            </span>
        </a>

    </nav>


    <!-- Help -->
    <div class="px-5 pb-10 mt-auto">

        <a href="#" class="flex items-center gap-5 px-5 py-4 rounded-xl text-[#0B3478] hover:bg-white/60 transition">
            <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <circle cx="12" cy="12" r="9" />

                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.75 9a2.25 2.25 0 1 1 3.96 1.48c-.78.87-1.71 1.27-1.71 2.52" />

                <path stroke-linecap="round" d="M12 16.5h.01" />
            </svg>

            <span class="text-base font-medium">
                Help
            </span>
        </a>

    </div>

</aside>