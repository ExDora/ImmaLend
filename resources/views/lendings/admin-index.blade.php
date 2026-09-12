@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR (Admin) ============ -->

        <!-- ============ MAIN ============ -->

        <div class="flex-1 min-w-0">

            <!-- HEADER -->

            <main class="p-8">

                <h1 class="text-3xl font-extrabold text-[#173863]">Borrowing Requests</h1>
                <p class="text-sm text-[#173863]/70 mt-1">Review and manage incoming borrowing requests.</p>

                <!-- TABS -->
                <div class="flex items-center gap-10 border-b border-slate-200 mt-6">
                    <a href="" class="pb-3 border-b-2 border-[#173863] text-[#173863] font-semibold text-sm">Pending
                        (11)</a>
                    <a href="" class="pb-3 text-slate-400 font-medium text-sm">Approved</a>
                    <a href="" class="pb-3 text-slate-400 font-medium text-sm">Rejected</a>
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
                                <th class="px-6 py-4 w-16">No.</th>
                                <th class="px-6 py-4">Student Name</th>
                                <th class="px-6 py-4">Items</th>
                                <th class="px-6 py-4">Loan Date</th>
                                <th class="px-6 py-4">Return Date</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">1</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Andreas Nathaniel</p>
                                    <p class="text-xs text-slate-400">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Epson EB X05...</p>
                                            <p class="text-xs text-slate-400">TEK-006</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 17, 2026<br><span
                                        class="text-xs text-slate-400">15:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 17, 2026<br><span
                                        class="text-xs text-slate-400">17:00</span></td>
                                <td class="px-6 py-4 align-top"><span
                                        class="text-xs font-semibold bg-amber-100 text-amber-700 px-3 py-1.5 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-2"><button type="button"
                                            class="bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Approve</button><button
                                            type="button"
                                            class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">2</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Brianna Rachel</p>
                                    <p class="text-xs text-slate-400">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Power Strip</p>
                                            <p class="text-xs text-slate-400">TEK-008</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 17, 2026<br><span
                                        class="text-xs text-slate-400">10:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 17, 2026<br><span
                                        class="text-xs text-slate-400">13:00</span></td>
                                <td class="px-6 py-4 align-top"><span
                                        class="text-xs font-semibold bg-amber-100 text-amber-700 px-3 py-1.5 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-2"><button type="button"
                                            class="bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Approve</button><button
                                            type="button"
                                            class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">3</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Christopher Rafael</p>
                                    <p class="text-xs text-slate-400">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Keyboard Log...</p>
                                            <p class="text-xs text-slate-400">TEK-005</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 16, 2026<br><span
                                        class="text-xs text-slate-400">09:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 16, 2026<br><span
                                        class="text-xs text-slate-400">10:30</span></td>
                                <td class="px-6 py-4 align-top"><span
                                        class="text-xs font-semibold bg-amber-100 text-amber-700 px-3 py-1.5 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-2"><button type="button"
                                            class="bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Approve</button><button
                                            type="button"
                                            class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">4</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Devina Valencia</p>
                                    <p class="text-xs text-slate-400">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Lenovo Ideap...</p>
                                            <p class="text-xs text-slate-400">TEK-002</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 16, 2026<br><span
                                        class="text-xs text-slate-400">07:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 16, 2026<br><span
                                        class="text-xs text-slate-400">09:35</span></td>
                                <td class="px-6 py-4 align-top"><span
                                        class="text-xs font-semibold bg-amber-100 text-amber-700 px-3 py-1.5 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-2"><button type="button"
                                            class="bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Approve</button><button
                                            type="button"
                                            class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">5</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Ezra Zefanya</p>
                                    <p class="text-xs text-slate-400">Teacher</p>
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
                                <td class="px-6 py-4 text-slate-600 align-top">May 16, 2026<br><span
                                        class="text-xs text-slate-400">09:55</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 16, 2026<br><span
                                        class="text-xs text-slate-400">11:15</span></td>
                                <td class="px-6 py-4 align-top"><span
                                        class="text-xs font-semibold bg-amber-100 text-amber-700 px-3 py-1.5 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-2"><button type="button"
                                            class="bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Approve</button><button
                                            type="button"
                                            class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">6</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Felicia Gracia</p>
                                    <p class="text-xs text-slate-400">Felicia</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Studio</p>
                                            <p class="text-xs text-slate-400">RM-004</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 16, 2026<br><span
                                        class="text-xs text-slate-400">10:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 16, 2026<br><span
                                        class="text-xs text-slate-400">12:00</span></td>
                                <td class="px-6 py-4 align-top"><span
                                        class="text-xs font-semibold bg-amber-100 text-amber-700 px-3 py-1.5 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-2"><button type="button"
                                            class="bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Approve</button><button
                                            type="button"
                                            class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">7</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Gabriel Lie</p>
                                    <p class="text-xs text-slate-400">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Amplifier Fen...</p>
                                            <p class="text-xs text-slate-400">MUS-007</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 15, 2026<br><span
                                        class="text-xs text-slate-400">07:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 15, 2026<br><span
                                        class="text-xs text-slate-400">13:55</span></td>
                                <td class="px-6 py-4 align-top"><span
                                        class="text-xs font-semibold bg-amber-100 text-amber-700 px-3 py-1.5 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-2"><button type="button"
                                            class="bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Approve</button><button
                                            type="button"
                                            class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500 align-top">8</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-slate-700">Hanna Maria</p>
                                    <p class="text-xs text-slate-400">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-slate-700">Microphone</p>
                                            <p class="text-xs text-slate-400">MUS-003</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 15, 2026<br><span
                                        class="text-xs text-slate-400">07:00</span></td>
                                <td class="px-6 py-4 text-slate-600 align-top">May 15, 2026<br><span
                                        class="text-xs text-slate-400">13:55</span></td>
                                <td class="px-6 py-4 align-top"><span
                                        class="text-xs font-semibold bg-amber-100 text-amber-700 px-3 py-1.5 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-2"><button type="button"
                                            class="bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Approve</button><button
                                            type="button"
                                            class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Reject</button>
                                    </div>
                                </td>
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