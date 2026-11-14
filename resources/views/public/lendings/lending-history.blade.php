@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="flex min-h-screen">

        <!-- Sidebar -->

        <!-- Main -->
        <div class="flex-1 flex flex-col">

            <!-- Header -->

            <!-- Content -->
            <main class="flex-1 px-10 py-10 bg-white">
                <h1 class="text-3xl font-bold text-blue-950">Borrowing History</h1>
                <p class="text-blue-950/70 mt-1 mb-8">A list of all the items you have previously borrowed.</p>

                <!-- Filters -->
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <select
                        class="rounded-xl border border-gray-300 px-4 py-3 text-blue-950/60 min-w-[200px] focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        <option>All statuses</option>
                        <option>Completed</option>
                        <option>Overdue</option>
                        <option>Cancelled</option>
                    </select>
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
                    <div class="relative flex-1 min-w-[220px]">
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
                                <th class="px-6 py-4 font-semibold">Items</th>
                                <th class="px-6 py-4 font-semibold">Loan Date</th>
                                <th class="px-6 py-4 font-semibold">Return Date</th>
                                <th class="px-6 py-4 font-semibold">Status</th>
                                <th class="px-6 py-4 font-semibold">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">

                            <tr>
                                <td class="px-6 py-4 text-blue-950">1</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">⌨️</span>
                                        <div>
                                            <p class="text-blue-950">Keyboard L...</p>
                                            <p class="text-sm text-blue-950/60">TEK-005</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>10:00</td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>15:00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        View Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950">2</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">🖥️</span>
                                        <div>
                                            <p class="text-blue-950">Monitor LG...</p>
                                            <p class="text-sm text-blue-950/60">TEK-004</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>10:00</td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>15:00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        View Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950">3</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">📽️</span>
                                        <div>
                                            <p class="text-blue-950">Epson EB X...</p>
                                            <p class="text-sm text-blue-950/60">TEK-006</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>10:00</td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>15:00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        View Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950">4</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">📷</span>
                                        <div>
                                            <p class="text-blue-950">Nikon coolp...</p>
                                            <p class="text-sm text-blue-950/60">TEK-010</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>10:00</td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>15:00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-block bg-orange-100 text-orange-600 text-sm font-medium px-3 py-1 rounded-lg">Overdue</span>
                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        View Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950">5</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">🎸</span>
                                        <div>
                                            <p class="text-blue-950">Acoustic G...</p>
                                            <p class="text-sm text-blue-950/60">MUS-001</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>10:00</td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>15:00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        View Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950">6</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">🏛️</span>
                                        <div>
                                            <p class="text-blue-950">Aula Tiranu...</p>
                                            <p class="text-sm text-blue-950/60">RM-003</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>10:00</td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>15:00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Completed</span>
                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        View Details</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 text-blue-950">7</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center">🥁</span>
                                        <div>
                                            <p class="text-blue-950">Cajon Meinl...</p>
                                            <p class="text-sm text-blue-950/60">MUS-005</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>10:00</td>
                                <td class="px-6 py-4 text-blue-950">May 17, 2026<br>15:00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-block bg-red-100 text-red-600 text-sm font-medium px-3 py-1 rounded-lg">Cancelled</span>
                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">👁
                                        View Details</button>
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