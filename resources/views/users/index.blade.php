@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR ============ -->

        <!-- ============ MAIN ============ -->
        <div class="flex-1 min-w-0">

            <!-- HEADER -->

            <main class="p-8 space-y-6">

                <!-- STAT CARDS -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 flex items-start gap-4">
                        <div
                            class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6h12M8.25 12h12M8.25 18h12M3.75 6h.008v.008H3.75V6zm0 6h.008v.008H3.75V12zm0 6h.008v.008H3.75V18z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-[#173863]">Total Items</p>
                            <p class="text-3xl font-extrabold text-slate-800">126</p>
                            <p class="text-xs text-slate-400">All available items</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 flex items-start gap-4">
                        <div
                            class="w-11 h-11 rounded-xl bg-green-50 text-green-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-[#173863]">Currently Borrowed</p>
                            <p class="text-3xl font-extrabold text-slate-800">2</p>
                            <p class="text-xs text-slate-400">Items you are using</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 flex items-start gap-4">
                        <div
                            class="w-11 h-11 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.3 0a2.251 2.251 0 015.3 0m-5.3 0c-.31.31-.5.738-.5 1.211V6a.75.75 0 00.75.75h3.5A.75.75 0 0015 6V5.047c0-.473-.19-.901-.5-1.211M5.25 8.25h13.5v9.75a2.25 2.25 0 01-2.25 2.25H7.5a2.25 2.25 0 01-2.25-2.25V8.25z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-[#173863]">Upcoming</p>
                            <p class="text-3xl font-extrabold text-slate-800">1</p>
                            <p class="text-xs text-slate-400">Items to be borrowed</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 flex items-start gap-4">
                        <div
                            class="w-11 h-11 rounded-xl bg-purple-50 text-purple-500 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6l4 2M21 12a9 9 0 11-9-9 9 9 0 019 9z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-[#173863]">Pending Approval</p>
                            <p class="text-3xl font-extrabold text-slate-800">1</p>
                            <p class="text-xs text-slate-400">Waiting for approval</p>
                        </div>
                    </div>
                </div>

                <!-- HERO + NEW REQUEST -->
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">
                    <div
                        class="lg:col-span-3 bg-white rounded-2xl border border-slate-100 shadow-sm p-8 flex items-center gap-8">
                        <div class="flex-1">
                            <h1 class="text-2xl font-extrabold text-[#173863] leading-snug">Borrow what you
                                need,<br>when you need it.</h1>
                            <p class="text-sm text-slate-500 mt-3 max-w-sm">ImmaLend makes it easy to find, request, and
                                manage the items you need for school activities</p>
                            <div class="flex items-center gap-3 mt-6">
                                <div
                                    class="w-10 h-10 rounded-xl bg-blue-50 text-[#173863] flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-[#173863]">Browse Items</p>
                                    <p class="text-xs text-slate-400">Explore all available items for loan</p>
                                </div>
                            </div>
                            <a href="{{ route('items.index') }}"
                                class="inline-flex items-center gap-2 mt-5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold px-5 py-3 rounded-xl">
                                Browse Now
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                        <div class="hidden md:flex items-end gap-3 opacity-90">
                            <svg class="w-28 h-20 text-slate-300" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <rect x="2" y="4" width="30" height="20" rx="2" />
                                <rect x="36" y="10" width="10" height="8" rx="1" />
                            </svg>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col justify-between">
                        <div>
                            <div
                                class="w-10 h-10 rounded-xl bg-green-50 text-green-600 flex items-center justify-center mb-3">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-[#173863]">New Request</p>
                            <p class="text-xs text-slate-400 mt-1">Don't see what you need? Request a new item.</p>
                        </div>
                        <a href="{{ route('lendings.create') }}"
                            class="inline-flex items-center justify-center gap-2 mt-5 bg-green-50 hover:bg-green-100 text-green-700 text-sm font-semibold px-4 py-3 rounded-xl">
                            Request Now
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- ANNOUNCEMENTS / HOW IT WORKS / UPCOMING RETURNS -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col">
                        <p class="text-base font-bold text-[#173863]">Announcements</p>
                        <div class="mt-4 space-y-4 flex-1">
                            <div class="flex gap-3">
                                <div class="w-10 h-10 rounded-lg bg-blue-100 shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">New Items Available</p>
                                    <p class="text-xs text-slate-400">Check out new items that are now available for
                                        borrowing.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-10 h-10 rounded-lg bg-green-100 shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">Inventory Check</p>
                                    <p class="text-xs text-slate-400">Inventory will be checked on 28 August 2026.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-10 h-10 rounded-lg bg-amber-100 shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">Return On Time</p>
                                    <p class="text-xs text-slate-400">Please return item on or before the due date to
                                        avoid penalties.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#"
                            class="mt-5 flex items-center justify-center gap-2 border border-slate-200 text-slate-600 text-sm font-semibold px-4 py-2.5 rounded-xl">
                            View All Announcements
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col">
                        <p class="text-base font-bold text-[#173863]">How It Works</p>
                        <p class="text-xs text-slate-400 mt-1">Learn the simple steps to borrow an item.</p>
                        <div class="mt-5 space-y-5 flex-1">
                            <div class="flex gap-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-blue-50 text-[#173863] text-sm font-bold flex items-center justify-center shrink-0">
                                    1</div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">Browse Items</p>
                                    <p class="text-xs text-slate-400">Find the items you need from our inventory.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-blue-50 text-[#173863] text-sm font-bold flex items-center justify-center shrink-0">
                                    2</div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">Submit Request</p>
                                    <p class="text-xs text-slate-400">Fill in the request form and wait for approval.
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-blue-50 text-[#173863] text-sm font-bold flex items-center justify-center shrink-0">
                                    3</div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">Borrow &amp; Return</p>
                                    <p class="text-xs text-slate-400">Once approved, borrow the item and return it on
                                        time.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#"
                            class="mt-5 flex items-center justify-center gap-2 border border-slate-200 text-slate-600 text-sm font-semibold px-4 py-2.5 rounded-xl">
                            View Guide
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col">
                        <p class="text-base font-bold text-[#173863]">Upcoming Returns</p>
                        <p class="text-xs text-slate-400 mt-1">Return on time to avoid penalties.</p>
                        <div class="mt-4 space-y-3 flex-1">
                            <div class="flex items-center gap-3 bg-slate-50 rounded-xl p-3">
                                <div class="w-12 h-12 rounded-lg bg-slate-200 shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">Sony SLT A65V</p>
                                    <p class="text-xs text-slate-400">Return today - 26 August 26</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 bg-slate-50 rounded-xl p-3">
                                <div class="w-12 h-12 rounded-lg bg-slate-200 shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">DJI Mini 3 Drone</p>
                                    <p class="text-xs text-slate-400">Return today - 26 August 26</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 bg-slate-50 rounded-xl p-3">
                                <div class="w-12 h-12 rounded-lg bg-slate-200 shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-700">Gitar Akustik</p>
                                    <p class="text-xs text-slate-400">Return on - 29 August 26</p>
                                </div>
                            </div>
                        </div>
                        <a href="#"
                            class="mt-5 flex items-center justify-center gap-2 border border-slate-200 text-slate-600 text-sm font-semibold px-4 py-2.5 rounded-xl">
                            View My Borrowings
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- FOOTER BANNER -->
                <div class="bg-[#173863] rounded-2xl px-8 py-5 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6l7-3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-white">Borrow Responsibly</p>
                            <p class="text-xs text-blue-200">Take care of the items and return them on time so others
                                can use it too. Thank you!</p>
                        </div>
                    </div>
                    <svg class="w-10 h-10 text-white/20 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>
                </div>

            </main>
        </div>
    </div>
@endsection