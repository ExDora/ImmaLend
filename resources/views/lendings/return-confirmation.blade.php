@extends('layouts.admin')

@section('title', $title)

@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR (Admin) ============ -->

        <!-- ============ MAIN ============ -->

        <div class="flex-1 min-w-0">

            <!-- HEADER -->


            <main class="p-8">

                <h1 class="text-3xl font-extrabold text-[#173863]">Return Confirmation</h1>
                <p class="text-sm text-[#173863]/70 mt-1">Confirm returned items and update their status</p>

                <!-- TAB UNDERLINE -->
                <div class="flex items-center gap-10 border-b border-slate-200 mt-6">
                    <div class="pb-3 border-b-2 border-[#173863] w-20"></div>
                </div>

                <!-- FILTERS -->
                <div class="flex flex-col lg:flex-row lg:items-center gap-3 mt-6">
                    <div
                        class="flex items-center justify-between gap-2 bg-white border border-slate-200 rounded-xl px-4 py-3 w-full lg:w-56">
                        <span class="text-sm text-slate-400">All Categories</span>
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                    <form action="" method="GET"
                        class="flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-4 py-3 flex-1">
                        <input type="text" name="search" placeholder="Select by student or item"
                            class="w-full text-sm text-slate-600 placeholder-slate-400 outline-none bg-transparent">
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </form>
                    <div
                        class="flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-4 py-3 w-full lg:w-64">
                        <span class="text-sm text-slate-400">Select date</span>
                        <svg class="w-4 h-4 text-slate-400 shrink-0 ml-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3.75 7.5h16.5M4.5 6h15a.75.75 0 01.75.75v13.5a.75.75 0 01-.75.75h-15a.75.75 0 01-.75-.75V6.75A.75.75 0 014.5 6z" />
                        </svg>
                    </div>
                </div>

                <!-- TABLE -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm mt-6 overflow-hidden">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-100 text-sm font-semibold text-slate-500">
                                <th class="px-6 py-4 w-16">No</th>
                                <th class="px-6 py-4">Username</th>
                                <th class="px-6 py-4">Items</th>
                                <th class="px-6 py-4">Loan Date</th>
                                <th class="px-6 py-4">Expected Return</th>
                                <th class="px-6 py-4">Return Date</th>
                                <th class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">1</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Stella Kim</p>
                                    <p class="text-xs text-slate-400">Stella</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Monitor LG...</p>
                                            <p class="text-xs text-slate-400">TEK-004</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 27, 2026<br><span
                                        class="text-xs text-slate-400">06:45</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 27, 2026<br><span
                                        class="text-xs text-slate-400">14:35</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 27, 2026<br><span
                                        class="text-xs text-slate-400">14:44</span></td>
                                <td class="px-6 py-4 align-top"><button type="button"
                                        class="bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-4 py-2.5 rounded-lg whitespace-nowrap">Confirm
                                        Return</button></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">2</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Karina aespa</p>
                                    <p class="text-xs text-slate-400">Andreas</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">HP Chromeb...</p>
                                            <p class="text-xs text-slate-400">TEK-001</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 28, 2026<br><span
                                        class="text-xs text-slate-400">08:35</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 28, 2026<br><span
                                        class="text-xs text-slate-400">14:35</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 28, 2026<br><span
                                        class="text-xs text-slate-400">14:48</span></td>
                                <td class="px-6 py-4 align-top"><button type="button"
                                        class="bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-4 py-2.5 rounded-lg whitespace-nowrap">Confirm
                                        Return</button></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">3</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Lucki Vicky</p>
                                    <p class="text-xs text-slate-400">Vicky</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Electric Guitar</p>
                                            <p class="text-xs text-slate-400">MUS-002</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 28, 2026<br><span
                                        class="text-xs text-slate-400">15:08</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 28, 2026<br><span
                                        class="text-xs text-slate-400">17:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 28, 2026<br><span
                                        class="text-xs text-slate-400">18:23</span></td>
                                <td class="px-6 py-4 align-top"><button type="button"
                                        class="bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-4 py-2.5 rounded-lg whitespace-nowrap">Confirm
                                        Return</button></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">4</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">San Choi</p>
                                    <p class="text-xs text-slate-400">San</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Audio Mixer Y...</p>
                                            <p class="text-xs text-slate-400">MUS-004</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 29, 2026<br><span
                                        class="text-xs text-slate-400">15:09</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 29, 2026<br><span
                                        class="text-xs text-slate-400">17:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 29, 2026<br><span
                                        class="text-xs text-slate-400">18:23</span></td>
                                <td class="px-6 py-4 align-top"><button type="button"
                                        class="bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-4 py-2.5 rounded-lg whitespace-nowrap">Confirm
                                        Return</button></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">5</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Taylor Swift</p>
                                    <p class="text-xs text-slate-400">Taylor</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Co-Working</p>
                                            <p class="text-xs text-slate-400">RM-002</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 31, 2026<br><span
                                        class="text-xs text-slate-400">15:10</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 31, 2026<br><span
                                        class="text-xs text-slate-400">17:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">August 31, 2026<br><span
                                        class="text-xs text-slate-400">18:24</span></td>
                                <td class="px-6 py-4 align-top"><button type="button"
                                        class="bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-4 py-2.5 rounded-lg whitespace-nowrap">Confirm
                                        Return</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="flex items-center justify-center gap-2 mt-6">
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#173863] text-white text-sm font-semibold">1</button>
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