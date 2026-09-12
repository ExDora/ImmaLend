<aside
    class="w-[260px] shrink-0 fixed inset-y-0 left-0 h-screen overflow-y-auto bg-[#EAEEFF] border-r border-[#C0CADD] flex flex-col">

    <!-- Logo & Brand -->
    <div class="flex flex-col items-center pt-8">
        <div class="w-16 h-20 flex items-center justify-center">
            <img src="{{ asset('images/immalend-logo.png') }}" alt="ImmaLend Logo" class="w-full h-full object-contain">
        </div>

        <div class="text-center mt-3">
            <p class="text-2xl font-extrabold text-[#0B3478] leading-none">ImmaLend</p>
            <p class="text-xs font-medium text-[#0B3478] mt-2">School Inventory Lending</p>
        </div>
    </div>


    <!-- Navigation -->
    <nav class="px-4 mt-8 space-y-1.5">

        <!-- Inventory -->
        <a href="{{ route('inventory') }}"
            class="flex items-center gap-3 px-4 py-2.5 rounded-xl transition
                {{ request()->routeIs('inventory') || request()->routeIs('items.*') ? 'bg-[#0B3478] text-white' : 'text-[#0B3478] hover:bg-white/60' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16M8 6v.01M8 12v.01M8 18v.01" />
            </svg>
            <span class="text-sm font-medium">Inventory</span>
        </a>


        <!-- Borrowings Requests -->
        <a href="{{ route('lendings.admin-index') }}"
            class="flex items-center gap-3 px-4 py-2.5 rounded-xl transition
                {{ request()->routeIs('lendings.admin-index') ? 'bg-[#0B3478] text-white' : 'text-[#0B3478] hover:bg-white/60' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 3.75h9l4 4v12.5A1.75 1.75 0 0 1 17.25 22h-11A1.75 1.75 0 0 1 4.5 20.25V5.5A1.75 1.75 0 0 1 6 3.75Z" />
                <path stroke-linecap="round" d="M8 11h8M8 15h6M8 7.5h1" />
            </svg>
            <span class="text-sm font-medium">Borrowings Requests</span>
        </a>


        <!-- Return Confirmation -->
        <a href="{{ route('admin.return-confirmation') }}"
            class="flex items-center gap-3 px-4 py-2.5 rounded-xl transition
                {{ request()->routeIs('admin.return-confirmation') ? 'bg-[#0B3478] text-white' : 'text-[#0B3478] hover:bg-white/60' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <circle cx="12" cy="12" r="9" />
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.5 12.5 2.5 2.5 5-5" />
            </svg>
            <span class="text-sm font-medium">Return Confirmation</span>
        </a>


        <!-- Borrowing History (route belum dibuat, sementara "#") -->
        <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-xl transition text-[#0B3478] hover:bg-white/60">
            <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 4.5 3.5 7M3.5 7H7M3.5 7a9 9 0 1 1-1 6" />
            </svg>
            <span class="text-sm font-medium">Borrowing History</span>
        </a>


        <!-- Users -->
        <a href="{{ route('users.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl transition
                {{ request()->routeIs('users.*') ? 'bg-[#0B3478] text-white' : 'text-[#0B3478] hover:bg-white/60' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17 20v-1a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v1M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm8 9v-1a4 4 0 0 0-3-3.87M15 3.13A4 4 0 0 1 15 10.87" />
            </svg>
            <span class="text-sm font-medium">Users</span>
        </a>

    </nav>


    <!-- Help -->
    <div class="px-4 pb-6 mt-auto">
        <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-[#0B3478] hover:bg-white/60 transition">
            <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <circle cx="12" cy="12" r="9" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.75 9a2.25 2.25 0 1 1 3.96 1.48c-.78.87-1.71 1.27-1.71 2.52" />
                <path stroke-linecap="round" d="M12 16.5h.01" />
            </svg>
            <span class="text-sm font-medium">Help</span>
        </a>
    </div>

</aside>