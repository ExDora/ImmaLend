@extends('layouts.app')



@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR ============ -->

        <!-- ============ MAIN ============ -->
        <div class="flex-1 min-w-0">

            <!-- HEADER -->

            <main class="p-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mt-2">
                    <div class="bg-[#EAF0FC] border border-[#C4CEE4] rounded-2xl p-5 flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#C0C9DE] text-[#173863] flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg></div>
                        <div>
                            <p class="text-base font-medium text-slate-800">Total Items</p>
                            <p class="text-3xl font-semibold text-slate-800 leading-tight">126</p>
                            <p class="text-sm text-slate-800 mt-1">All available items</p>
                        </div>
                    </div>
                    <div class="bg-[#E9FBEF] border border-green-200 rounded-2xl p-5 flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-green-200 text-green-800 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.3 0a2.251 2.251 0 015.3 0m-5.3 0c-.31.31-.5.738-.5 1.211V6a.75.75 0 00.75.75h3.5A.75.75 0 0015 6V5.047c0-.473-.19-.901-.5-1.211M5.25 8.25h13.5v9.75a2.25 2.25 0 01-2.25 2.25H7.5a2.25 2.25 0 01-2.25-2.25V8.25z" />
                            </svg></div>
                        <div>
                            <p class="text-base font-medium text-[#173863]">Currently Borrowed</p>
                            <p class="text-3xl font-semibold text-green-900 leading-tight">2</p>
                            <p class="text-sm text-slate-800 mt-1">Items you are using</p>
                        </div>
                    </div>
                    <div class="bg-[#FFF9F2] border border-amber-100 rounded-2xl p-5 flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.3 0a2.251 2.251 0 015.3 0m-5.3 0c-.31.31-.5.738-.5 1.211V6a.75.75 0 00.75.75h3.5A.75.75 0 0015 6V5.047c0-.473-.19-.901-.5-1.211M5.25 8.25h13.5v9.75a2.25 2.25 0 01-2.25 2.25H7.5a2.25 2.25 0 01-2.25-2.25V8.25z" />
                            </svg></div>
                        <div>
                            <p class="text-base font-medium text-amber-600">Upcoming</p>
                            <p class="text-3xl font-semibold text-amber-600 leading-tight">1</p>
                            <p class="text-sm text-amber-700 mt-1">Items to be borrowed</p>
                        </div>
                    </div>
                    <div class="bg-[#F3EBFD] border border-purple-200 rounded-2xl p-5 flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-purple-200 text-purple-600 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6l4 2M21 12a9 9 0 11-9-9 9 9 0 019 9z" />
                            </svg></div>
                        <div>
                            <p class="text-base font-medium text-purple-600">Pending Approval</p>
                            <p class="text-3xl font-semibold text-purple-600 leading-tight">1</p>
                            <p class="text-sm text-purple-600 mt-1">Waiting for approval</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-4 gap-6 mt-8">
                    <div
                        class="xl:col-span-3 bg-[#EAF0FC] border border-[#C4CEE4] rounded-2xl p-8 flex flex-col lg:flex-row lg:items-center gap-6">
                        <div class="lg:w-5/12">
                            <h1 class="text-3xl font-extrabold text-[#173863] leading-snug">Borrow what you need,<br>when
                                you need it.</h1>
                            <p class="text-sm text-[#173863]/80 mt-4 max-w-xs">ImmaLend makes it easy to find, request, and
                                manage the items you need for school activities</p>
                        </div>
                        <div class="hidden md:flex items-end gap-2 shrink-0"><svg class="w-28 h-20 text-slate-600"
                                viewBox="0 0 48 32" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="4" y="4" width="34" height="22" rx="2" />
                                <path d="M1 28h40" />
                            </svg><svg class="w-16 h-12 text-slate-500" viewBox="0 0 48 32" fill="none"
                                stroke="currentColor" stroke-width="1.5">
                                <rect x="4" y="8" width="30" height="16" rx="3" />
                                <circle cx="38" cy="16" r="6" />
                            </svg><svg class="w-14 h-12 text-slate-500" viewBox="0 0 48 32" fill="none"
                                stroke="currentColor" stroke-width="1.5">
                                <circle cx="8" cy="8" r="4" />
                                <circle cx="40" cy="8" r="4" />
                                <circle cx="8" cy="24" r="4" />
                                <circle cx="40" cy="24" r="4" />
                                <rect x="18" y="12" width="12" height="8" rx="2" />
                            </svg></div>
                        <div class="lg:ml-auto lg:w-60">
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-11 h-11 rounded-xl bg-[#173863] text-white flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                                    </svg></div>
                                <div>
                                    <p class="text-base font-semibold text-[#173863]">Browse Items</p>
                                    <p class="text-xs text-[#173863]/70">Explore all available items for loan</p>
                                </div>
                            </div>
                            <a href=""
                                class="mt-5 flex items-center justify-center gap-2 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold px-5 py-3 rounded-lg">Browse
                                Now <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg></a>
                        </div>
                    </div>

                    <div class="bg-white border border-[#C4CEE4] rounded-2xl p-6 flex flex-col justify-between">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-11 h-11 rounded-xl bg-[#173863] text-white flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12h6m-6 4h6M9 8h1.5M6.75 3.75h10.5A2.25 2.25 0 0119.5 6v14.25l-3.75-2.25-3.75 2.25-3.75-2.25-3.75 2.25V6a2.25 2.25 0 012.25-2.25z" />
                                </svg></div>
                            <div>
                                <p class="text-base font-semibold text-slate-800">New Request</p>
                                <p class="text-sm text-slate-700 mt-2">Don’t see what you need? Request a new item.</p>
                            </div>
                        </div>
                        <a href=""
                            class="mt-6 flex items-center justify-center gap-2 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold px-5 py-3 rounded-lg">Request
                            Now <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg></a>
                    </div>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-10">
                    <div
                        class="bg-white border-4 border-[#C4CEE4] rounded-3xl shadow-[0_6px_0_0_#D5DBE8] p-8 flex flex-col">
                        <h2 class="text-lg font-semibold text-slate-900">Announcements</h2>
                        <div class="mt-6 space-y-5 flex-1">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-14 h-14 rounded-xl bg-[#C0C9DE] text-[#173863] flex items-center justify-center shrink-0">
                                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                    </svg></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">New Items Available</p>
                                    <p class="text-xs text-slate-800">Check out new items that are now available for
                                        borrowing.</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-14 h-14 rounded-xl bg-[#C0C9DE] text-[#173863] flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3.75 7.5h16.5M4.5 6h15a.75.75 0 01.75.75v13.5a.75.75 0 01-.75.75h-15a.75.75 0 01-.75-.75V6.75A.75.75 0 014.5 6z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.5 14.5l1.75 1.75L14.5 13" />
                                    </svg></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">Inventory Check</p>
                                    <p class="text-xs text-slate-800">Inventory will be checked on 28 August 2026.</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-14 h-14 rounded-xl bg-[#C0C9DE] text-[#173863] flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6l4 2M21 12a9 9 0 11-9-9 9 9 0 019 9z" />
                                    </svg></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">Return On Time</p>
                                    <p class="text-xs text-slate-800">Please return item on or before the due date to avoid
                                        penalties.</p>
                                </div>
                            </div>
                        </div>
                        <a href=""
                            class="mt-6 flex items-center justify-center gap-2 border-2 border-[#C4CEE4] bg-white text-slate-800 text-sm font-medium px-4 py-3 rounded-lg">View
                            All Announcements <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg></a>
                    </div>
                    <div
                        class="bg-white border-4 border-[#C4CEE4] rounded-3xl shadow-[0_6px_0_0_#D5DBE8] p-8 flex flex-col">
                        <h2 class="text-lg font-semibold text-slate-900">How It Works</h2>
                        <p class="text-xs text-slate-700 mt-2">Learn the simple steps to borrow an item.</p>
                        <div class="mt-5 space-y-6 flex-1">
                            <div class="relative flex items-start gap-4"><span
                                    class="absolute left-5 top-12 h-6 border-l-2 border-dotted border-blue-300"></span>
                                <div
                                    class="w-10 h-10 rounded-full bg-[#C0C9DE] text-[#173863] text-base font-bold flex items-center justify-center shrink-0">
                                    1</div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">Browse Items</p>
                                    <p class="text-xs text-slate-800">Find the items you need from our inventory.</p>
                                </div>
                            </div>
                            <div class="relative flex items-start gap-4"><span
                                    class="absolute left-5 top-12 h-6 border-l-2 border-dotted border-blue-300"></span>
                                <div
                                    class="w-10 h-10 rounded-full bg-[#C0C9DE] text-[#173863] text-base font-bold flex items-center justify-center shrink-0">
                                    2</div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">Submit Request</p>
                                    <p class="text-xs text-slate-800">Fill in the request form and wait for approval.</p>
                                </div>
                            </div>
                            <div class="relative flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#C0C9DE] text-[#173863] text-base font-bold flex items-center justify-center shrink-0">
                                    3</div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">Borrow &amp; Return</p>
                                    <p class="text-xs text-slate-800">Once approved, borrow the item and return it on time.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href=""
                            class="mt-6 flex items-center justify-center gap-2 border-2 border-[#C4CEE4] bg-white text-slate-800 text-sm font-medium px-4 py-3 rounded-lg">View
                            Guide <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg></a>
                    </div>
                    <div
                        class="bg-white border-4 border-[#C4CEE4] rounded-3xl shadow-[0_6px_0_0_#D5DBE8] p-8 flex flex-col">
                        <h2 class="text-lg font-semibold text-slate-900">Upcoming Returns</h2>
                        <p class="text-xs text-slate-700 mt-2">Return on time to avoid penalties.</p>
                        <div class="mt-4 space-y-4 flex-1">
                            <div class="flex items-center gap-4 bg-[#EAF0FC] rounded-lg overflow-hidden">
                                <div class="w-16 h-16 bg-white border border-[#C4CEE4] shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">Sony SLT A65V</p>
                                    <p class="text-xs text-slate-800">Return today - 26 August 26</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 bg-[#EAF0FC] rounded-lg overflow-hidden">
                                <div class="w-16 h-16 bg-white border border-[#C4CEE4] shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">DJI Mini 3 Drone</p>
                                    <p class="text-xs text-slate-800">Return today - 26 August 26</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 bg-[#EAF0FC] rounded-lg overflow-hidden">
                                <div class="w-16 h-16 bg-white border border-[#C4CEE4] shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">Acoustic Guitar</p>
                                    <p class="text-xs text-slate-800">Return on - 29 August 26</p>
                                </div>
                            </div>
                        </div>
                        <a href=""
                            class="mt-6 flex items-center justify-center gap-2 border-2 border-[#C4CEE4] bg-white text-slate-800 text-sm font-medium px-4 py-3 rounded-lg">View
                            My Borrowings <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg></a>
                    </div>
                </div>

                <div
                    class="mt-10 bg-white border-4 border-[#C4CEE4] rounded-xl px-8 py-4 flex items-center justify-between">
                    <div class="flex items-center gap-5">
                        <div class="text-[#173863]"><svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6l7-3z" />
                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    fill="none" d="M9 12l2 2 4-4" />
                            </svg></div>
                        <div>
                            <p class="text-base font-semibold text-[#173863]">Borrow Responsibly</p>
                            <p class="text-sm text-[#173863]">Take care of the items and return them on time so others can
                                use it too. Thank you!</p>
                        </div>
                    </div>
                    <svg class="w-10 h-10 text-[#173863]/30 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>
                </div>
            </main>
        </div>

    </div>
@endsection