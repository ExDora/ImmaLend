@extends('layouts.admin')

@section('title', $title)

@section('content')
    <div class="flex min-h-screen">

        <!-- Sidebar -->

        <!-- Main -->
        <div class="flex-1 flex flex-col">

            <!-- Header -->

            <!-- Content -->
            <main class="flex-1 px-10 py-10 bg-white">
                <h1 class="text-3xl font-bold text-blue-950">Lending History</h1>
                <p class="text-blue-950/70 mt-1 mb-8">Manage and monitor all school item lending activities.</p>

                <!-- Stat cards -->
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div class="border border-gray-300 rounded-2xl px-7 py-6 flex items-center gap-5">
                        <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m5-1.13a4 4 0 100-8 4 4 0 000 8zm6 8v-2a4 4 0 00-3-3.87" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-950 font-medium">Total Borrowers</p>
                            <p class="text-3xl font-bold text-blue-950 leading-tight">202</p>
                            <p class="text-sm text-blue-950/60">students and teachers who borrowed</p>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-2xl px-7 py-6 flex items-center gap-5">
                        <div class="w-14 h-14 rounded-full bg-purple-100 flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6M9 8h1M5 4h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-950 font-medium">Total Lending Transactions</p>
                            <p class="text-3xl font-bold text-blue-950 leading-tight">342</p>
                            <p class="text-sm text-blue-950/60">Total number of lending transactions</p>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <div class="relative w-80">
                        <input type="text" value="01/01/2026 - 01/05/2026" readonly
                            class="w-full rounded-xl border border-gray-300 pl-4 pr-11 py-3 text-blue-950/60 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        <svg class="w-5 h-5 text-blue-950/50 absolute right-4 top-1/2 -translate-y-1/2" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="18" rx="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M8 2v4M16 2v4" />
                        </svg>
                    </div>
                    <div class="relative flex-1 min-w-[220px] ml-auto">
                        <input type="text" placeholder="Search items"
                            class="w-full rounded-xl border border-gray-300 pl-4 pr-11 py-3 text-blue-950 placeholder-blue-950/40 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        <svg class="w-5 h-5 text-blue-950/50 absolute right-4 top-1/2 -translate-y-1/2" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="7" />
                            <path stroke-linecap="round" d="M21 21l-4.35-4.35" />
                        </svg>
                    </div>
                </div>

                <!-- Table -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <table class="w-full text-left">
                        <thead class="bg-gray-50 text-blue-950">
                            <tr>
                                <th class="px-6 py-4 font-semibold">No.</th>
                                <th class="px-6 py-4 font-semibold">Borrower</th>
                                <th class="px-6 py-4 font-semibold">Items</th>
                                <th class="px-6 py-4 font-semibold">Loan Date</th>
                                <th class="px-6 py-4 font-semibold">Return Date</th>
                                <th class="px-6 py-4 font-semibold">Status</th>
                                <th class="px-6 py-4 font-semibold">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">

                            <tr>
                                <td class="px-6 py-4 text-blue-950 align-top">1</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-blue-950">Andreas Nathaniel</p>
                                    <p class="text-sm text-blue-950/60">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">🛸</span>
                                        <div>
                                            <p class="text-blue-950">DJI Mini 3 Drone</p>
                                            <p class="text-sm text-blue-950/60">TEK-007</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 17, 2026<br>15:00</td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 17, 2026<br>17:00</td>
                                <td class="px-6 py-4 align-top">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950 align-top">2</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-blue-950">Brianna Rachel</p>
                                    <p class="text-sm text-blue-950/60">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">📷</span>
                                        <div>
                                            <p class="text-blue-950">Sony SLT A65V</p>
                                            <p class="text-sm text-blue-950/60">TEK-009</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 17, 2026<br>10:00</td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 17, 2026<br>13:00</td>
                                <td class="px-6 py-4 align-top">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950 align-top">3</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-blue-950">Christopher Rafael</p>
                                    <p class="text-sm text-blue-950/60">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">📷</span>
                                        <div>
                                            <p class="text-blue-950">Nikon coolpix...</p>
                                            <p class="text-sm text-blue-950/60">TEK-010</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 16, 2026<br>09:00</td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 16, 2026<br>10:30</td>
                                <td class="px-6 py-4 align-top">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950 align-top">4</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-blue-950">Devina Valencia</p>
                                    <p class="text-sm text-blue-950/60">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">⌨️</span>
                                        <div>
                                            <p class="text-blue-950">Keyboard Log...</p>
                                            <p class="text-sm text-blue-950/60">TEK-005</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 16, 2026<br>07:00</td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 16, 2026<br>09:35</td>
                                <td class="px-6 py-4 align-top">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950 align-top">5</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-blue-950">Ezra Zefanya</p>
                                    <p class="text-sm text-blue-950/60">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">🥁</span>
                                        <div>
                                            <p class="text-blue-950">Cajon Meinl H...</p>
                                            <p class="text-sm text-blue-950/60">MUS-005</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 16, 2026<br>09:55</td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 16, 2026<br>11:15</td>
                                <td class="px-6 py-4 align-top">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950 align-top">6</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-blue-950">Felicia Gracia</p>
                                    <p class="text-sm text-blue-950/60">Teacher</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">🏢</span>
                                        <div>
                                            <p class="text-blue-950">VCon</p>
                                            <p class="text-sm text-blue-950/60">RM-001</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 16, 2026<br>10:00</td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 16, 2026<br>12:00</td>
                                <td class="px-6 py-4 align-top">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950 align-top">7</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-blue-950">Gabriel Lie</p>
                                    <p class="text-sm text-blue-950/60">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">🎭</span>
                                        <div>
                                            <p class="text-blue-950">Studio</p>
                                            <p class="text-sm text-blue-950/60">RM-004</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 15, 2026<br>07:00</td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 15, 2026<br>13:55</td>
                                <td class="px-6 py-4 align-top">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950 align-top">8</td>
                                <td class="px-6 py-4 align-top">
                                    <p class="font-semibold text-blue-950">Hanna Maria</p>
                                    <p class="text-sm text-blue-950/60">Student</p>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">🥁</span>
                                        <div>
                                            <p class="text-blue-950">Drum Set Pea...</p>
                                            <p class="text-sm text-blue-950/60">MUS-006/k/</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 15, 2026<br>07:00</td>
                                <td class="px-6 py-4 text-blue-950 align-top">May 15, 2026<br>13:55</td>
                                <td class="px-6 py-4 align-top">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4 align-top">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        Details</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="flex items-center justify-center gap-2 mt-8">
                    <button
                        class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center text-blue-950">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="w-10 h-10 rounded-lg bg-blue-950 text-white font-medium">1</button>
                    <button class="w-10 h-10 rounded-lg text-blue-950 font-medium hover:bg-gray-100">2</button>
                    <button class="w-10 h-10 rounded-lg text-blue-950 font-medium hover:bg-gray-100">3</button>
                    <button class="w-10 h-10 rounded-lg text-blue-950 font-medium hover:bg-gray-100">4</button>
                    <button class="w-10 h-10 rounded-lg text-blue-950 font-medium hover:bg-gray-100">5</button>
                    <button
                        class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center text-blue-950">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

            </main>
        </div>
    </div>
@endsection