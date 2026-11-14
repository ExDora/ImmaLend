@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="flex min-h-screen">

        <!-- Sidebar -->

        <!-- Main -->

        <!-- Content -->
        <main class="flex-1 px-10 py-10 bg-white">
            <h1 class="text-3xl font-bold text-blue-950">Users</h1>
            <p class="text-blue-950/70 mt-1 mb-8">Manage system users and their access.</p>

            <!-- Filters -->
            <div class="flex flex-wrap items-center gap-4 mb-6">
                <div class="relative flex-1 min-w-[240px] max-w-sm">
                    <input type="text" placeholder="Search users"
                        class="w-full rounded-xl border border-gray-300 pl-4 pr-11 py-3 text-blue-950 placeholder-blue-950/40 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                    <svg class="w-5 h-5 text-blue-950/50 absolute right-4 top-1/2 -translate-y-1/2" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="7" />
                        <path stroke-linecap="round" d="M21 21l-4.35-4.35" />
                    </svg>
                </div>
                <select
                    class="rounded-xl border border-gray-300 px-4 py-3 text-blue-950/60 min-w-[180px] focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                    <option>All Roles</option>
                    <option>Administrator</option>
                    <option>Teacher</option>
                    <option>Student</option>
                </select>
            </div>

            <!-- Table -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden">
                <table class="w-full text-left">
                    <thead class="bg-gray-50 text-blue-950">
                        <tr>
                            <th class="px-6 py-4 font-semibold">No.</th>
                            <th class="px-6 py-4 font-semibold">Name</th>
                            <th class="px-6 py-4 font-semibold">Role</th>
                            <th class="px-6 py-4 font-semibold">Email</th>
                            <th class="px-6 py-4 font-semibold">Status</th>
                            <th class="px-6 py-4 font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">

                        <tr>
                            <td class="px-6 py-4 text-blue-950">1</td>
                            <td class="px-6 py-4 text-blue-950">Admin Utama</td>
                            <td class="px-6 py-4 text-blue-950">Administrator</td>
                            <td class="px-6 py-4 text-blue-950">admin@ski.sch.id</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">✎
                                        Edit</button>
                                    <button
                                        class="flex items-center justify-center border border-gray-300 text-red-500 rounded-lg w-9 h-9">🗑</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 text-blue-950">2</td>
                            <td class="px-6 py-4 text-blue-950">Andika Luxius</td>
                            <td class="px-6 py-4 text-blue-950">Teacher</td>
                            <td class="px-6 py-4 text-blue-950">andika.001@ski.sch.id</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">✎
                                        Edit</button>
                                    <button
                                        class="flex items-center justify-center border border-gray-300 text-red-500 rounded-lg w-9 h-9">🗑</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 text-blue-950">3</td>
                            <td class="px-6 py-4 text-blue-950">Felicia Gracia</td>
                            <td class="px-6 py-4 text-blue-950">Teacher</td>
                            <td class="px-6 py-4 text-blue-950">felicia.001@ski.sch.id</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">✎
                                        Edit</button>
                                    <button
                                        class="flex items-center justify-center border border-gray-300 text-red-500 rounded-lg w-9 h-9">🗑</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 text-blue-950">4</td>
                            <td class="px-6 py-4 text-blue-950">Andreas Nathaniel</td>
                            <td class="px-6 py-4 text-blue-950">Student</td>
                            <td class="px-6 py-4 text-blue-950">andreas.001@ski.sch.id</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">✎
                                        Edit</button>
                                    <button
                                        class="flex items-center justify-center border border-gray-300 text-red-500 rounded-lg w-9 h-9">🗑</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 text-blue-950">5</td>
                            <td class="px-6 py-4 text-blue-950">Brianna Rachel</td>
                            <td class="px-6 py-4 text-blue-950">Student</td>
                            <td class="px-6 py-4 text-blue-950">brianna.002@ski.sch.id</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">✎
                                        Edit</button>
                                    <button
                                        class="flex items-center justify-center border border-gray-300 text-red-500 rounded-lg w-9 h-9">🗑</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 text-blue-950">6</td>
                            <td class="px-6 py-4 text-blue-950">Christopher Rafael</td>
                            <td class="px-6 py-4 text-blue-950">Student</td>
                            <td class="px-6 py-4 text-blue-950">christopher.003@ski.sch.id</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">✎
                                        Edit</button>
                                    <button
                                        class="flex items-center justify-center border border-gray-300 text-red-500 rounded-lg w-9 h-9">🗑</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 text-blue-950">7</td>
                            <td class="px-6 py-4 text-blue-950">Davina Valencia</td>
                            <td class="px-6 py-4 text-blue-950">Student</td>
                            <td class="px-6 py-4 text-blue-950">devina.001@ski.sch.id</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">✎
                                        Edit</button>
                                    <button
                                        class="flex items-center justify-center border border-gray-300 text-red-500 rounded-lg w-9 h-9">🗑</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 text-blue-950">8</td>
                            <td class="px-6 py-4 text-blue-950">Ezra Zefanya</td>
                            <td class="px-6 py-4 text-blue-950">Student</td>
                            <td class="px-6 py-4 text-blue-950">ezra.001@ski.sch.id</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block bg-green-100 text-green-700 text-sm font-medium px-3 py-1 rounded-lg">Active</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button
                                        class="flex items-center gap-1 border border-gray-300 text-blue-950 text-sm rounded-lg px-3 py-2">✎
                                        Edit</button>
                                    <button
                                        class="flex items-center justify-center border border-gray-300 text-red-500 rounded-lg w-9 h-9">🗑</button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-center gap-2 mt-8">
                <button class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center text-blue-950">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="w-10 h-10 rounded-lg bg-blue-950 text-white font-medium">1</button>
                <button class="w-10 h-10 rounded-lg text-blue-950 font-medium hover:bg-gray-100">2</button>
                <button class="w-10 h-10 rounded-lg text-blue-950 font-medium hover:bg-gray-100">3</button>
                <button class="w-10 h-10 rounded-lg text-blue-950 font-medium hover:bg-gray-100">4</button>
                <button class="w-10 h-10 rounded-lg text-blue-950 font-medium hover:bg-gray-100">5</button>
                <button class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center text-blue-950">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

        </main>
    </div>
    </div>
@endsection