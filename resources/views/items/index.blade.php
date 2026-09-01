@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR ============ -->
        
        <!-- ============ MAIN ============ -->
        <div class="flex-1 min-w-0">

            <!-- HEADER -->
            
            <main class="p-8">

                <h1 class="text-2xl font-extrabold text-[#173863]">Available Items for Loan</h1>
                <p class="text-sm text-slate-400 mt-1">Select an item and submit your loan request easily.</p>

                <!-- FILTERS + SEARCH -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mt-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <button type="button"
                            class="flex items-center gap-2 bg-[#173863] text-white text-sm font-semibold px-4 py-2.5 rounded-xl">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                            </svg>
                            All Items
                        </button>
                        <button type="button"
                            class="flex items-center gap-2 bg-white border border-slate-200 text-slate-600 text-sm font-semibold px-4 py-2.5 rounded-xl">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.129V17.25m6-12v9.75a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>
                            Technology
                        </button>
                        <button type="button"
                            class="flex items-center gap-2 bg-white border border-slate-200 text-slate-600 text-sm font-semibold px-4 py-2.5 rounded-xl">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 9l10.5-3v11.25M9 9v10.5m0-10.5L19.5 6M6 19.5a3 3 0 100-6 3 3 0 000 6zm10.5 3a3 3 0 100-6 3 3 0 000 6z" />
                            </svg>
                            Music
                        </button>
                        <button type="button"
                            class="flex items-center gap-2 bg-white border border-slate-200 text-slate-600 text-sm font-semibold px-4 py-2.5 rounded-xl">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                            </svg>
                            Facilities
                        </button>
                    </div>

                    <form action="#" method="GET"
                        class="flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-4 py-2.5 w-full md:w-72">
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                        <input type="text" name="search" placeholder="Search items..."
                            class="w-full text-sm text-slate-600 placeholder-slate-400 outline-none bg-transparent">
                    </form>
                </div>

                <!-- ITEM GRID -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-6">

                    <!-- Card: HP Chromebook 15 -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 flex flex-col">
                        <div class="h-32 rounded-xl bg-slate-50 flex items-center justify-center mb-3">
                            <svg class="w-16 h-12 text-slate-300" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <rect x="4" y="4" width="40" height="22" rx="2" />
                                <path d="M2 28h44" />
                            </svg>
                        </div>
                        <span
                            class="self-start text-[11px] font-semibold bg-blue-100 text-blue-700 px-2.5 py-1 rounded-full">Technology</span>
                        <p class="text-sm font-bold text-[#173863] mt-2">HP Chromebook 15</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium"><span
                                    class="w-2 h-2 rounded-full bg-green-500"></span>Available</span>
                            <span class="text-xs text-slate-400">10 units</span>
                        </div>
                        <button type="button"
                            class="mt-3 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-2.5 rounded-xl">Borrow</button>
                    </div>

                    <!-- Card: Epson EB X05 Projector -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 flex flex-col">
                        <div class="h-32 rounded-xl bg-slate-50 flex items-center justify-center mb-3">
                            <svg class="w-16 h-12 text-slate-300" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <rect x="4" y="8" width="30" height="16" rx="3" />
                                <circle cx="38" cy="16" r="6" />
                            </svg>
                        </div>
                        <span
                            class="self-start text-[11px] font-semibold bg-blue-100 text-blue-700 px-2.5 py-1 rounded-full">Technology</span>
                        <p class="text-sm font-bold text-[#173863] mt-2">Epson EB X05 Projector</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium"><span
                                    class="w-2 h-2 rounded-full bg-green-500"></span>Available</span>
                            <span class="text-xs text-slate-400">1 unit</span>
                        </div>
                        <button type="button"
                            class="mt-3 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-2.5 rounded-xl">Borrow</button>
                    </div>

                    <!-- Card: DJI Mini 3 Drone -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 flex flex-col">
                        <div class="h-32 rounded-xl bg-slate-50 flex items-center justify-center mb-3">
                            <svg class="w-16 h-12 text-slate-300" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <circle cx="8" cy="8" r="4" />
                                <circle cx="40" cy="8" r="4" />
                                <circle cx="8" cy="24" r="4" />
                                <circle cx="40" cy="24" r="4" />
                                <rect x="18" y="12" width="12" height="8" rx="2" />
                            </svg>
                        </div>
                        <span
                            class="self-start text-[11px] font-semibold bg-blue-100 text-blue-700 px-2.5 py-1 rounded-full">Technology</span>
                        <p class="text-sm font-bold text-[#173863] mt-2">DJI Mini 3 Drone</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium"><span
                                    class="w-2 h-2 rounded-full bg-green-500"></span>Available</span>
                            <span class="text-xs text-slate-400">9 units</span>
                        </div>
                        <button type="button"
                            class="mt-3 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-2.5 rounded-xl">Borrow</button>
                    </div>

                    <!-- Card: Power Strip -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 flex flex-col">
                        <div class="h-32 rounded-xl bg-slate-50 flex items-center justify-center mb-3">
                            <svg class="w-16 h-12 text-slate-300" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <rect x="4" y="12" width="40" height="10" rx="5" />
                            </svg>
                        </div>
                        <span
                            class="self-start text-[11px] font-semibold bg-blue-100 text-blue-700 px-2.5 py-1 rounded-full">Technology</span>
                        <p class="text-sm font-bold text-[#173863] mt-2">Power Strip</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium"><span
                                    class="w-2 h-2 rounded-full bg-green-500"></span>Available</span>
                            <span class="text-xs text-slate-400">10 units</span>
                        </div>
                        <button type="button"
                            class="mt-3 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-2.5 rounded-xl">Borrow</button>
                    </div>

                    <!-- Card: Microphone -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 flex flex-col">
                        <div class="h-32 rounded-xl bg-slate-50 flex items-center justify-center mb-3">
                            <svg class="w-10 h-12 text-slate-300" viewBox="0 0 24 32" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <rect x="8" y="2" width="8" height="16" rx="4" />
                                <path d="M4 16a8 8 0 0016 0M12 24v6M8 30h8" />
                            </svg>
                        </div>
                        <span
                            class="self-start text-[11px] font-semibold bg-purple-100 text-purple-700 px-2.5 py-1 rounded-full">Music</span>
                        <p class="text-sm font-bold text-[#173863] mt-2">Microphone</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium"><span
                                    class="w-2 h-2 rounded-full bg-green-500"></span>Available</span>
                            <span class="text-xs text-slate-400">5 units</span>
                        </div>
                        <button type="button"
                            class="mt-3 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-2.5 rounded-xl">Borrow</button>
                    </div>

                    <!-- Card: Electric Guitar -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 flex flex-col">
                        <div class="h-32 rounded-xl bg-slate-50 flex items-center justify-center mb-3">
                            <svg class="w-10 h-14 text-slate-300" viewBox="0 0 24 34" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <rect x="10" y="2" width="4" height="16" />
                                <ellipse cx="12" cy="26" rx="9" ry="7" />
                            </svg>
                        </div>
                        <span
                            class="self-start text-[11px] font-semibold bg-purple-100 text-purple-700 px-2.5 py-1 rounded-full">Music</span>
                        <p class="text-sm font-bold text-[#173863] mt-2">Electric Guitar</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium"><span
                                    class="w-2 h-2 rounded-full bg-green-500"></span>Available</span>
                            <span class="text-xs text-slate-400">1 unit</span>
                        </div>
                        <button type="button"
                            class="mt-3 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-2.5 rounded-xl">Borrow</button>
                    </div>

                    <!-- Card: Acoustic Guitar -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 flex flex-col">
                        <div class="h-32 rounded-xl bg-slate-50 flex items-center justify-center mb-3">
                            <svg class="w-10 h-14 text-slate-300" viewBox="0 0 24 34" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <rect x="10" y="2" width="4" height="16" />
                                <ellipse cx="12" cy="26" rx="9" ry="7" />
                            </svg>
                        </div>
                        <span
                            class="self-start text-[11px] font-semibold bg-purple-100 text-purple-700 px-2.5 py-1 rounded-full">Music</span>
                        <p class="text-sm font-bold text-[#173863] mt-2">Acoustic Guitar</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium"><span
                                    class="w-2 h-2 rounded-full bg-green-500"></span>Available</span>
                            <span class="text-xs text-slate-400">2 units</span>
                        </div>
                        <button type="button"
                            class="mt-3 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-2.5 rounded-xl">Borrow</button>
                    </div>

                    <!-- Card: VCon Room -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 flex flex-col">
                        <div class="h-32 rounded-xl bg-slate-200 flex items-center justify-center mb-3">
                            <svg class="w-14 h-12 text-slate-400" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <rect x="4" y="6" width="40" height="22" rx="2" />
                            </svg>
                        </div>
                        <span
                            class="self-start text-[11px] font-semibold bg-orange-100 text-orange-700 px-2.5 py-1 rounded-full">Facility</span>
                        <p class="text-sm font-bold text-[#173863] mt-2">VCon Room</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium"><span
                                    class="w-2 h-2 rounded-full bg-green-500"></span>Available</span>
                        </div>
                        <button type="button"
                            class="mt-3 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-2.5 rounded-xl">Borrow</button>
                    </div>
                </div>

                <!-- PAGINATION -->
                <div class="flex items-center justify-center gap-2 mt-8">
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#173863] text-white text-sm font-semibold">1</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500 text-sm font-semibold">2</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500 text-sm font-semibold">3</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500 text-sm font-semibold">4</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500 text-sm font-semibold">5</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div>

            </main>
        </div>
    </div>
@endsection